create database with name: lrv8x

edit .env with DB_DATABASE=lrv8x

In top of app/Providers/AppServiceProvider.php
add: use Illuminate\Support\Facades\Schema;

In body of function boot()
add: Schema::defaultstringLength(191);

execute command:

composer require laravel/jetstream

php artisan jetstream:install livewire

php artisan migrate

php artisan serve (run when xampp is running)
