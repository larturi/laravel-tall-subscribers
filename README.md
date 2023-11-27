<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# TALL PoC Subscribers Landing (Tailwind, Alpine, Laravel & Livewire)

## Getting Started (Local)

- Copy the .env.example and generate the .env file

- Email configuration: You can configure in <https://mailtrap.io> to local and configure the .env

- Seeders

``` bash
php artisan migrate:fresh
```

- Sqlite DB: The inserts are in database/database.sqlite

- Create the admin user to admin the Subscribers

``` bash
 User::factory()->create(['email' => 'admin@admin.com', 'name' => 'Administrator']);

 # User: admin@admin.com
 # Password: password
```

- Start the server

``` bash
npm run build

npm run dev

php artisan serve
```
