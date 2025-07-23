<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserModelTest extends TestCase
{
    /** @test */
    public function it_can_create_user_with_required_fields()
    {
        // Test model instantiation and fillable attributes without database
        $userData = [
            'username' => 'testuser',
            'password' => 'hashed_password_here',
            'role' => 'user',
        ];

        $user = new User($userData);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('testuser', $user->username);
        $this->assertEquals('user', $user->role);
        $this->assertEquals('hashed_password_here', $user->password);
    }

    /** @test */
    public function it_has_fillable_attributes()
    {
        $user = new User();
        $expectedFillable = ['username', 'password', 'role'];
        
        $this->assertEquals($expectedFillable, $user->getFillable());
    }

    /** @test */
    public function it_hides_password_in_array()
    {
        // Test model hidden attributes without database operations
        $user = new User([
            'username' => 'testuser',
            'password' => 'hashed_password_here',
            'role' => 'admin',
        ]);

        // Test hidden attributes configuration
        $hiddenAttributes = $user->getHidden();
        $this->assertContains('password', $hiddenAttributes, 'Password should be in hidden attributes');
        
        // Test that fillable attributes are correct
        $fillableAttributes = $user->getFillable();
        $this->assertContains('username', $fillableAttributes);
        $this->assertContains('role', $fillableAttributes);
    }

    /** @test */
    public function it_can_create_admin_user()
    {
        // Test model accepts admin role without database operations
        $admin = new User([
            'username' => 'admin',
            'password' => 'hashed_admin_pass',
            'role' => 'admin',
        ]);

        $this->assertEquals('admin', $admin->role);
        $this->assertEquals('admin', $admin->username);
        $this->assertEquals('hashed_admin_pass', $admin->password);
    }

    /** @test */
    public function it_can_create_regular_user()
    {
        // Test model accepts user role without database operations
        $user = new User([
            'username' => 'regularuser',
            'password' => 'hashed_user_pass',
            'role' => 'user',
        ]);

        $this->assertEquals('user', $user->role);
        $this->assertEquals('regularuser', $user->username);
        $this->assertEquals('hashed_user_pass', $user->password);
    }
}
