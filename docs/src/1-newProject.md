# 1. New project with laravel

> At the time I'm writing this laravel 9 got released and is now the standard that installed when yo usay `laravel new`. I installed orion just like normal so far and with no problems. I hope this keeps on working, with the rest

## 1.1 Insall Laravel

```sh
cd /var/www/html/
laravel new orion
# The above will create an orion folder inside `/var/www/html`
```

## 1.2 Add Orion to laravel

```sh
# cd in to project folder
cd orion

# 1.3 Install Orion
composer require tailflow/laravel-orion
```

## 1.4 Add laravel Sanctum for auth

```sh
composer require laravel/sanctum
```

## 1.5 Publish vendor files and setting

```sh
php artisan vendor:publish
# Choose Provider: Laravel\Sanctum\SanctumServiceProvider
```
