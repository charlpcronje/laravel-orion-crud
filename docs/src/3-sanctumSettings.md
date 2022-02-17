# 3. Sanctum Settings

## 3.1 User Model

Make `HasApiTokens` trait is added, so it should look something like. On my User model the trait was already added

> This gives us the token functionallity

```php
# Open /app/models/User.php
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
```

## 3.2 Auth.php

> Add API specifying driver as sanctum

```php
# Open config/auth.php
'api' => [
    'driver' => 'sanctum',
    'provider' => 'users',
    'hash' => true,
],

# So it should look like this
'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'api' => [
        'driver' => 'sanctum',
        'provider' => 'users',
        'hash' => true,
    ],
],

```
