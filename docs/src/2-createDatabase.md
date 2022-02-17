# 2. Create Database

## 2.1 Add DB to MySql

```sh
mysql -uroot -p***
create database orion;
# this will create an `orion` database.
```

## 2.2 Run the DB migraton

```sh
php artisan migrate
```

> When you migrate you might run into this error: SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes

This can be solved by doing updating `/app/Providers/AppServiceProvider.php`

```sh
use Illuminate\Support\Facades\Schema;

/**
 * Bootstrap any application services.
 *
 * @return void
 */
public function boot()
{
    Schema::defaultStringLength(191);
}

## When it was successful. you should see somehing like this
# Migration table created successfully.
# Migrating: 2014_10_12_000000_create_users_table
# Migrated:  2014_10_12_000000_create_users_table (34.34ms)
# Migrating: 2014_10_12_100000_create_password_resets_table
# Migrated:  2014_10_12_100000_create_password_resets_table (18.93ms)
# Migrating: 2019_08_19_000000_create_failed_jobs_table
# Migrated:  2019_08_19_000000_create_failed_jobs_table (20.03ms)
# Migrating: 2019_12_14_000001_create_personal_access_tokens_table
# Migrated:  2019_12_14_000001_create_personal_access_tokens_table (60.10ms)
```
