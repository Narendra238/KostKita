<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\ProfileUsersKost;
use App\Models\Kamar;
use Illuminate\Support\Facades\Hash;

class AuthenticationFlowTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        
        // Create test kamar
        Kamar::create([
            'id_kmr' => 'R001',
            'jenis_kamar' => 'Perempuan',
            'dimensi' => 'M',
            'harga' => 500000,
        ]);
    }

    /** @test */
    public function complete_authentication_flow_works()
    {
        // Step 1: Create admin account
        $adminData = [
            'username' => 'admin_test',
            'password' => 'admin123',
            'role' => 'admin',
        ];

        $createAdminResponse = $this->post('/buatakun', $adminData);
        $createAdminResponse->assertRedirect();
        $createAdminResponse->assertSessionHas('success', 'Akun berhasil dibuat!');

        // Step 2: Admin login
        $adminLoginResponse = $this->post('/login-gabungan', $adminData);
        $adminLoginResponse->assertRedirect('/dashboardadmin');

        // Step 3: Create student account and profile
        $studentData = [
            'id' => 'student_test',
            'namalengkap' => 'Test Student',
            'jenis_kelamin' => 'Perempuan',
            'no_tlp' => '081234567890',
            'asal' => 'Jakarta',
            'namaortu' => 'Test Parent',
            'no_ortu' => '081234567891',
            'id_kmr' => 'R001',
            'tgl_masuk' => '2025-01-01',
            'durasi_kost' => 365,
        ];

        $createStudentResponse = $this->post('/tambahpenghuni', $studentData);
        $createStudentResponse->assertRedirect('/dataPenghuni');

        // Step 4: Admin logout
        $logoutResponse = $this->get('/logout');
        $logoutResponse->assertRedirect('/login');

        // Step 5: Student login
        $studentLoginData = [
            'username' => 'student_test',
            'password' => 'student_test', // default password is the same as username
            'role' => 'user',
        ];

        $studentLoginResponse = $this->post('/login-gabungan', $studentLoginData);
        $studentLoginResponse->assertRedirect('/profilanak/student_test');

        // Step 6: View student profile
        $profileResponse = $this->get('/profilanak/student_test');
        $profileResponse->assertStatus(200);
        $profileResponse->assertSee('Test Student');

        // Step 7: Student logout
        $studentLogoutResponse = $this->get('/logout');
        $studentLogoutResponse->assertRedirect('/login');
    }

    /** @test */
    public function invalid_login_attempts_are_handled()
    {
        // Create user for testing
        User::create([
            'username' => 'testuser',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        // Test wrong password
        $wrongPasswordResponse = $this->post('/login-gabungan', [
            'username' => 'testuser',
            'password' => 'wrongpassword',
            'role' => 'user',
        ]);
        $wrongPasswordResponse->assertRedirect();
        $wrongPasswordResponse->assertSessionHas('error', 'Username atau password salah');

        // Test wrong role
        $wrongRoleResponse = $this->post('/login-gabungan', [
            'username' => 'testuser',
            'password' => 'password123',
            'role' => 'admin',
        ]);
        $wrongRoleResponse->assertRedirect();
        $wrongRoleResponse->assertSessionHas('error', 'Username atau password salah');

        // Test non-existent user
        $nonExistentResponse = $this->post('/login-gabungan', [
            'username' => 'nonexistent',
            'password' => 'password',
            'role' => 'user',
        ]);
        $nonExistentResponse->assertRedirect();
        $nonExistentResponse->assertSessionHas('error', 'Username atau password salah');
    }

    /** @test */
    public function session_management_works_correctly()
    {
        $user = User::create([
            'username' => 'sessiontest',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Login
        $loginResponse = $this->post('/login-gabungan', [
            'username' => 'sessiontest',
            'password' => 'password123',
            'role' => 'admin',
        ]);

        // Check session data
        $this->assertEquals('sessiontest', session('user_id'));
        $this->assertEquals('admin', session('role'));

        // Logout
        $logoutResponse = $this->get('/logout');
        
        // Check session is cleared
        $this->assertNull(session('user_id'));
        $this->assertNull(session('role'));
    }

    /** @test */
    public function user_role_redirects_correctly()
    {
        // Create admin user
        $admin = User::create([
            'username' => 'admin_redirect',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Create regular user with profile
        $user = User::create([
            'username' => 'user_redirect',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        ProfileUsersKost::create([
            'id' => 'user_redirect',
            'namalengkap' => 'Redirect User',
            'jenis_kelamin' => 'Laki-laki',
            'no_tlp' => '081234567890',
            'asal' => 'Jakarta',
            'namaortu' => 'Redirect Parent',
            'no_ortu' => '081234567891',
            'id_kmr' => 'R001',
            'tgl_masuk' => '2025-01-01',
            'durasi_kost' => 365,
        ]);

        // Test admin redirect
        $adminLoginResponse = $this->post('/login-gabungan', [
            'username' => 'admin_redirect',
            'password' => 'password123',
            'role' => 'admin',
        ]);
        $adminLoginResponse->assertRedirect('/dashboardadmin');

        // Logout
        $this->get('/logout');

        // Test user redirect
        $userLoginResponse = $this->post('/login-gabungan', [
            'username' => 'user_redirect',
            'password' => 'password123',
            'role' => 'user',
        ]);
        $userLoginResponse->assertRedirect('/profilanak/user_redirect');
    }
}
