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
git clone <this repo>
cd nama-folder-repo
composer install
cp .env.example .env
php artisan storage:link
npm install
php artisan migrate
php artisan db:seed
php artisan migrate
php artisan serve
```

## Standar cara maintenance lokal
```
Maintain Existing LMS UBS 

===========================================
Optimization bootstrap cache files

1. php artisan optimize:clear

Blade Template cached & compiled views
1.  php artisan view:cache
2.  php artisan view:clear
3.  php artisan config:cache
4.  php artisan config:clear
5.  php artisan route:clear

===========================================

Re-build existing databases and fill seeds values
1. php artisan migrate:fresh
2. php artisan db:seed
	OR
3. php artisan migrate:fresh --seed

Fill the seeder existing Structures for Users
1. php artisan migrate:refresh

If any changes on migrations
1. php artisan migrate

===========================================
Development running if any FE changes
1. Open double terminal
2. first : npm run dev; second: php artisan serve

Build for ready production 
1. npm run build


``` 

## License
@2024 Malaz Solutions All Right reserved
