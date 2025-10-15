# CV Analyzer - AI-Powered CV Analysis System# CV Analyzer - AI-Powered CV Analysis System# CV Analyzer - AI-Powered CV Analysis System# CV Analyzer - AI-Powered CV Analysis System<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel&logoColor=white)

![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php&logoColor=white)

![PostgreSQL](https://img.shields.io/badge/PostgreSQL-14+-316192?logo=postgresql&logoColor=white)![Laravel](https://img.shields.io/badge/Laravel-11.x-red)

![License](https://img.shields.io/badge/License-MIT-green)

![PHP](https://img.shields.io/badge/PHP-8.2+-blue)

CV Analyzer adalah sistem analisis CV berbasis AI yang menggunakan **Google Gemini AI** untuk menganalisis CV dan mencocokkan dengan job descriptions.

![PostgreSQL](https://img.shields.io/badge/PostgreSQL-14+-blue)![Laravel](https://img.shields.io/badge/Laravel-11.x-red)

**🗄️ Database:** PostgreSQL (Required)

![License](https://img.shields.io/badge/License-MIT-green)

---

![PHP](https://img.shields.io/badge/PHP-8.2+-blue)

## 🚀 Features

CV Analyzer adalah sistem analisis CV berbasis AI yang menggunakan Google Gemini AI untuk menganalisis CV dan mencocokkan dengan job descriptions.

- ✅ **Authentication System** - Login & Register dengan role-based (Admin/User)

- ✅ **CV Analysis** - Upload dan analisis CV dengan AI (Gemini)![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange)![Laravel](https://img.shields.io/badge/Laravel-11.x-red)<p align="center">

- ✅ **Job Description Management** - CRUD job descriptions (Admin only)

- ✅ **CV-Job Matching** - Automatic matching CV dengan job descriptions---

- ✅ **Analytics Dashboard** - Monitoring dan analytics untuk admin

- ✅ **Skills Management** - Master data skills dengan many-to-many relationship![License](https://img.shields.io/badge/License-MIT-green)

- ✅ **Department Management** - Master data departments

- ✅ **Auto Seeder** - Database seeder otomatis untuk demo data## 🚀 Features



---![PHP](https://img.shields.io/badge/PHP-8.2+-blue)<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>



## 📋 Prerequisites- ✅ **Authentication System** - Login & Register dengan role-based (Admin/User)



Sebelum install, pastikan sudah terinstall:- ✅ **CV Analysis** - Upload dan analisis CV dengan AI (Gemini)CV Analyzer adalah sistem analisis CV berbasis AI yang menggunakan Google Gemini AI untuk menganalisis CV dan mencocokkan dengan job descriptions.



### Required Software:- ✅ **Job Description Management** - CRUD job descriptions (Admin only)



1. **PHP >= 8.2** dengan extensions:- ✅ **CV-Job Matching** - Automatic matching CV dengan job descriptions![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange)<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>

   - `pdo_pgsql` ⚠️ **WAJIB untuk PostgreSQL!**

   - `pgsql`- ✅ **Analytics Dashboard** - Monitoring dan analytics untuk admin

   - `mbstring`, `xml`, `curl`, `zip`, `gd`

- ✅ **Skills Management** - Master data skills dengan many-to-many relationship## 🚀 Features

2. **PostgreSQL >= 14**

   - Download: https://www.postgresql.org/download/- ✅ **Department Management** - Master data departments

   - Atau via package manager

- ✅ **Auto Seeder** - Database seeder otomatis untuk demo data![License](https://img.shields.io/badge/License-MIT-green)<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>

3. **Composer >= 2.0**

   - Download: https://getcomposer.org/download/



4. **Git**---- ✅ **Authentication System** - Login & Register dengan role-based (Admin/User)

   - Download: https://git-scm.com/downloads



5. **Google Gemini API Key** (gratis)

   - Daftar di: https://makersuite.google.com/app/apikey## 📋 Prerequisites- ✅ **CV Analysis** - Upload dan analisis CV dengan AI (Gemini)<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>



---



## ⚡ Quick SetupSebelum install, pastikan sudah terinstall:- ✅ **Job Description Management** - CRUD job descriptions (Admin only)



> **📖 Panduan lengkap?** Lihat [QUICK_SETUP.md](QUICK_SETUP.md)



### Windows (PowerShell)- **PHP** >= 8.2 (with `pdo_pgsql` extension for PostgreSQL)- ✅ **CV-Job Matching** - Automatic matching CV dengan job descriptionsCV Analyzer adalah sistem analisis CV berbasis AI yang menggunakan Google Gemini AI untuk menganalisis CV dan mencocokkan dengan job descriptions.</p>



```powershell- **Composer** >= 2.0

# 1. Clone repository

git clone https://github.com/cashewwww14/CV-Analyzer-1.git- **PostgreSQL** >= 14 (Recommended) atau **MySQL** >= 8.0- ✅ **Analytics Dashboard** - Monitoring dan analytics untuk admin

cd CV-Analyzer-1

- **Git** (untuk clone repository)

# 2. Install dependencies

composer install- **Google Gemini API Key** (gratis di https://makersuite.google.com/app/apikey)- ✅ **Skills Management** - Master data skills dengan many-to-many relationship



# 3. Setup environment

copy .env.example .env

php artisan key:generate---- ✅ **Department Management** - Master data departments



# 4. Edit .env - Set PostgreSQL credentials & Gemini API key

notepad .env

# Isi:## ⚡ Quick Setup## 🚀 Features## About Laravel

#   DB_CONNECTION=pgsql

#   DB_PASSWORD=your_postgres_password

#   GEMINI_API_KEY=your_gemini_key

> **🚀 Pakai PostgreSQL + Auto Seeder?** Lihat [QUICK_SETUP.md](QUICK_SETUP.md) untuk setup 1-command!## 📋 Prerequisites

# 5. Create database

$env:PGPASSWORD="your_password"; psql -U postgres -c "CREATE DATABASE cv_analyzer;">



# 6. Migrate & Seed (ONE COMMAND!)> **📖 Butuh panduan detail?** Lihat [SETUP_GUIDE.md](SETUP_GUIDE.md) untuk step-by-step lengkap.

php artisan migrate --seed



# 7. Setup storage & clear cache

php artisan storage:link### PostgreSQL Setup (Recommended)Sebelum install, pastikan sudah terinstall:

php artisan optimize:clear



# 8. Start server

php artisan serve```bash- ✅ **Authentication System** - Login & Register dengan role-based (Admin/User)Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

```

# Clone repository

### Linux/Mac (Terminal)

git clone https://github.com/cashewwww14/CV-Analyzer-1.git- **PHP** >= 8.2

```bash

# 1. Clone repositorycd CV-Analyzer-1

git clone https://github.com/cashewwww14/CV-Analyzer-1.git

cd CV-Analyzer-1- **Composer** >= 2.0- ✅ **CV Analysis** - Upload dan analisis CV dengan AI (Gemini)



# 2. Install dependencies# Install & setup

composer install

composer install- **MySQL** >= 8.0 (atau MariaDB >= 10.3)

# 3. Setup environment

cp .env.example .envcp .env.example .env

php artisan key:generate

php artisan key:generate- **XAMPP/WAMP/MAMP** (untuk lokal development)- ✅ **Job Description Management** - CRUD job descriptions (Admin only)- [Simple, fast routing engine](https://laravel.com/docs/routing).

# 4. Edit .env

nano .env

# Set: DB_PASSWORD dan GEMINI_API_KEY

# Edit .env - Set PostgreSQL credentials & Gemini API key- **Git** (untuk clone repository)

# 5. Create database

psql -U postgres -c "CREATE DATABASE cv_analyzer;"# DB_CONNECTION=pgsql



# 6. Migrate & Seed# DB_DATABASE=cv_analyzer- **Google Gemini API Key** (gratis di https://makersuite.google.com/app/apikey)- ✅ **CV-Job Matching** - Automatic matching CV dengan job descriptions- [Powerful dependency injection container](https://laravel.com/docs/container).

php artisan migrate --seed

# DB_USERNAME=postgres

# 7. Setup storage & permissions

php artisan storage:link# DB_PASSWORD=your_password

chmod -R 775 storage bootstrap/cache

# GEMINI_API_KEY=your_key

# 8. Clear cache & start

php artisan optimize:clear---- ✅ **Analytics Dashboard** - Monitoring dan analytics untuk admin- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.

php artisan serve

```# Create database



**Akses:** http://localhost:8000psql -U postgres -c "CREATE DATABASE cv_analyzer;"



**Login:**

- **Admin**: `admin@cvanalyzer.com` / `admin123`

- **User**: `user@cvanalyzer.com` / `user123`# Migrate & Seed (ONE COMMAND!)## 🚀 Quick Setup- ✅ **Skills Management** - Master data skills dengan many-to-many relationship- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).



---php artisan migrate --seed



## 📊 Auto Seeder Data



Perintah `php artisan migrate --seed` akan otomatis membuat:# Start server



| Type | Count | Description |php artisan serve> **📖 Butuh panduan lebih detail?** Lihat [SETUP_GUIDE.md](SETUP_GUIDE.md) untuk step-by-step lengkap dengan troubleshooting.- ✅ **Department Management** - Master data departments- Database agnostic [schema migrations](https://laravel.com/docs/migrations).

|------|-------|-------------|

| ✅ Users | 2 | Admin & User dengan password default |```

| ✅ Departments | 10 | Engineering, Marketing, Design, HR, etc. |

| ✅ Skills | 38 | PHP, Laravel, React, Python, Docker, etc. |

| ✅ Job Descriptions | 10 | Full Stack Dev, Frontend Dev, UI/UX, etc. |

| ✅ Relationships | ~60 | Jobs linked dengan departments & skills |Buka: **http://localhost:8000**



**Tidak perlu manual input data!** Langsung bisa dipakai untuk testing.### Clone Repository- [Robust background job processing](https://laravel.com/docs/queues).



---Login:



## ⚙️ Configuration- **Admin**: `admin@cvanalyzer.com` / `admin123`



### Edit file `.env`:- **User**: `user@cvanalyzer.com` / `user123`



```env```bash## 📋 Prerequisites- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

# Application

APP_NAME="CV Analyzer"---

APP_URL=http://localhost:8000

git clone https://github.com/YOUR_USERNAME/CV-Analyzer.git

# PostgreSQL Database (REQUIRED)

DB_CONNECTION=pgsql## 📊 Auto Seeder Data

DB_HOST=127.0.0.1

DB_PORT=5432cd CV-Analyzer

DB_DATABASE=cv_analyzer

DB_USERNAME=postgresPerintah `php artisan migrate --seed` akan otomatis membuat:

DB_PASSWORD=your_postgres_password

```

# Google Gemini AI (REQUIRED)

GEMINI_API_KEY=your_gemini_api_key_here✅ **2 Users**: Admin & User dengan password default  

GEMINI_MODEL=gemini-2.0-flash-exp

GEMINI_TEMPERATURE=0.3✅ **10 Departments**: Engineering, Marketing, Design, HR, etc.  Sebelum install, pastikan sudah terinstall:Laravel is accessible, powerful, and provides tools required for large, robust applications.

GEMINI_MAX_TOKENS=4000

```✅ **38 Skills**: PHP, Laravel, React, Python, Docker, etc.  



**Get Gemini API Key:** https://makersuite.google.com/app/apikey✅ **10 Job Descriptions**: Full Stack Dev, Frontend Dev, UI/UX Designer, etc.  ### Windows Setup (PowerShell/CMD)



---✅ **Relationships**: Jobs sudah ter-link dengan departments & skills



## 🗄️ Database Schema



**7 Core Tables** dengan normalized structure:**Tidak perlu manual input data!** Langsung bisa dipakai untuk testing.



``````powershell

users

├── id, name, email, password, role---

└── relationships: jobDescriptions, cvAnalyses

# Install dependencies- **PHP** >= 8.2## Learning Laravel

departments

├── id, name, description## ⚙️ Configuration

└── relationships: jobDescriptions

composer install

skills

├── id, name, category, description### PostgreSQL (.env)

└── relationships: jobDescriptions (many-to-many)

- **Composer** >= 2.0

job_descriptions

├── id, job_title, department_id, description```env

├── requirements, responsibilities, status

└── relationships: creator, department, skills, cvMatchesDB_CONNECTION=pgsql# Setup environment



job_description_skills (pivot)DB_HOST=127.0.0.1

├── job_description_id, skill_id

└── proficiency_level, is_requiredDB_PORT=5432copy .env.example .env- **MySQL** >= 8.0 atau **MariaDB** >= 10.3Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.



cv_analysesDB_DATABASE=cv_analyzer

├── id, user_id, cv_file_path

├── extracted_text, parsed_data, ai_summaryDB_USERNAME=postgresphp artisan key:generate

└── relationships: user, jobMatches

DB_PASSWORD=your_password

cv_job_matches

├── id, cv_analysis_id, job_description_id```- **Node.js** >= 16.x & **NPM** >= 8.x (opsional, untuk frontend assets)

├── match_score, matching_skills, missing_skills

└── relationships: cvAnalysis, jobDescription

```

### MySQL Alternative (.env)# EDIT .env file - Configure database & Gemini API key

**ERD Diagram lengkap:** [DATABASE_SCHEMA.md](DATABASE_SCHEMA.md)



---

```env- **Git**You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

## 🎯 Usage Guide

DB_CONNECTION=mysql

### Admin Dashboard

DB_HOST=127.0.0.1# Create database

1. Login: `admin@cvanalyzer.com` / `admin123`

2. Dashboard: `/admin`DB_PORT=3306

3. **Job Management**: `/admin/job-desc`

   - View 10 pre-seeded jobsDB_DATABASE=cv_analyzerC:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

   - Create, Edit, Delete jobs

4. **Analytics**: `/admin/analytics`DB_USERNAME=root

5. **Upload CV**: `/home`

DB_PASSWORD=

### User Dashboard

```

1. Login: `user@cvanalyzer.com` / `user123`

2. Dashboard: `/home`# Run migrations & seeders## 🛠️ InstallationIf you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

3. **Upload CV**: Upload PDF (max 10MB)

4. **View Results**: AI analysis & job matching### Gemini AI (.env)



---php artisan migrate



## 🛠️ Artisan Commands```env



### DatabaseGEMINI_API_KEY=your_gemini_api_key_herephp artisan db:seed --class=AdminUserSeeder



```bashGEMINI_MODEL=gemini-2.0-flash-exp

# Run migrations + seeders (RECOMMENDED)

php artisan migrate --seedGEMINI_TEMPERATURE=0.3php artisan db:seed --class=DepartmentSeeder



# Run specific seederGEMINI_MAX_TOKENS=4000

php artisan db:seed --class=JobDescriptionSeeder

```php artisan db:seed --class=SkillSeeder### 1. Clone Repository## Laravel Sponsors

# Reset database (WARNING: DELETES DATA!)

php artisan migrate:fresh --seed



# Check migration status**Get API Key**: https://makersuite.google.com/app/apikey

php artisan migrate:status

```



### Cache---# Setup storage & cache



```bash

# Clear all caches

php artisan optimize:clear## 📁 Project Structurephp artisan storage:link



# Individual clears

php artisan config:clear

php artisan cache:clear```php artisan optimize:clear```bashWe would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

php artisan route:clear

php artisan view:clearCV-Analyzer/

```

├── app/

### Storage

│   ├── Http/

```bash

# Create storage symlink│   │   ├── Controllers/# Run servergit clone https://github.com/YOUR_USERNAME/CV-Analyzer.git

php artisan storage:link

```│   │   │   ├── AdminController.php       # Admin CRUD operations



---│   │   │   ├── AuthController.php        # Authenticationphp artisan serve



## 🔧 Troubleshooting│   │   │   └── CVAnalyzerController.php  # CV analysis logic



### 1. PostgreSQL Connection Error│   │   └── Middleware/```cd CV-Analyzer### Premium Partners



**Error:** `could not connect to server`│   │       └── RoleMiddleware.php        # Role-based access control



**Solution:**│   ├── Models/                           # 6 Eloquent models with relationships



```powershell│   └── Services/

# Windows - Start PostgreSQL service

Start-Service postgresql-x64-14│       ├── GeminiAIService.php           # Gemini AI integration### Linux/Mac Setup (Terminal)```



# Check if running│       └── PDFProcessingService.php      # PDF text extraction

Get-Service postgresql*

```├── database/



```bash│   ├── migrations/                       # 11 database tables

# Linux

sudo systemctl start postgresql│   └── seeders/```bash- **[Vehikl](https://vehikl.com)**

sudo systemctl status postgresql

│       ├── DatabaseSeeder.php            # Master seeder (runs all)

# Mac

brew services start postgresql│       ├── AdminUserSeeder.php           # 2 users# Install dependencies

brew services list

```│       ├── DepartmentSeeder.php          # 10 departments



### 2. PDO Driver Not Found│       ├── SkillSeeder.php               # 38 skillscomposer install### 2. Install PHP Dependencies- **[Tighten Co.](https://tighten.co)**



**Error:** `could not find driver (pdo_pgsql)`│       └── JobDescriptionSeeder.php      # 10 job postings



**Solution:**├── resources/views/                      # Blade templates



**Windows:**├── QUICK_SETUP.md                        # Quick setup guide (PostgreSQL + Seeder)

1. Locate `php.ini`:

   ```powershell├── SETUP_GUIDE.md                        # Detailed setup guide# Setup environment- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**

   php --ini

   ```├── DATABASE_SCHEMA.md                    # Database ERD documentation



2. Edit `php.ini` dan uncomment:└── README.md                             # This filecp .env.example .env

   ```ini

   extension=pdo_pgsql```

   extension=pgsql

   ```php artisan key:generate```bash- **[64 Robots](https://64robots.com)**



3. Restart web server---



4. Verify:

   ```powershell

   php -m | Select-String pgsql## 🗄️ Database Schema

   ```

# EDIT .env file - Configure database & Gemini API keycomposer install- **[Curotec](https://www.curotec.com/services/technologies/laravel)**

**Linux:**

```bash**7 Core Tables** dengan normalized structure:

# Ubuntu/Debian

sudo apt install php8.2-pgsql

sudo systemctl restart apache2

| Table                    | Records | Purpose                          |

# Verify

php -m | grep pgsql|--------------------------|---------|----------------------------------|# Create database```- **[DevSquad](https://devsquad.com/hire-laravel-developers)**

```

| users                    | 2       | User accounts (admin/user)       |

**Mac:**

```bash| departments              | 10      | Master data departments          |mysql -u root -p -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

brew install php@8.2

brew services restart php| skills                   | 38      | Master data skills               |



# Verify| job_descriptions         | 10      | Job postings                     |- **[Redberry](https://redberry.international/laravel-development)**

php -m | grep pgsql

```| job_description_skills   | ~60     | Pivot table (many-to-many)       |



### 3. Password Authentication Failed| cv_analyses              | -       | CV analysis results              |# Run migrations & seeders



**Error:** `FATAL: password authentication failed for user "postgres"`| cv_job_matches           | -       | CV-Job matching scores           |



**Solution:**php artisan migrate### 3. Environment Configuration- **[Active Logic](https://activelogic.com)**



1. Cek password PostgreSQL Anda**ERD Diagram** tersedia di [DATABASE_SCHEMA.md](DATABASE_SCHEMA.md).

2. Update `DB_PASSWORD` di `.env`

3. Clear config cache:php artisan db:seed --class=AdminUserSeeder

   ```bash

   php artisan config:clear---

   ```

php artisan db:seed --class=DepartmentSeeder

### 4. Database Does Not Exist

## 🎯 Usage Guide

**Error:** `database "cv_analyzer" does not exist`

php artisan db:seed --class=SkillSeeder

**Solution:**

### Admin Features

```bash

# Create database manuallyCopy file `.env.example` menjadi `.env`:## Contributing

psql -U postgres -c "CREATE DATABASE cv_analyzer;"

1. **Login**: `admin@cvanalyzer.com` / `admin123`

# Verify

psql -U postgres -l2. **Dashboard**: http://localhost:8000/admin# Setup storage & permissions

```

3. **Job Management**: View 10 pre-seeded job descriptions di `/admin/job-desc`

### 5. Seeder Class Not Found

4. **Create Job**: Add new job descriptionsphp artisan storage:link

**Error:** `Class 'AdminUserSeeder' not found`

5. **Edit/Delete**: Manage existing jobs

**Solution:**

6. **Analytics**: View analytics dashboardchmod -R 775 storage bootstrap/cache

```bash

# Regenerate autoload7. **Upload CV**: Test CV analysis sebagai admin

composer dump-autoload

```bashThank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

# Run seeder again

php artisan db:seed### User Features

```

# Clear cache

### 6. Permission Issues

1. **Login**: `user@cvanalyzer.com` / `user123`

**Windows:**

```powershell2. **Dashboard**: http://localhost:8000/homephp artisan optimize:clear# Windows (PowerShell)

icacls storage /grant Everyone:F /t

icacls bootstrap\cache /grant Everyone:F /t3. **Upload CV**: Upload PDF untuk analisis

```

4. **View Results**: Lihat AI analysis & job matching scores

**Linux/Mac:**

```bash

chmod -R 775 storage bootstrap/cache

chown -R $USER:$USER storage bootstrap/cache---# Run servercopy .env.example .env## Code of Conduct

```



---

## 🛠️ Artisan Commandsphp artisan serve

## 🌐 Production Deployment



### Environment Setup

### Database Management```

```env

APP_ENV=production

APP_DEBUG=false

APP_URL=https://your-domain.com```bash



# Use secure session driver# Run all migrations

SESSION_DRIVER=redis

CACHE_STORE=redisphp artisan migrateAkses aplikasi di: **http://localhost:8000**# Linux/MacIn order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

QUEUE_CONNECTION=redis



# PostgreSQL (use connection pooling)

DB_CONNECTION=pgsql# Run migrations + all seeders (RECOMMENDED)

DB_HOST=your-db-host

DB_PORT=5432php artisan migrate --seed

DB_DATABASE=cv_analyzer

DB_USERNAME=your_user---cp .env.example .env

DB_PASSWORD=strong_password

```# Run specific seeder



### Optimizationphp artisan db:seed --class=JobDescriptionSeeder



```bash

# Install production dependencies

composer install --optimize-autoloader --no-dev# Reset database + re-seed (WARNING: DELETES DATA!)## ⚙️ Configuration```## Security Vulnerabilities



# Cache everythingphp artisan migrate:fresh --seed

php artisan config:cache

php artisan route:cache

php artisan view:cache

# Check migration status

# Generate new key

php artisan key:generatephp artisan migrate:status### Database Configuration

```

```

### Security Checklist



- ✅ Change `APP_KEY`

- ✅ Set `APP_DEBUG=false`### Cache Management

- ✅ Use strong PostgreSQL password

- ✅ **Change default admin/user passwords!**Edit file `.env`:### 4. Generate Application KeyIf you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

- ✅ Configure SSL/HTTPS

- ✅ Setup firewall```bash

- ✅ Enable PostgreSQL SSL connection

- ✅ Regular database backups# Clear all caches

- ✅ Setup connection pooling (PgBouncer)

php artisan optimize:clear

---

```env

## 📚 Documentation

# Clear specific caches

- **[QUICK_SETUP.md](QUICK_SETUP.md)** - Setup cepat dengan PostgreSQL

- **[SETUP_GUIDE.md](SETUP_GUIDE.md)** - Panduan detail dengan troubleshootingphp artisan config:clearDB_CONNECTION=mysql

- **[DATABASE_SCHEMA.md](DATABASE_SCHEMA.md)** - Complete ERD

- **[GIT_COMMANDS.md](GIT_COMMANDS.md)** - Git reference untuk push/pullphp artisan cache:clear

- **[CONTRIBUTING.md](CONTRIBUTING.md)** - Contribution guidelines

- **[Laravel Docs](https://laravel.com/docs/11.x)** - Laravel documentationphp artisan route:clearDB_HOST=127.0.0.1```bash## License

- **[PostgreSQL Docs](https://www.postgresql.org/docs/)** - PostgreSQL documentation

- **[Gemini AI Docs](https://ai.google.dev/gemini-api/docs)** - Gemini API referencephp artisan view:clear



---```DB_PORT=3306



## 🤝 Contributing



Contributions are welcome! Steps:### StorageDB_DATABASE=cv_analyzerphp artisan key:generate



1. Fork repository

2. Create feature branch: `git checkout -b feature/AmazingFeature`

3. Commit changes: `git commit -m 'Add AmazingFeature'````bashDB_USERNAME=root

4. Push to branch: `git push origin feature/AmazingFeature`

5. Open Pull Request# Create storage symlink



Lihat [CONTRIBUTING.md](CONTRIBUTING.md) untuk detail.php artisan storage:linkDB_PASSWORD=```The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



---```



## 📝 License```



This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).---



---



## 🙏 Acknowledgments## 🔧 Troubleshooting



- [Laravel Framework](https://laravel.com) - PHP web framework### Gemini AI Configuration### 5. Database Setup

- [PostgreSQL](https://www.postgresql.org) - Advanced open source database

- [Google Gemini AI](https://ai.google.dev/gemini-api) - AI analysis engine### PostgreSQL Connection Error

- [Tailwind CSS](https://tailwindcss.com) - CSS framework

- [Chart.js](https://www.chartjs.org) - Analytics charts



---**Error**: `could not connect to server`



## 📞 SupportEdit file `.env`:#### 5.1. Buat Database MySQL



Jika ada pertanyaan atau masalah:**Solution**:



1. 📖 Baca [QUICK_SETUP.md](QUICK_SETUP.md) untuk troubleshooting```bash

2. 🔍 Check `storage/logs/laravel.log` untuk error details

3. 🐛 Open issue: https://github.com/cashewwww14/CV-Analyzer-1/issues# Windows

4. 📧 Contact: agungeka@example.com

Start-Service postgresql-x64-14```envBuka MySQL/phpMyAdmin dan buat database baru:

---



## 🎓 Quick Reference

# LinuxGEMINI_API_KEY=your_gemini_api_key_here

### Default Accounts

```sudo systemctl start postgresql

Admin: admin@cvanalyzer.com / admin123

User:  user@cvanalyzer.com / user123GEMINI_MODEL=gemini-2.0-flash-exp```sql

```

# Mac

### Key URLs

```brew services start postgresqlGEMINI_TEMPERATURE=0.3CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

Homepage:         http://localhost:8000

Admin Dashboard:  http://localhost:8000/admin```

Job Descriptions: http://localhost:8000/admin/job-desc

Analytics:        http://localhost:8000/admin/analyticsGEMINI_MAX_TOKENS=4000```

CV Upload:        http://localhost:8000/home

```### PDO Driver Not Found



### Essential Commands```

```bash

# Setup**Error**: `could not find driver (pdo_pgsql)`

composer install && php artisan migrate --seed

**Atau via command line:**

# Reset (WARNING: Deletes data!)

php artisan migrate:fresh --seed**Solution**:



# Clear cache**Cara mendapatkan API Key:**

php artisan optimize:clear

**Windows**:

# Run server

php artisan serve1. Edit `php.ini`1. Buka https://makersuite.google.com/app/apikey```bash



# Check PostgreSQL connection2. Uncomment:

psql -U postgres -d cv_analyzer

```   ```ini2. Login dengan Google account# Windows (XAMPP)



---   extension=pdo_pgsql



**Happy Coding! 🚀**   extension=pgsql3. Klik "Create API Key"C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"



**Built with ❤️ using Laravel & PostgreSQL**   ```


3. Restart server4. Copy dan paste ke `.env`



**Linux**:# Linux/Mac

```bash

sudo apt install php8.2-pgsql---mysql -u root -p -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

sudo systemctl restart apache2

``````



### Seeder Issues## 👤 Default Accounts



**Error**: `Class 'AdminUserSeeder' not found`#### 5.2. Konfigurasi Database di `.env`



**Solution**:Setelah seeding, gunakan akun berikut untuk login:

```bash

composer dump-autoloadEdit file `.env` dan sesuaikan:

php artisan db:seed

```| Role  | Email                   | Password  | Access                      |



### Permission Issues|-------|-------------------------|-----------|----------------------------|```env



**Windows**:| Admin | admin@cvanalyzer.com    | admin123  | Admin Dashboard + CV Upload |DB_CONNECTION=mysql

```powershell

icacls storage /grant Everyone:F /t| User  | user@cvanalyzer.com     | user123   | CV Upload only             |DB_HOST=127.0.0.1

icacls bootstrap\cache /grant Everyone:F /t

```DB_PORT=3306



**Linux/Mac**:**⚠️ PENTING:** Ganti password default setelah login pertama kali!DB_DATABASE=cv_analyzer

```bash

chmod -R 775 storage bootstrap/cacheDB_USERNAME=root

chown -R $USER:$USER storage bootstrap/cache

```---DB_PASSWORD=



---```



## 🌐 Production Deployment## 📁 Project Structure



### Environment Setup### 6. Gemini AI Configuration



```env```

APP_ENV=production

APP_DEBUG=falseCV-Analyzer/Dapatkan API key dari [Google AI Studio](https://makersuite.google.com/app/apikey), lalu tambahkan ke `.env`:

APP_URL=https://your-domain.com

├── app/

# Use secure session driver

SESSION_DRIVER=redis│   ├── Http/```env

CACHE_STORE=redis

QUEUE_CONNECTION=redis│   │   ├── Controllers/GEMINI_API_KEY=your_gemini_api_key_here

```

│   │   │   ├── AdminController.php       # Admin CRUD operationsGEMINI_MODEL=gemini-2.0-flash-exp

### Optimization

│   │   │   ├── AuthController.php        # AuthenticationGEMINI_TEMPERATURE=0.3

```bash

# Install production dependencies only│   │   │   └── CVAnalyzerController.php  # CV analysis logicGEMINI_MAX_TOKENS=4000

composer install --optimize-autoloader --no-dev

│   │   └── Middleware/```

# Cache everything

php artisan config:cache│   │       └── RoleMiddleware.php        # Role-based access control

php artisan route:cache

php artisan view:cache│   ├── Models/### 7. Run Database Migrations



# Generate new key│   │   ├── User.php

php artisan key:generate

```│   │   ├── JobDescription.php```bash



### Security Checklist│   │   ├── Department.phpphp artisan migrate



- ✅ Change `APP_KEY`│   │   ├── Skill.php```

- ✅ Set `APP_DEBUG=false`

- ✅ Use strong database password│   │   ├── CvAnalysis.php

- ✅ **Change default user passwords!**

- ✅ Configure SSL/HTTPS│   │   └── CvJobMatch.php### 8. Seed Database (Master Data & Admin Account)

- ✅ Setup firewall

- ✅ Enable rate limiting│   └── Services/

- ✅ Regular backups

│       ├── GeminiAIService.php           # Gemini AI integration```bash

---

│       └── PDFProcessingService.php      # PDF text extractionphp artisan db:seed --class=AdminUserSeeder

## 📚 Documentation

├── database/php artisan db:seed --class=DepartmentSeeder

- **[QUICK_SETUP.md](QUICK_SETUP.md)** - Setup cepat dengan PostgreSQL + Auto Seeder

- **[SETUP_GUIDE.md](SETUP_GUIDE.md)** - Panduan setup detail dengan troubleshooting│   ├── migrations/                       # 11 database tablesphp artisan db:seed --class=SkillSeeder

- **[DATABASE_SCHEMA.md](DATABASE_SCHEMA.md)** - Complete ERD & relationships

- **[CONTRIBUTING.md](CONTRIBUTING.md)** - Contribution guidelines│   └── seeders/```

- **[Laravel Docs](https://laravel.com/docs/11.x)** - Laravel framework documentation

- **[Gemini AI Docs](https://ai.google.dev/gemini-api/docs)** - Gemini API reference│       ├── AdminUserSeeder.php           # Default users



---│       ├── DepartmentSeeder.php          # 10 departments### 9. Create Storage Link



## 🤝 Contributing│       └── SkillSeeder.php               # 38 skills



Contributions are welcome! Steps:├── resources/```bash



1. Fork repository│   └── views/php artisan storage:link

2. Create feature branch: `git checkout -b feature/AmazingFeature`

3. Commit changes: `git commit -m 'Add AmazingFeature'`│       ├── auth/                         # Login & Register```

4. Push to branch: `git push origin feature/AmazingFeature`

5. Open Pull Request│       ├── admin/                        # Admin dashboard & CRUD



Lihat [CONTRIBUTING.md](CONTRIBUTING.md) untuk detail.│       ├── cv-analyzer.blade.php         # CV upload form### 10. Clear Cache



---│       └── cv-results.blade.php          # Analysis results



## 📝 License├── routes/```bash



This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).│   └── web.php                           # All application routesphp artisan optimize:clear



---├── .env.example                          # Environment template```



## 🙏 Acknowledgments├── DATABASE_SCHEMA.md                    # Database ERD documentation



- [Laravel Framework](https://laravel.com) - PHP web framework├── README.md                             # This file### 11. Run Development Server

- [Google Gemini AI](https://ai.google.dev/gemini-api) - AI analysis engine

- [Tailwind CSS](https://tailwindcss.com) - CSS framework└── SETUP_GUIDE.md                        # Detailed setup guide

- [PostgreSQL](https://www.postgresql.org) - Database system

- [Chart.js](https://www.chartjs.org) - Analytics charts``````bash



---php artisan serve



## 📞 Support---```



Jika ada pertanyaan atau masalah:



1. 📖 Baca [QUICK_SETUP.md](QUICK_SETUP.md) atau [SETUP_GUIDE.md](SETUP_GUIDE.md)## 🗄️ Database SchemaAplikasi akan berjalan di: `http://127.0.0.1:8000` atau `http://localhost:8000`

2. 🔍 Check `storage/logs/laravel.log` untuk error details

3. 🐛 Open issue di GitHub: https://github.com/cashewwww14/CV-Analyzer-1/issues

4. 📧 Contact: agungeka@example.com

Project ini menggunakan **7 core tables** dengan normalized structure:---

---



**Happy Coding! 🚀**

| Table                    | Purpose                                |## 📝 Quick Setup Commands (All in One)

---

|--------------------------|----------------------------------------|

## 🎓 Quick Reference

| users                    | User accounts (admin/user)             |Setelah clone repository, jalankan command berikut secara berurutan:

### Default Accounts

```| departments              | Master data departments                |

Admin: admin@cvanalyzer.com / admin123

User:  user@cvanalyzer.com / user123| skills                   | Master data skills (38 skills)         |```bash

```

| job_descriptions         | Job postings created by admin          |# 1. Install dependencies

### Key URLs

```| job_description_skills   | Pivot table (many-to-many)             |composer install

Homepage:        http://localhost:8000

Admin Dashboard: http://localhost:8000/admin| cv_analyses              | Uploaded CV analysis results           |

Job Descriptions: http://localhost:8000/admin/job-desc

Analytics:       http://localhost:8000/admin/analytics| cv_job_matches           | CV-Job matching scores                 |# 2. Setup environment

CV Upload:       http://localhost:8000/home

```copy .env.example .env    # Windows



### Essential Commands**Entity Relationship Diagram** tersedia di [DATABASE_SCHEMA.md](DATABASE_SCHEMA.md).cp .env.example .env      # Linux/Mac

```bash

# Setup

composer install && php artisan migrate --seed

---# 3. Generate app key

# Reset (WARNING: Deletes data!)

php artisan migrate:fresh --seedphp artisan key:generate



# Clear cache## 🎯 Usage

php artisan optimize:clear

# 4. Edit .env file - configure DB & Gemini API key

# Run server

php artisan serve### Admin Workflow# ... edit .env manually ...

```



1. Login dengan akun admin# 5. Create database (via MySQL or phpMyAdmin)

2. Dashboard admin: **http://localhost:8000/admin**

3. **Manage Job Descriptions**:# 6. Run migrations

   - Create: `/admin/job-desc/create`php artisan migrate

   - View list: `/admin/job-desc`

   - Edit/Delete: Klik tombol di job desc list# 7. Seed data

4. **View Analytics**: `/admin/analytics`php artisan db:seed --class=AdminUserSeeder

5. **Upload CV**: `/home` (admin juga bisa upload CV)php artisan db:seed --class=DepartmentSeeder

php artisan db:seed --class=SkillSeeder

### User Workflow

# 8. Create storage link

1. Login dengan akun userphp artisan storage:link

2. Dashboard user: **http://localhost:8000/home**

3. **Upload CV**:# 9. Clear cache

   - Klik "Upload New CV"php artisan optimize:clear

   - Upload PDF file (max 10MB)

   - AI akan otomatis analisis CV# 10. Run server

4. **View Results**:php artisan serve

   - Lihat extracted information```

   - AI summary & recommendations

   - Job matching scores---



---## 🔐 Default Accounts



## 🔧 TroubleshootingSetelah seeding, Anda bisa login dengan:



### Error: "SQLSTATE[HY000] [2002] Connection refused"### Admin Account

- **Email**: `admin@cvanalyzer.com`

**Solution:**- **Password**: `admin123`

- Start MySQL service- **Access**: Full admin dashboard, job desc management, analytics

- Verify `.env` database credentials

- Test: `mysql -u root -p`### User Account (Test)

- **Email**: `user@cvanalyzer.com`

### Error: "Class 'PDO' not found"- **Password**: `user123`

- **Access**: CV analyzer features

**Solution:**

- Enable PDO extension di `php.ini`## 📁 Project Structure

- Uncomment: `extension=pdo_mysql`

- Restart Apache/Nginx```

CV-Analyzer/

### Error: "file_put_contents() failed to open stream"├── app/

│   ├── Http/

**Solution:**│   │   ├── Controllers/

│   │   │   ├── AdminController.php       # Admin features

**Windows:**│   │   │   ├── AuthController.php        # Authentication

```powershell│   │   │   └── CVAnalyzerController.php  # CV analysis

icacls storage /grant Everyone:F /t│   │   └── Middleware/

icacls bootstrap\cache /grant Everyone:F /t│   │       └── RoleMiddleware.php        # Role-based access

```│   ├── Models/

│   │   ├── User.php

**Linux/Mac:**│   │   ├── JobDescription.php

```bash│   │   ├── Department.php

chmod -R 775 storage bootstrap/cache│   │   ├── Skill.php

chown -R $USER:$USER storage bootstrap/cache│   │   ├── CvAnalysis.php

```│   │   └── CvJobMatch.php

│   └── Services/

### Error: "Gemini API Error 400/401"│       ├── GeminiAIService.php           # Gemini AI integration

│       └── PDFProcessingService.php      # PDF processing

**Solution:**├── database/

- Verify `GEMINI_API_KEY` in `.env`│   ├── migrations/                       # Database migrations

- Check API quota di https://makersuite.google.com/│   └── seeders/                          # Database seeders

- Regenerate API key jika expired├── resources/

│   └── views/

### Error: "Page Expired" saat login/logout│       ├── admin/                        # Admin views

│       ├── auth/                         # Auth views

**Solution:**│       └── *.blade.php                   # Other views

```bash├── routes/

php artisan optimize:clear│   └── web.php                           # Web routes

php artisan config:clear├── .env.example                          # Environment example

```├── DATABASE_SCHEMA.md                    # Database documentation

└── README.md                             # This file

---```



## 🌐 Deployment (Production)## 🗄️ Database Schema



### Environment VariablesDatabase menggunakan struktur normalized dengan relationships:



Update `.env` untuk production:- **users** (1:N) → **cv_analyses**

- **users** (1:N) → **job_descriptions**

```env- **departments** (1:N) → **job_descriptions**

APP_ENV=production- **job_descriptions** (N:M) ↔ **skills** (via job_description_skills)

APP_DEBUG=false- **cv_analyses** (1:N) → **cv_job_matches** (N:1) → **job_descriptions**

APP_URL=https://your-domain.com

Lihat dokumentasi lengkap di: [`DATABASE_SCHEMA.md`](DATABASE_SCHEMA.md)

# Change to secure driver

SESSION_DRIVER=redis## 🎯 Usage

CACHE_STORE=redis

QUEUE_CONNECTION=redis### For Users:

```1. Register akun atau login

2. Upload CV (PDF format)

### Optimize Laravel3. Tunggu AI menganalisis CV

4. Lihat hasil analisis dan career recommendations

```bash5. View matching jobs based on your CV

# Install production dependencies only

composer install --optimize-autoloader --no-dev### For Admin:

1. Login dengan admin account

# Cache configuration2. **Dashboard**: View statistics dan overview

php artisan config:cache3. **Job Desc Management**: Create, edit, delete job descriptions

php artisan route:cache4. **Monitoring**: Track CV analysis activities

php artisan view:cache5. **Analytics**: View trends dan insights



# Generate new APP_KEY## 🧪 Running Tests

php artisan key:generate

``````bash

php artisan test

### Web Server Configuration```



**Apache (.htaccess sudah ada)**## 🔧 Troubleshooting



**Nginx:**### Error: "Class not found"

```nginx```bash

server {composer dump-autoload

    listen 80;php artisan optimize:clear

    server_name your-domain.com;```

    root /path/to/CV-Analyzer/public;

### Error: "No application encryption key"

    add_header X-Frame-Options "SAMEORIGIN";```bash

    add_header X-Content-Type-Options "nosniff";php artisan key:generate

```

    index index.php;

### Error: "Permission denied" (Linux/Mac)

    charset utf-8;```bash

chmod -R 775 storage bootstrap/cache

    location / {```

        try_files $uri $uri/ /index.php?$query_string;

    }### Error: "SQLSTATE[HY000] [2002]"

- Check MySQL service is running

    location = /favicon.ico { access_log off; log_not_found off; }- Verify database credentials in `.env`

    location = /robots.txt  { access_log off; log_not_found off; }

### Error: "Gemini API Error"

    error_page 404 /index.php;- Check API key is valid

- Verify internet connection

    location ~ \.php$ {- Check API quota/limits

        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;

        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;## 📝 Environment Variables

        include fastcgi_params;

    }Key environment variables yang perlu dikonfigurasi:



    location ~ /\.(?!well-known).* {```env

        deny all;# App

    }APP_NAME="CV Analyzer"

}APP_ENV=local

```APP_DEBUG=true

APP_URL=http://localhost:8000

### Security Checklist

# Database

- ✅ Change `APP_KEY`DB_CONNECTION=mysql

- ✅ Set `APP_DEBUG=false`DB_HOST=127.0.0.1

- ✅ Set strong database passwordDB_PORT=3306

- ✅ Change default admin passwordDB_DATABASE=cv_analyzer

- ✅ Configure SSL/HTTPSDB_USERNAME=root

- ✅ Setup firewall rulesDB_PASSWORD=

- ✅ Enable rate limiting

- ✅ Regular database backups# Session & Cache

SESSION_DRIVER=database

---CACHE_STORE=database



## 📚 Documentation# Gemini AI

GEMINI_API_KEY=your_api_key_here

- **Setup Guide**: [SETUP_GUIDE.md](SETUP_GUIDE.md) - Detailed installation stepsGEMINI_MODEL=gemini-2.0-flash-exp

- **Database Schema**: [DATABASE_SCHEMA.md](DATABASE_SCHEMA.md) - Complete ERDGEMINI_TEMPERATURE=0.3

- **Laravel Docs**: https://laravel.com/docs/11.xGEMINI_MAX_TOKENS=4000

- **Gemini AI Docs**: https://ai.google.dev/gemini-api/docs

# File Upload

---UPLOAD_MAX_FILESIZE=10M

POST_MAX_SIZE=10M

## 🤝 ContributingMAX_EXECUTION_TIME=300

```

Contributions are welcome! Steps:

## 🚀 Deployment to Production

1. Fork repository

2. Create feature branch: `git checkout -b feature/AmazingFeature`### 1. Set Environment to Production

3. Commit changes: `git commit -m 'Add some AmazingFeature'`

4. Push to branch: `git push origin feature/AmazingFeature````env

5. Open Pull RequestAPP_ENV=production

APP_DEBUG=false

---```



## 📝 License### 2. Optimize for Production



This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).```bash

composer install --optimize-autoloader --no-dev

---php artisan config:cache

php artisan route:cache

## 🙏 Acknowledgmentsphp artisan view:cache

```

- [Laravel Framework](https://laravel.com)

- [Google Gemini AI](https://ai.google.dev/gemini-api)### 3. Set Proper Permissions (Linux/Mac)

- [Tailwind CSS](https://tailwindcss.com)

- [Chart.js](https://www.chartjs.org)```bash

chmod -R 755 storage bootstrap/cache

---chown -R www-data:www-data storage bootstrap/cache

```

## 📞 Support

## 🤝 Contributing

Jika ada pertanyaan atau masalah:

1. Fork the repository

1. Baca [SETUP_GUIDE.md](SETUP_GUIDE.md) untuk troubleshooting2. Create your feature branch (`git checkout -b feature/AmazingFeature`)

2. Check `storage/logs/laravel.log` untuk error details3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)

3. Open issue di GitHub repository4. Push to the branch (`git push origin feature/AmazingFeature`)

4. Contact: your-email@example.com5. Open a Pull Request



---## 📄 License



**Happy Coding! 🚀**This project is licensed under the MIT License.


## 👨‍💻 Authors

- **Your Name** - [GitHub Profile](https://github.com/YOUR_USERNAME)

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/) - PHP Framework
- [Google Gemini AI](https://ai.google.dev/) - AI Integration
- [Tailwind CSS](https://tailwindcss.com/) - CSS Framework
- [Chart.js](https://www.chartjs.org/) - Charts & Graphs

## 📞 Support

Jika ada pertanyaan atau masalah, silakan buat [Issue](https://github.com/YOUR_USERNAME/CV-Analyzer/issues).

---

Made with ❤️ by Your Name
