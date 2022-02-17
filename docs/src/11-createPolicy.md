# 11. Create Policy

Creating a standard Laravel policy.

```sh
php artisan make:policy PostPolicy -model=Post

# Output
# Policy created successfully.
```

## The new Policy

```php
# app/Polisies/PostPolicy.php

public function before(User $user, $ability) {    
    return true;
}
```

The above will just make everything accessible for testing. Or you could say something like

```php
public function before(User $user, $ability) { 
    if ($user->isAdmin()) {
        return true;
    }
}
```
