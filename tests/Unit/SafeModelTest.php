<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Models\ProfileUsersKost;
use App\Models\Kamar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\TestCase as LaravelTestCase;

class SafeModelTest extends LaravelTestCase
{
    /** @test */
    public function user_model_has_correct_fillable_attributes()
    {
        $user = new User();
        $expectedFillable = ['username', 'password', 'role'];
        
        $this->assertEquals($expectedFillable, $user->getFillable());
    }

    /** @test */
    public function user_model_hides_password_in_array()
    {
        $user = new User([
            'username' => 'testuser',
            'password' => 'hashedpassword',
            'role' => 'user'
        ]);

        $userArray = $user->toArray();
        
        $this->assertArrayNotHasKey('password', $userArray);
        $this->assertArrayHasKey('username', $userArray);
        $this->assertArrayHasKey('role', $userArray);
    }

    /** @test */
    public function profile_users_kost_model_has_correct_table_name()
    {
        $profile = new ProfileUsersKost();
        $this->assertEquals('AnakKost', $profile->getTable());
    }

    /** @test */
    public function profile_users_kost_model_has_correct_primary_key()
    {
        $profile = new ProfileUsersKost();
        $this->assertEquals('id', $profile->getKeyName());
        $this->assertFalse($profile->getIncrementing());
        $this->assertEquals('string', $profile->getKeyType());
    }

    /** @test */
    public function profile_users_kost_model_has_timestamps_disabled()
    {
        $profile = new ProfileUsersKost();
        $this->assertFalse($profile->timestamps);
    }

    /** @test */
    public function profile_users_kost_model_has_correct_fillable_attributes()
    {
        $profile = new ProfileUsersKost();
        $expectedFillable = [
            'id',
            'namalengkap',
            'namaortu',
            'asal',
            'no_tlp',
            'no_ortu',
            'jenis_kelamin',
            'tgl_masuk',
            'durasi_kost',
            'id_kmr',
        ];
        
        $this->assertEquals($expectedFillable, $profile->getFillable());
    }

    /** @test */
    public function kamar_model_has_correct_table_name()
    {
        $kamar = new Kamar();
        $this->assertEquals('kamar', $kamar->getTable());
    }

    /** @test */
    public function kamar_model_has_correct_primary_key()
    {
        $kamar = new Kamar();
        $this->assertEquals('id_kmr', $kamar->getKeyName());
        $this->assertFalse($kamar->getIncrementing());
        $this->assertEquals('string', $kamar->getKeyType());
    }

    /** @test */
    public function kamar_model_has_correct_fillable_attributes()
    {
        $kamar = new Kamar();
        $expectedFillable = [
            'id_kmr',
            'jenis_kamar',
            'dimensi',
            'harga',
        ];
        
        $this->assertEquals($expectedFillable, $kamar->getFillable());
    }

    /** @test */
    public function password_can_be_hashed_correctly()
    {
        $plainPassword = 'testpassword123';
        $hashedPassword = Hash::make($plainPassword);
        
        $this->assertTrue(Hash::check($plainPassword, $hashedPassword));
        $this->assertFalse(Hash::check('wrongpassword', $hashedPassword));
    }

    /** @test */
    public function models_can_be_instantiated()
    {
        $user = new User();
        $this->assertInstanceOf(User::class, $user);

        $profile = new ProfileUsersKost();
        $this->assertInstanceOf(ProfileUsersKost::class, $profile);

        $kamar = new Kamar();
        $this->assertInstanceOf(Kamar::class, $kamar);
    }

    /** @test */
    public function profile_users_kost_casts_status_bayar_to_boolean()
    {
        $profile = new ProfileUsersKost();
        $casts = $profile->getCasts();
        
        $this->assertArrayHasKey('status_bayar', $casts);
        $this->assertEquals('boolean', $casts['status_bayar']);
    }

    /** @test */
    public function models_have_correct_relationships_defined()
    {
        // Test jika method relasi ada
        $kamar = new Kamar();
        $this->assertTrue(method_exists($kamar, 'profileUsersKost'));
        $this->assertTrue(method_exists($kamar, 'penghuniAktif'));

        $profile = new ProfileUsersKost();
        $this->assertTrue(method_exists($profile, 'kamar'));
    }

    /** @test */
    public function kamar_model_has_static_count_methods()
    {
        $kamar = new Kamar();
        $this->assertTrue(method_exists($kamar, 'countKamarCeweKosong'));
        $this->assertTrue(method_exists($kamar, 'countKamarCowoKosong'));
    }
}
