# Beanie-Coffee-Shop
Beanie Coffee Shop
## Deskripsi
Project ini dibangun menggunakan Laravel 11 sebagai framework utama, dilengkapi dengan Filament untuk admin panel, dan Tailwind CSS untuk styling. Project ini menggunakan blade.php sebagai template engine untuk tampilan frontend.

## Persyaratan Sistem
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/PostgreSQL
- Git

## Instalasi

1. Clone repository
```bash
git clone https://github.com/HarisTanone/Beanie-Coffee-Shop
cd Beanie-Coffee-Shop
```

2. Install dependensi PHP
```bash
composer install
```

3. Install dependensi Node.js
```bash
npm install
```

4. Salin file environment
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Konfigurasi database di file .env
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nexa
DB_USERNAME=postgres
DB_PASSWORD=
```

7. Jalankan migrasi database
```bash
php artisan migrate
```

8. Buat symbolic link untuk storage
```bash
php artisan storage:link
```

9. Build assets
```bash
npm run build
```

## Penggunaan

1. Jalankan server development
```bash
php artisan serve
```

2. Untuk development mode dengan Tailwind CSS
```bash
npm run dev
```

## Fitur Utama
- Admin Panel dengan Filament
- Frontend menggunakan Blade Template
- Styling dengan Tailwind CSS
- File storage system
- [Tambahkan fitur-fitur lain yang spesifik untuk project Anda]

## Struktur Folder Penting
```
├── app/
│   ├── Filament/        # Konfigurasi Filament
│   ├── Http/
│   └── Models/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/           # Blade templates
├── public/
│   └── storage/         # Symbolic link ke storage
└── storage/
    └── app/public/      # File upload destination
```

## Konfigurasi Tambahan

### Filament
Filament admin panel dapat diakses di:
```
http://localhost:8000/admin
```
dengan menggunakan ``` email: admin@admin.com dan password: admin ```

### Storage
Pastikan folder storage sudah ter-link dengan public:
```bash
php artisan storage:link
```

## Maintenance
- Backup database secara reguler
- Jalankan `composer update` dan `npm update` secara berkala
- Monitor error logs di `storage/logs`
