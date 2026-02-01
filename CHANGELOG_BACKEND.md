# Backend Technical Changes - February 1st, 2026

To resolve critical issues with the user authentication system and data import processes, the following technical updates were made to the backend. These changes are required for the "Login" and "Data Import" functionality to operate correctly.

## 1. User Authentication Fixes

### Database Migration: `users` table
**File**: `database/migrations/2026_01_29_000007_create_users_table.php`

- **Added `password` column**: The previous migration was missing the `password` field entirely. This caused the registration process to succeed but fail to store any credentials, making subsequent logins impossible.
- **Added `rememberToken()`**: Included for standard Laravel session management and "Remember Me" functionality.

### Eloquent Model: `User.php`
**File**: `app/Models/User.php`

- **Updated `$fillable` array**: Included `password` in the mass-assignment fillable array. This is required by Laravel to allow the `User::create()` method to save the password during registration.

---

## 2. Institutional Data Import Fixes

### Database Migration: `institutions` table
**File**: `database/migrations/2026_01_29_000006_create_institutions_table.php`

- **Nullable `parent_ministry`**: Set the `parent_ministry` column to `->nullable()`. 
- **Rationale**: The input data files (`uni.sql`) contained records where this field was null. Without this change, the database was rejecting the data import with a "Column cannot be null" constraint error.

---

## Integration Instructions
If you are working on a local branch:
1. Pull the latest changes: `git pull origin main`
2. Refresh your local database: `php artisan migrate:fresh`
3. If needed, re-import initial data:
   - `mysql -u [user] -p occ < new.sql`
   - `mysql -u [user] -p occ < uni.sql`
