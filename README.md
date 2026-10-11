# Tugas Rutin 9 — Setup Laravel

## Langkah Install
1. Pastikan PHP >= 8.2, Composer, dan MySQL (XAMPP) aktif
2. `composer install`
3. `copy .env.example .env`
4. `php artisan key:generate`
5. Buat database `p9_setup` di phpMyAdmin, sesuaikan DB_* di `.env`
6. `php artisan migrate`
7. `php artisan serve` lalu buka http://127.0.0.1:8000

## Struktur Folder
- `app/` — kode aplikasi (Models, Http/Controllers)
- `bootstrap/` — inisialisasi framework
- `config/` — file konfigurasi
- `database/` — migrations, seeders, factories
- `public/` — web root; `index.php` pintu masuk semua request
- `resources/views/` — template Blade
- `routes/web.php` — definisi URL
- `storage/` — log, cache
- `vendor/` — library hasil Composer
- `.env` — konfigurasi rahasia
- `artisan` — CLI Laravel

## Route
| URL | Keterangan |
|---|---|
| / | Home |
| /about | Tentang saya |
| /contact | Kontak |
| /hello/{nama} | Route parameter (bonus) |