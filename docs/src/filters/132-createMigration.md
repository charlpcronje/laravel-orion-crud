# 13.2 Create Migration

Enter the following command in your terminal

```sh
php artisan make:migration add_published_category_to_posts_table
```

## 13.2.1 Update Migration

```php
public function up() {
    Schema::table('posts', function (Blueprint $table) {
        $table->boolean('published')->default(false);
        $table->string('category')->default('none');
    });
}
```

## 13.2.2 Run Migration

```sh
php artisan migrate
```
