# 🚀 Setup Guide - CV Analyzer

Panduan lengkap untuk setup project CV Analyzer setelah clone dari GitHub.

## 📝 Ringkasan Command

Berikut adalah **semua command yang dibutuhkan** setelah clone repository:

### Windows (PowerShell/CMD)

```powershell
# 1. Masuk ke folder project
cd CV-Analyzer

# 2. Install Composer dependencies
composer install

# 3. Copy environment file
copy .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. EDIT FILE .env - Configure database dan Gemini API key
# Buka file .env dengan text editor dan ubah:
# - DB_DATABASE=cv_analyzer
# - DB_USERNAME=root
# - DB_PASSWORD= (kosongkan jika tidak ada password)
# - GEMINI_API_KEY=your_api_key_here

# 6. Buat database (via MySQL command atau phpMyAdmin)
C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# 7. Run migrations
php artisan migrate

# 8. Seed master data
php artisan db:seed --class=AdminUserSeeder
php artisan db:seed --class=DepartmentSeeder
php artisan db:seed --class=SkillSeeder

# 9. Create storage link
php artisan storage:link

# 10. Clear cache
php artisan optimize:clear

# 11. Run development server
php artisan serve
```

### Linux/Mac (Terminal)

```bash
# 1. Masuk ke folder project
cd CV-Analyzer

# 2. Install Composer dependencies
composer install

# 3. Copy environment file
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. EDIT FILE .env - Configure database dan Gemini API key
# nano .env atau vim .env
# - DB_DATABASE=cv_analyzer
# - DB_USERNAME=root
# - DB_PASSWORD= (sesuaikan)
# - GEMINI_API_KEY=your_api_key_here

# 6. Buat database
mysql -u root -p -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# 7. Run migrations
php artisan migrate

# 8. Seed master data
php artisan db:seed --class=AdminUserSeeder
php artisan db:seed --class=DepartmentSeeder
php artisan db:seed --class=SkillSeeder

# 9. Create storage link
php artisan storage:link

# 10. Set permissions
chmod -R 775 storage bootstrap/cache

# 11. Clear cache
php artisan optimize:clear

# 12. Run development server
php artisan serve
```

---

## 📋 Step-by-Step Detail

### Step 1: Clone Repository

```bash
git clone https://github.com/YOUR_USERNAME/CV-Analyzer.git
cd CV-Analyzer
```

### Step 2: Install Dependencies

Pastikan Composer sudah terinstall, lalu:

```bash
composer install
```

**Jika error "composer not found":**
- Download Composer dari: https://getcomposer.org/download/
- Install dan restart terminal

### Step 3: Setup Environment File

```bash
# Windows
copy .env.example .env

# Linux/Mac
cp .env.example .env
```

### Step 4: Generate Application Key

```bash
php artisan key:generate
```

Key akan otomatis ditambahkan ke file `.env`.

### Step 5: Configure `.env` File

Buka file `.env` dengan text editor dan ubah konfigurasi berikut:

#### Database Configuration

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cv_analyzer
DB_USERNAME=root
DB_PASSWORD=
```

**Notes:**
- Sesuaikan `DB_USERNAME` dan `DB_PASSWORD` dengan MySQL Anda
- Jika menggunakan XAMPP, biasanya username=`root` dan password kosong

#### Gemini AI Configuration

```env
GEMINI_API_KEY=your_gemini_api_key_here
GEMINI_MODEL=gemini-2.0-flash-exp
GEMINI_TEMPERATURE=0.3
GEMINI_MAX_TOKENS=4000
```

**Cara mendapatkan Gemini API Key:**
1. Buka: https://makersuite.google.com/app/apikey
2. Login dengan Google account
3. Klik "Create API Key"
4. Copy API key dan paste ke `.env`

#### Session & Cache Configuration

```env
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

### Step 6: Create Database

#### Via MySQL Command Line:

**Windows (XAMPP):**
```bash
C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

**Linux/Mac:**
```bash
mysql -u root -p -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

#### Via phpMyAdmin:

1. Buka: `http://localhost/phpmyadmin`
2. Klik tab "Databases"
3. Database name: `cv_analyzer`
4. Collation: `utf8mb4_unicode_ci`
5. Klik "Create"

### Step 7: Run Migrations

```bash
php artisan migrate
```

Ini akan membuat semua tabel di database:
- users
- departments
- skills
- job_descriptions
- job_description_skills
- cv_analyses
- cv_job_matches
- cache, sessions, jobs (Laravel default)

### Step 8: Seed Master Data

```bash
# Seed admin users
php artisan db:seed --class=AdminUserSeeder

# Seed departments (Engineering, Marketing, dll)
php artisan db:seed --class=DepartmentSeeder

# Seed skills (PHP, Laravel, MySQL, dll)
php artisan db:seed --class=SkillSeeder
```

**Data yang di-seed:**
- **2 Users**: 
  - Admin (`admin@cvanalyzer.com` / `admin123`)
  - User (`user@cvanalyzer.com` / `user123`)
- **10 Departments**: Engineering, Marketing, Design, dll
- **38 Skills**: PHP, Laravel, React, MySQL, dll

### Step 9: Create Storage Link

```bash
php artisan storage:link
```

Ini membuat symbolic link dari `public/storage` ke `storage/app/public` untuk file uploads.

### Step 10: Set Permissions (Linux/Mac only)

```bash
chmod -R 775 storage bootstrap/cache
chown -R $USER:$USER storage bootstrap/cache
```

### Step 11: Clear Cache

```bash
php artisan optimize:clear
```

Atau individual cache clear:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

### Step 12: Run Development Server

```bash
php artisan serve
```

Server akan berjalan di: **http://127.0.0.1:8000** atau **http://localhost:8000**

---

## ✅ Verification

Setelah setup, verifikasi bahwa semuanya berjalan:

### 1. Check Homepage
- Buka: `http://localhost:8000`
- Harus redirect ke login page

### 2. Login Admin
- Email: `admin@cvanalyzer.com`
- Password: `admin123`
- Harus masuk ke Admin Dashboard

### 3. Check Database
- Buka phpMyAdmin: `http://localhost/phpmyadmin`
- Pilih database `cv_analyzer`
- Check tabel sudah ada (11 tabel)
- Check data departments & skills sudah terisi

### 4. Test Features
- **Admin**: Create job description
- **User**: Upload CV (test dengan PDF dummy)

---

## 🔧 Common Issues & Solutions

### Issue 1: "Composer command not found"

**Solution:**
```bash
# Download dan install Composer
# https://getcomposer.org/download/
```

### Issue 2: "SQLSTATE[HY000] [2002] Connection refused"

**Solution:**
- Start MySQL service
- Check MySQL credentials di `.env`
- Test connection: `mysql -u root -p`

### Issue 3: "Class 'PDO' not found"

**Solution:**
- Enable PHP PDO extension
- Edit `php.ini` dan uncomment: `extension=pdo_mysql`

### Issue 4: "file_put_contents(): failed to open stream"

**Solution:**
```bash
# Windows (run as Administrator)
icacls storage /grant Everyone:F /t
icacls bootstrap/cache /grant Everyone:F /t

# Linux/Mac
chmod -R 775 storage bootstrap/cache
```

### Issue 5: "Gemini API Error 400"

**Solution:**
- Verify API key is correct in `.env`
- Check API quota: https://makersuite.google.com/
- Test API key dengan curl atau Postman

### Issue 6: "Migration table not found"

**Solution:**
```bash
# Clear dan re-run migrations
php artisan migrate:fresh
php artisan db:seed --class=AdminUserSeeder
php artisan db:seed --class=DepartmentSeeder
php artisan db:seed --class=SkillSeeder
```

---

## 🎯 Next Steps

Setelah setup berhasil:

1. **Ganti default accounts** - Change admin password
2. **Configure production settings** - Jika deploy ke production
3. **Setup backup** - Regular database backup
4. **Monitor logs** - Check `storage/logs/laravel.log`
5. **Read documentation** - Baca `README.md` dan `DATABASE_SCHEMA.md`

---

## 📞 Need Help?

Jika masih ada error atau pertanyaan:

1. Check `storage/logs/laravel.log` untuk error details
2. Run `php artisan optimize:clear` untuk clear cache
3. Buat Issue di GitHub repository
4. Contact project maintainer

---

Happy Coding! 🚀
