# Test Documentation for KostKita Application (Safe Testing)

Dokumentasi ini menjelaskan file-file test yang telah dibuat untuk aplikasi KostKita (sistem manajemen kost/boarding house) dengan pendekatan **SAFE TESTING** yang tidak akan menghapus data existing Anda.

## ⚠️ PENDEKATAN SAFE TESTING

File test ini dibuat dengan prinsip:
- **TIDAK menggunakan `RefreshDatabase`** sehingga data Anda tetap aman
- **Membuat data test dengan nama unik** (menggunakan timestamp dan random number)
- **Membersihkan data test sendiri** setelah test selesai
- **Menggunakan prefix "test" atau "TEST"** untuk semua data test

## File Test yang Dibuat

### 1. Feature Tests (Safe Version)

#### `SafeLoginTest.php` ⭐ RECOMMENDED
Test yang paling aman untuk fitur login dan manajemen:
- ✅ Menampilkan halaman login, buat akun, lihat akun
- ✅ Validasi form login dan buat akun
- ✅ Membuat dan menghapus akun test dengan nama unik
- ✅ Test login dengan akun sementara
- ✅ Test operasi penghuni dengan data sementara
- ✅ Akses halaman dashboard tanpa merusak data
- ✅ Test halaman detail kamar
- ✅ Handling request invalid

#### `LoginControllerTest.php` (Updated - Safe Version)
Test untuk fitur login dengan data test yang aman:
- ✅ Setup dan teardown data test secara manual
- ✅ Menggunakan nama user dengan prefix "test"
- ✅ Membersihkan data test setelah selesai
- ✅ Tidak menggunakan RefreshDatabase

### 2. Unit Tests (Safe Version)

#### `SafeModelTest.php` ⭐ RECOMMENDED
Test untuk model tanpa menyentuh database:
- ✅ Test atribut fillable models
- ✅ Test konfigurasi table name dan primary key
- ✅ Test relationships yang tersedia
- ✅ Test password hashing
- ✅ Test casting attributes
- ✅ Test instantiation models

## Cara Menjalankan Test (Safe)

### 1. Menjalankan Test Aman Saja
```bash
# Test yang paling aman (Unit tests)
php artisan test tests/Unit/SafeModelTest.php

# Test feature yang aman
php artisan test tests/Feature/SafeLoginTest.php

# Test login yang sudah di-update
php artisan test tests/Feature/LoginControllerTest.php
```

### 2. Menjalankan Test Tertentu
```bash
# Test method tertentu
php artisan test --filter=it_can_show_login_related_pages

# Test dengan verbose output untuk debugging
php artisan test tests/Feature/SafeLoginTest.php --verbose
```

### 3. ⚠️ HINDARI File Test Ini (Masih Menggunakan RefreshDatabase)
```bash
# JANGAN JALANKAN INI - AKAN MENGHAPUS DATA
# php artisan test tests/Feature/ProfileUsersKostControllerTest.php
# php artisan test tests/Feature/KamarControllerTest.php
# php artisan test tests/Feature/MahasiswaManagementIntegrationTest.php
# php artisan test tests/Feature/AuthenticationFlowTest.php
# php artisan test tests/Unit/UserModelTest.php
# php artisan test tests/Unit/ProfileUsersKostModelTest.php
# php artisan test tests/Unit/KamarModelTest.php
```

## Fitur Yang Di-Test (Safe)

### ✅ Yang Aman untuk Ditest
1. **Validasi Form** - Tidak menyentuh data existing
2. **Tampilan Halaman** - Hanya mengecek response status
3. **Model Attributes** - Test konfigurasi model tanpa database
4. **Password Hashing** - Test fungsi hash tanpa menyimpan
5. **Data Test Sementara** - Membuat dan langsung hapus

### ⚠️ Yang Perlu Hati-Hati
1. **CRUD Operations** - Hanya dengan data test yang diberi nama unik
2. **Login Test** - Menggunakan akun test sementara
3. **Database Operations** - Selalu cleanup setelah test

## Struktur Data Test Yang Aman

### Penamaan Data Test
```php
// Username dengan timestamp untuk uniqueness
$username = 'testuser' . time() . rand(1000, 9999);

// ID penghuni dengan prefix
$penghuniId = 'testpenghuni' . time() . rand(1000, 9999);

// Kamar test dengan prefix
$kamarId = 'TESTROOM' . time();
```

### Pattern Cleanup
```php
public function tearDown(): void
{
    // Selalu bersihkan data test
    if (!empty($this->testUsersIds)) {
        User::whereIn('id', $this->testUsersIds)->delete();
    }
    parent::tearDown();
}
```

## Cara Menambah Test Baru Yang Aman

### 1. Template Test Method Aman
```php
/** @test */
public function it_can_test_something_safely()
{
    // Buat data test dengan nama unik
    $uniqueId = 'test' . time() . rand(1000, 9999);
    
    // Lakukan test
    $response = $this->post('/some-route', [
        'id' => $uniqueId,
        // data lainnya
    ]);
    
    // Assert hasil
    $response->assertStatus(200);
    
    // WAJIB: Bersihkan data test
    Model::where('id', $uniqueId)->delete();
}
```

### 2. Test Validasi (Paling Aman)
```php
/** @test */
public function it_validates_form_input()
{
    // Test validasi tidak menyentuh database
    $response = $this->post('/route', []);
    $response->assertSessionHasErrors(['field1', 'field2']);
}
```

### 3. Test View (Aman)
```php
/** @test */
public function it_shows_page_correctly()
{
    $response = $this->get('/page');
    $response->assertStatus(200);
    $response->assertViewIs('page-name');
}
```

## Tips Debugging Test Aman

### 1. Cek Data Test
```php
// Debug data yang dibuat
dd(User::where('username', 'LIKE', 'test%')->get());
```

### 2. Verifikasi Cleanup
```php
// Pastikan data test terhapus
$this->assertDatabaseMissing('users', ['username' => $testUsername]);
```

### 3. Monitor Database
```bash
# Cek data dengan prefix test
mysql -e "SELECT * FROM users WHERE username LIKE 'test%'"
```

## Rekomendasi Urutan Testing

### 1. Mulai dengan Unit Tests (Paling Aman)
```bash
php artisan test tests/Unit/SafeModelTest.php
```

### 2. Lanjut dengan Feature Tests Aman
```bash
php artisan test tests/Feature/SafeLoginTest.php
```

### 3. Test Login dengan Data Sementara
```bash
php artisan test tests/Feature/LoginControllerTest.php
```

## Troubleshooting

### Error "Data Test Tidak Terhapus"
```bash
# Manual cleanup jika diperlukan
DELETE FROM users WHERE username LIKE 'test%';
DELETE FROM AnakKost WHERE id LIKE 'test%';
DELETE FROM kamar WHERE id_kmr LIKE 'TEST%';
```

### Error "Unique Constraint"
Pastikan menggunakan timestamp dan random number:
```php
$uniqueName = 'test' . time() . rand(1000, 9999);
```

## ✅ Checklist Sebelum Menjalankan Test

- [ ] Backup database (opsional, tapi recommended)
- [ ] Pastikan test menggunakan prefix "test" untuk data
- [ ] Verifikasi ada cleanup di tearDown()
- [ ] Mulai dengan SafeModelTest.php dulu
- [ ] Jangan jalankan test dengan RefreshDatabase
- [ ] Monitor database setelah test selesai
