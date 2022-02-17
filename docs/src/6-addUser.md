# 6. Add User

To add a user the easiest way is the use the factory that comes standard with laravel

From the root of the API type:

```sh
php artisan tinker #[Enter]

#Psy Shell v0.11.1 (PHP 8.0.15 — cli) by Justin Hileman
>>> $user = User::factory()->create([
    'name' => 'Charl Cronje',
    'email' => 'charl@devserv.me'
]) # [Enter]

# You will  get this output
 Aliasing 'User' to 'App\Models\User' for this Tinker session.
=> App\Models\User {#3563
     name: "Charl Cronje",
     email: "charl@devserv.me",
     email_verified_at: "2022-02-15 01:22:33",
     #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
     #remember_token: "Uv8AaWPITQ",
     updated_at: "2022-02-15 01:22:34",
     created_at: "2022-02-15 01:22:34",
     id: 1,
   }

# Create Token
>>> $user->createToken('play')

# YOu will het this output
=> Laravel\Sanctum\NewAccessToken {#3557
     +accessToken: Laravel\Sanctum\PersonalAccessToken {#3523
       name: "play",
       #token: "9a33399a3e9f35ffc2a6744d41d01bb5c2e67468af651c0b07594c23c49e727f",
       abilities: "["*"]",
       tokenable_id: 1,
       tokenable_type: "App\Models\User",
       updated_at: "2022-02-15 01:23:51",
       created_at: "2022-02-15 01:23:51",
       id: 1,
     },
     +plainTextToken: "1|D2EILYcoQSnbUplVUAsZMxOi7YKg4y1Xces0uPK3",
   }
```

> This is the only time you will see this token, so copy it now
