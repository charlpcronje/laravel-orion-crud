# 9. Ready to Go

## 9.1 Add Folder

- Add `Api` Folder to your Conrollers Folder

```sh
mkdir /var/www/sz/html/orion.devserv.me/app/Http/Controllers/Api
```

## 9.2 Create new PostsController.php

```sh
cd /var/www/sz/html/orion.devserv.me/app/Http/Controllers/Api
touch PostsController.php
```

## 9.3 Open PostsController.php and paste

```php
<?php
namespace App\Http\Conrollers\Api;

use Orion\Http\Controllers\Controller;

class PostsController extends Controller {
    protected $model = Post::class;
}
```
