# 14.1 Update Controller

- Open file `/app/Http/Controllers/Api/PostsController.php`
- Add the following method

```php
public function sortableBy(): array {
    return ['title','category'];
}
```