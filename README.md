# CV Analyzer - AI-Powered CV Analysis System# CV Analyzer - AI-Powered CV Analysis System<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



![Laravel](https://img.shields.io/badge/Laravel-11.x-red)

![PHP](https://img.shields.io/badge/PHP-8.2+-blue)

![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange)![Laravel](https://img.shields.io/badge/Laravel-11.x-red)<p align="center">

![License](https://img.shields.io/badge/License-MIT-green)

![PHP](https://img.shields.io/badge/PHP-8.2+-blue)<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>

CV Analyzer adalah sistem analisis CV berbasis AI yang menggunakan Google Gemini AI untuk menganalisis CV dan mencocokkan dengan job descriptions.

![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange)<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>

## 🚀 Features

![License](https://img.shields.io/badge/License-MIT-green)<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>

- ✅ **Authentication System** - Login & Register dengan role-based (Admin/User)

- ✅ **CV Analysis** - Upload dan analisis CV dengan AI (Gemini)<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

- ✅ **Job Description Management** - CRUD job descriptions (Admin only)

- ✅ **CV-Job Matching** - Automatic matching CV dengan job descriptionsCV Analyzer adalah sistem analisis CV berbasis AI yang menggunakan Google Gemini AI untuk menganalisis CV dan mencocokkan dengan job descriptions.</p>

- ✅ **Analytics Dashboard** - Monitoring dan analytics untuk admin

- ✅ **Skills Management** - Master data skills dengan many-to-many relationship

- ✅ **Department Management** - Master data departments

## 🚀 Features## About Laravel

## 📋 Prerequisites



Sebelum install, pastikan sudah terinstall:

- ✅ **Authentication System** - Login & Register dengan role-based (Admin/User)Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- **PHP** >= 8.2

- **Composer** >= 2.0- ✅ **CV Analysis** - Upload dan analisis CV dengan AI (Gemini)

- **MySQL** >= 8.0 (atau MariaDB >= 10.3)

- **XAMPP/WAMP/MAMP** (untuk lokal development)- ✅ **Job Description Management** - CRUD job descriptions (Admin only)- [Simple, fast routing engine](https://laravel.com/docs/routing).

- **Git** (untuk clone repository)

- **Google Gemini API Key** (gratis di https://makersuite.google.com/app/apikey)- ✅ **CV-Job Matching** - Automatic matching CV dengan job descriptions- [Powerful dependency injection container](https://laravel.com/docs/container).



---- ✅ **Analytics Dashboard** - Monitoring dan analytics untuk admin- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.



## 🚀 Quick Setup- ✅ **Skills Management** - Master data skills dengan many-to-many relationship- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).



> **📖 Butuh panduan lebih detail?** Lihat [SETUP_GUIDE.md](SETUP_GUIDE.md) untuk step-by-step lengkap dengan troubleshooting.- ✅ **Department Management** - Master data departments- Database agnostic [schema migrations](https://laravel.com/docs/migrations).



### Clone Repository- [Robust background job processing](https://laravel.com/docs/queues).



```bash## 📋 Prerequisites- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

git clone https://github.com/YOUR_USERNAME/CV-Analyzer.git

cd CV-Analyzer

```

Sebelum install, pastikan sudah terinstall:Laravel is accessible, powerful, and provides tools required for large, robust applications.

### Windows Setup (PowerShell/CMD)



```powershell

# Install dependencies- **PHP** >= 8.2## Learning Laravel

composer install

- **Composer** >= 2.0

# Setup environment

copy .env.example .env- **MySQL** >= 8.0 atau **MariaDB** >= 10.3Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

php artisan key:generate

- **Node.js** >= 16.x & **NPM** >= 8.x (opsional, untuk frontend assets)

# EDIT .env file - Configure database & Gemini API key

- **Git**You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

# Create database

C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"



# Run migrations & seeders## 🛠️ InstallationIf you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

php artisan migrate

php artisan db:seed --class=AdminUserSeeder

php artisan db:seed --class=DepartmentSeeder

php artisan db:seed --class=SkillSeeder### 1. Clone Repository## Laravel Sponsors



# Setup storage & cache

php artisan storage:link

php artisan optimize:clear```bashWe would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).



# Run servergit clone https://github.com/YOUR_USERNAME/CV-Analyzer.git

php artisan serve

```cd CV-Analyzer### Premium Partners



### Linux/Mac Setup (Terminal)```



```bash- **[Vehikl](https://vehikl.com)**

# Install dependencies

composer install### 2. Install PHP Dependencies- **[Tighten Co.](https://tighten.co)**



# Setup environment- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**

cp .env.example .env

php artisan key:generate```bash- **[64 Robots](https://64robots.com)**



# EDIT .env file - Configure database & Gemini API keycomposer install- **[Curotec](https://www.curotec.com/services/technologies/laravel)**



# Create database```- **[DevSquad](https://devsquad.com/hire-laravel-developers)**

mysql -u root -p -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

- **[Redberry](https://redberry.international/laravel-development)**

# Run migrations & seeders

php artisan migrate### 3. Environment Configuration- **[Active Logic](https://activelogic.com)**

php artisan db:seed --class=AdminUserSeeder

php artisan db:seed --class=DepartmentSeeder

php artisan db:seed --class=SkillSeeder

Copy file `.env.example` menjadi `.env`:## Contributing

# Setup storage & permissions

php artisan storage:link

chmod -R 775 storage bootstrap/cache

```bashThank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

# Clear cache

php artisan optimize:clear# Windows (PowerShell)



# Run servercopy .env.example .env## Code of Conduct

php artisan serve

```



Akses aplikasi di: **http://localhost:8000**# Linux/MacIn order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).



---cp .env.example .env



## ⚙️ Configuration```## Security Vulnerabilities



### Database Configuration



Edit file `.env`:### 4. Generate Application KeyIf you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.



```env

DB_CONNECTION=mysql

DB_HOST=127.0.0.1```bash## License

DB_PORT=3306

DB_DATABASE=cv_analyzerphp artisan key:generate

DB_USERNAME=root

DB_PASSWORD=```The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```



### Gemini AI Configuration### 5. Database Setup



Edit file `.env`:#### 5.1. Buat Database MySQL



```envBuka MySQL/phpMyAdmin dan buat database baru:

GEMINI_API_KEY=your_gemini_api_key_here

GEMINI_MODEL=gemini-2.0-flash-exp```sql

GEMINI_TEMPERATURE=0.3CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

GEMINI_MAX_TOKENS=4000```

```

**Atau via command line:**

**Cara mendapatkan API Key:**

1. Buka https://makersuite.google.com/app/apikey```bash

2. Login dengan Google account# Windows (XAMPP)

3. Klik "Create API Key"C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

4. Copy dan paste ke `.env`

# Linux/Mac

---mysql -u root -p -e "CREATE DATABASE cv_analyzer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

```

## 👤 Default Accounts

#### 5.2. Konfigurasi Database di `.env`

Setelah seeding, gunakan akun berikut untuk login:

Edit file `.env` dan sesuaikan:

| Role  | Email                   | Password  | Access                      |

|-------|-------------------------|-----------|----------------------------|```env

| Admin | admin@cvanalyzer.com    | admin123  | Admin Dashboard + CV Upload |DB_CONNECTION=mysql

| User  | user@cvanalyzer.com     | user123   | CV Upload only             |DB_HOST=127.0.0.1

DB_PORT=3306

**⚠️ PENTING:** Ganti password default setelah login pertama kali!DB_DATABASE=cv_analyzer

DB_USERNAME=root

---DB_PASSWORD=

```

## 📁 Project Structure

### 6. Gemini AI Configuration

```

CV-Analyzer/Dapatkan API key dari [Google AI Studio](https://makersuite.google.com/app/apikey), lalu tambahkan ke `.env`:

├── app/

│   ├── Http/```env

│   │   ├── Controllers/GEMINI_API_KEY=your_gemini_api_key_here

│   │   │   ├── AdminController.php       # Admin CRUD operationsGEMINI_MODEL=gemini-2.0-flash-exp

│   │   │   ├── AuthController.php        # AuthenticationGEMINI_TEMPERATURE=0.3

│   │   │   └── CVAnalyzerController.php  # CV analysis logicGEMINI_MAX_TOKENS=4000

│   │   └── Middleware/```

│   │       └── RoleMiddleware.php        # Role-based access control

│   ├── Models/### 7. Run Database Migrations

│   │   ├── User.php

│   │   ├── JobDescription.php```bash

│   │   ├── Department.phpphp artisan migrate

│   │   ├── Skill.php```

│   │   ├── CvAnalysis.php

│   │   └── CvJobMatch.php### 8. Seed Database (Master Data & Admin Account)

│   └── Services/

│       ├── GeminiAIService.php           # Gemini AI integration```bash

│       └── PDFProcessingService.php      # PDF text extractionphp artisan db:seed --class=AdminUserSeeder

├── database/php artisan db:seed --class=DepartmentSeeder

│   ├── migrations/                       # 11 database tablesphp artisan db:seed --class=SkillSeeder

│   └── seeders/```

│       ├── AdminUserSeeder.php           # Default users

│       ├── DepartmentSeeder.php          # 10 departments### 9. Create Storage Link

│       └── SkillSeeder.php               # 38 skills

├── resources/```bash

│   └── views/php artisan storage:link

│       ├── auth/                         # Login & Register```

│       ├── admin/                        # Admin dashboard & CRUD

│       ├── cv-analyzer.blade.php         # CV upload form### 10. Clear Cache

│       └── cv-results.blade.php          # Analysis results

├── routes/```bash

│   └── web.php                           # All application routesphp artisan optimize:clear

├── .env.example                          # Environment template```

├── DATABASE_SCHEMA.md                    # Database ERD documentation

├── README.md                             # This file### 11. Run Development Server

└── SETUP_GUIDE.md                        # Detailed setup guide

``````bash

php artisan serve

---```



## 🗄️ Database SchemaAplikasi akan berjalan di: `http://127.0.0.1:8000` atau `http://localhost:8000`



Project ini menggunakan **7 core tables** dengan normalized structure:---



| Table                    | Purpose                                |## 📝 Quick Setup Commands (All in One)

|--------------------------|----------------------------------------|

| users                    | User accounts (admin/user)             |Setelah clone repository, jalankan command berikut secara berurutan:

| departments              | Master data departments                |

| skills                   | Master data skills (38 skills)         |```bash

| job_descriptions         | Job postings created by admin          |# 1. Install dependencies

| job_description_skills   | Pivot table (many-to-many)             |composer install

| cv_analyses              | Uploaded CV analysis results           |

| cv_job_matches           | CV-Job matching scores                 |# 2. Setup environment

copy .env.example .env    # Windows

**Entity Relationship Diagram** tersedia di [DATABASE_SCHEMA.md](DATABASE_SCHEMA.md).cp .env.example .env      # Linux/Mac



---# 3. Generate app key

php artisan key:generate

## 🎯 Usage

# 4. Edit .env file - configure DB & Gemini API key

### Admin Workflow# ... edit .env manually ...



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
