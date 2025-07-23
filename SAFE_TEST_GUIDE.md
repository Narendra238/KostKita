# 🧪 Test Guide - KostKita (Safe & Simple)

## ✅ Recommended Test Files (SAFE TO RUN)

### 1. `SimpleLoginTest.php` - **MOST RECOMMENDED** ⭐⭐⭐
File test yang paling aman dan robust:
```bash
php artisan test tests/Feature/SimpleLoginTest.php
```

**What it tests:**
- ✅ Basic page access (login, register, etc.)
- ✅ Form validation
- ✅ User creation & cleanup
- ✅ Login/logout flow
- ✅ CRUD operations with safe data
- ✅ Model basic functionality

**Why it's safe:**
- Uses unique timestamps for test data
- Automatic cleanup after each test
- Graceful error handling
- No RefreshDatabase

### 2. `SafeModelTest.php` - **UNIT TESTS** ⭐⭐
```bash
php artisan test tests/Unit/SafeModelTest.php
```

**What it tests:**
- ✅ Model configurations
- ✅ Fillable attributes
- ✅ Table names & primary keys
- ✅ Relationships existence
- ✅ Password hashing

**Why it's safe:**
- No database operations
- Only tests model structure
- Pure unit testing

### 3. `ProfileUsersKostModelTest.php` - **FULLY WORKING** ⭐⭐
```bash
php artisan test tests/Unit/ProfileUsersKostModelTest.php
```

**What it tests:**
- ✅ ProfileUsersKost model structure
- ✅ Table name, primary key, timestamps
- ✅ Fillable attributes
- ✅ Status bayar boolean casting
- ✅ Kamar relationship exists
- ✅ Gender and date value handling

**Why it's safe:**
- No database operations
- Tests all model functionality without data
- 9 tests, all passing

## ⚠️ Use with Caution

### 3. `LoginControllerTest.php` - Updated Safe Version
```bash
php artisan test tests/Feature/LoginControllerTest.php
```
- Uses manual setup/teardown
- Creates test data with prefixes
- Should be safe, but more complex

### 4. `SafeLoginTest.php` - Complex Version
```bash
php artisan test tests/Feature/SafeLoginTest.php
```
- More comprehensive but had some issues
- Fixed in latest version but still complex

## 🚫 DO NOT RUN (Uses RefreshDatabase)

❌ `ProfileUsersKostControllerTest.php`
❌ `KamarControllerTest.php` 
❌ `MahasiswaManagementIntegrationTest.php`
❌ `AuthenticationFlowTest.php`
❌ `UserModelTest.php`
❌ `ProfileUsersKostModelTest.php`
❌ `KamarModelTest.php`

## 🎯 Quick Test Commands

### Start Here (Safest):
```bash
# Test basic model structure (safest)
php artisan test tests/Unit/SafeModelTest.php

# Test login functionality (recommended)
php artisan test tests/Feature/SimpleLoginTest.php
```

### If above works fine:
```bash
# More comprehensive login tests
php artisan test tests/Feature/LoginControllerTest.php
```

### Check specific functionality:
```bash
# Test specific method
php artisan test --filter=it_can_show_login_pages

# Test specific file with filter
php artisan test tests/Feature/SimpleLoginTest.php --filter=basic_model_tests
```

## 📋 Test Coverage

### ✅ What's Being Tested
1. **Authentication Flow**
   - Login/logout functionality
   - Form validation
   - Session handling
   - User creation/deletion

2. **Data Management**
   - Safe CRUD operations
   - Validation rules
   - Payment status updates

3. **Model Structure**
   - Table configurations
   - Relationships
   - Fillable attributes
   - Primary keys

4. **Page Access**
   - Dashboard pages
   - Form pages
   - Detail pages
   - Error handling

### ⚠️ What's NOT Tested (To Keep Data Safe)
- Full database integration
- Complex business logic with existing data
- Mass data operations
- Migration testing

## 🛠️ Troubleshooting

### If tests fail:
1. **Check database connection**
   ```bash
   php artisan tinker
   DB::connection()->getPdo();
   ```

2. **Clear cache**
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

3. **Check if models are accessible**
   ```bash
   php artisan tinker
   new App\Models\User();
   ```

### Common Issues:
- **SQLite Driver Error**: Install PHP SQLite extension (`php-sqlite3`)
  - For Windows: Use XAMPP/WAMP with full PHP installation
  - Check installed extensions: `php -m | findstr sqlite`
- **Status Code 500**: Usually database connection or configuration issue
- **"could not find driver"**: Missing PHP database extension
- **Middleware blocking**: Some routes might require authentication
- **Validation errors**: Forms might have additional validation rules
- **Database constraints**: Foreign key constraints might prevent operations
- **Connection refused**: Database server not running

### Debug Output:
Add this to any test method for debugging:
```php
$response = $this->get('/some-route');
dump($response->getStatusCode());
dump($response->getContent());
```

## 📊 Success Indicators

### ✅ Good Signs:
- Tests pass without errors
- No data corruption in your database
- Clean console output
- All test data cleaned up automatically

### ⚠️ Warning Signs:
- Tests create data that's not cleaned up
- Error messages about foreign key constraints
- Sessions not clearing properly
- Real user data being modified

## 🔄 Test Development Cycle

1. **Start with SimpleLoginTest.php**
2. **Add SafeModelTest.php** 
3. **If confident, try LoginControllerTest.php**
4. **Monitor your database** after each test run
5. **Check for test data cleanup**

## 💡 Best Practices

### Before Running Tests:
- [ ] Backup your database (optional but recommended)
- [ ] Check current data count: `SELECT COUNT(*) FROM users`
- [ ] Note any important user IDs

### During Testing:
- [ ] Run one test file at a time initially
- [ ] Check test data is using prefixes (test*, TEST*)
- [ ] Monitor database for leftover test data

### After Testing:
- [ ] Verify your original data is intact
- [ ] Clean any leftover test data:
  ```sql
  DELETE FROM users WHERE username LIKE 'test%';
  DELETE FROM AnakKost WHERE id LIKE 'test%';
  DELETE FROM kamar WHERE id_kmr LIKE 'TEST%';
  ```

## 🎉 Expected Results

Running the recommended tests should show something like:
```
✅ Tests:  8 passed
✅ Duration: ~10s
✅ No data corruption
✅ Clean test data removal
```

That's it! Stick to `SimpleLoginTest.php` and `SafeModelTest.php` for the safest testing experience.
