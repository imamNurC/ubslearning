<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/imamNurC/ubslearning/refs/heads/imam_dev/public/image/Logo.png" width="400" alt="Company Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## System Design kami

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/imamNurC/ubslearning/refs/heads/imam_dev/public/image/%5BSYSTEM%20DESIGN%5D.png" width="400" alt="Company Logo"></a></p>

## Tentang LMS ubslearning

ubs learning adalah platform opensource pembelajaran berskala kampus yang bertujuan sebagai sarana penyedia video dan sarana edukasi, kami membuka untuk orang yang ingin menjual kelas di platform ini dan menjual konten konten edukasi dengan biaya yang terjangkau

## Cara Running di lokal

-   laravel >= 10
-   PHP >= 8.0
-   node >= 18.0.0
-   Composer >= 14.0

```
# 1. Clone repository proyek
git clone <this repo>
# 2. Masuk ke dalam direktori proyek
cd nama-folder-repo
# 3. Install dependencies PHP dengan Composer
composer install
# 4. Salin file .env.example menjadi .env
cp .env.example .env
# 5. Buat storage link untuk Laravel
php artisan storage:link
# 6. Install dependencies frontend dengan npm
npm install
# 7. Jalankan migrasi database untuk membuat struktur tabel
php artisan migrate
# 8. Seed database dengan data awal (jika ada)
php artisan db:seed
# 9. Jalankan migrasi lagi (opsional) jika ada perubahan lebih lanjut
php artisan migrate
# 10. Jalankan server pengembangan Laravel
php artisan serve

```

## License
@2024 Malaz Solutions All Right reserved
