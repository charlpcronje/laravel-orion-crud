# 13.4 Create Database Seeder

## DB Wipe

First lets wipe the database

```sh
php artisan db:wipe

# Output
Dropped all tables successfully.
```

## Create Seeder

Open file: `/database/seeders/DatabaseSeeder.php`

```php
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::factory(3)->create(['category' => 'Laravel Orion']);
        \App\Models\Post::factory(3)->create(['category' => 'Laravel Tips']);
        \App\Models\Post::factory(3)->create(['category' => 'Vue Tips']);
        \App\Models\Post::factory(3)->create(['category' => 'Coding Tips']);
        \App\Models\Post::factory(3)->create(['category' => 'Secure Zone']);
    }
}
```

## Migrate DB and Seed

```sh
php artisan migrate --seed

# output
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (13.27ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (10.92ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (17.88ms)
Migrating: 2019_12_14_000001_create_personal_access_tokens_table
Migrated:  2019_12_14_000001_create_personal_access_tokens_table (24.15ms)
Migrating: 2022_02_15_015213_create_posts_table
Migrated:  2022_02_15_015213_create_posts_table (4.62ms)
Migrating: 2022_02_17_033807_add_published_category_to_posts_table
Migrated:  2022_02_17_033807_add_published_category_to_posts_table (8.74ms)
Database seeding completed successfully.
```

## Add New User

```sh
php artisan tinker

#Psy Shell v0.11.1 (PHP 8.0.15 — cli) by Justin Hileman
>>> User::factory()->create()->createToken('passport');

# Output
=> Laravel\Sanctum\NewAccessToken {#4455
     +accessToken: Laravel\Sanctum\PersonalAccessToken {#4456
       name: "passport",
       #token: "9766e2ee3d3a388b221ca67d7bacb129162526fff756bcf578ca8e6be4521b6a",
       abilities: "["*"]",
       tokenable_id: 2,
       tokenable_type: "App\Models\User",
       updated_at: "2022-02-17 04:38:03",
       created_at: "2022-02-17 04:38:03",
       id: 1,
     },
     +plainTextToken: "1|CAuIUWmLOWDns5blNIN6ejiOw2yp267NIGuFrO1w",
   }
```

> Copy the plainTextToken into Thunder Client