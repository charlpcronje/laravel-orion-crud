# 10. Create Routes

- Open `routes/api.php`
- Make sure to `use` all of these

```php
use App\Http\Controllers\Api\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
```

## 10.1 Add new route group

```php
# Add tp bottom of file
Route::group(['as' => 'api'], function() {
    # now you have crud for posts
    Orion::resource('posts',PostsController::class);
});
```
