<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Kamar;
use App\Models\ProfileUsersKost;

class KamarModelTest extends TestCase
{
    /** @test */
    public function it_can_create_kamar_with_required_fields()
    {
        // Test model instantiation and fillable attributes without database
        $kamarData = [
            'id_kmr' => 'R001',
            'jenis_kamar' => 'Perempuan',
            'dimensi' => '3x4',
            'harga' => 500000,
        ];

        $kamar = new Kamar($kamarData);

        $this->assertInstanceOf(Kamar::class, $kamar);
        $this->assertEquals('R001', $kamar->id_kmr);
        $this->assertEquals('Perempuan', $kamar->jenis_kamar);
        $this->assertEquals('3x4', $kamar->dimensi);
        $this->assertEquals(500000, $kamar->harga);
    }

    /** @test */
    public function it_uses_correct_table_name()
    {
        $kamar = new Kamar();
        $this->assertEquals('kamar', $kamar->getTable());
    }

    /** @test */
    public function it_uses_correct_primary_key()
    {
        $kamar = new Kamar();
        $this->assertEquals('id_kmr', $kamar->getKeyName());
        $this->assertFalse($kamar->getIncrementing());
        $this->assertEquals('string', $kamar->getKeyType());
    }

    /** @test */
    public function it_has_fillable_attributes()
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
    public function it_can_have_profile_users_kost_relationship()
    {
        // Test relationship method exists without database operations
        $kamar = new Kamar();
        
        // Check if profileUsersKost relationship method exists
        $this->assertTrue(
            method_exists($kamar, 'profileUsersKost'), 
            'Kamar should have profileUsersKost relationship method'
        );
        
        // Check method visibility using reflection
        $reflection = new \ReflectionClass($kamar);
        $hasProfileUsersKostMethod = $reflection->hasMethod('profileUsersKost');
        $this->assertTrue($hasProfileUsersKostMethod, 'ProfileUsersKost relationship method should be defined');
        
        if ($hasProfileUsersKostMethod) {
            $method = $reflection->getMethod('profileUsersKost');
            $this->assertTrue($method->isPublic(), 'ProfileUsersKost relationship method should be public');
        }
    }

    /** @test */
    public function it_can_have_penghuni_aktif_relationship()
    {
        // Test relationship method exists without database operations
        $kamar = new Kamar();
        
        // Check if penghuniAktif relationship method exists
        $this->assertTrue(
            method_exists($kamar, 'penghuniAktif'), 
            'Kamar should have penghuniAktif relationship method'
        );
        
        // Check method visibility using reflection
        $reflection = new \ReflectionClass($kamar);
        $hasPenghuniAktifMethod = $reflection->hasMethod('penghuniAktif');
        $this->assertTrue($hasPenghuniAktifMethod, 'PenghuniAktif relationship method should be defined');
        
        if ($hasPenghuniAktifMethod) {
            $method = $reflection->getMethod('penghuniAktif');
            $this->assertTrue($method->isPublic(), 'PenghuniAktif relationship method should be public');
        }
    }

    /** @test */
    public function it_can_count_kamar_cewe_kosong()
    {
        // Test static method exists without database operations
        $this->assertTrue(
            method_exists(Kamar::class, 'countKamarCeweKosong'), 
            'Kamar should have countKamarCeweKosong static method'
        );
        
        // Check method visibility using reflection
        $reflection = new \ReflectionClass(Kamar::class);
        $hasCountMethod = $reflection->hasMethod('countKamarCeweKosong');
        $this->assertTrue($hasCountMethod, 'countKamarCeweKosong method should be defined');
        
        if ($hasCountMethod) {
            $method = $reflection->getMethod('countKamarCeweKosong');
            $this->assertTrue($method->isStatic(), 'countKamarCeweKosong should be a static method');
            $this->assertTrue($method->isPublic(), 'countKamarCeweKosong should be public');
        }
    }

    /** @test */
    public function it_can_count_kamar_cowo_kosong()
    {
        // Test static method exists without database operations
        $this->assertTrue(
            method_exists(Kamar::class, 'countKamarCowoKosong'), 
            'Kamar should have countKamarCowoKosong static method'
        );
        
        // Check method visibility using reflection
        $reflection = new \ReflectionClass(Kamar::class);
        $hasCountMethod = $reflection->hasMethod('countKamarCowoKosong');
        $this->assertTrue($hasCountMethod, 'countKamarCowoKosong method should be defined');
        
        if ($hasCountMethod) {
            $method = $reflection->getMethod('countKamarCowoKosong');
            $this->assertTrue($method->isStatic(), 'countKamarCowoKosong should be a static method');
            $this->assertTrue($method->isPublic(), 'countKamarCowoKosong should be public');
        }
    }

    /** @test */
    public function it_can_create_different_room_types()
    {
        // Test model accepts different room types without database operations
        $kamarPerempuan = new Kamar([
            'id_kmr' => 'R005',
            'jenis_kamar' => 'Perempuan',
            'dimensi' => '3x4',
            'harga' => 500000,
        ]);

        $kamarLakiLaki = new Kamar([
            'id_kmr' => 'R015',
            'jenis_kamar' => 'Laki-laki',
            'dimensi' => '4x4',
            'harga' => 600000,
        ]);

        $this->assertEquals('Perempuan', $kamarPerempuan->jenis_kamar);
        $this->assertEquals('Laki-laki', $kamarLakiLaki->jenis_kamar);
        $this->assertEquals(500000, $kamarPerempuan->harga);
        $this->assertEquals(600000, $kamarLakiLaki->harga);
    }
}
