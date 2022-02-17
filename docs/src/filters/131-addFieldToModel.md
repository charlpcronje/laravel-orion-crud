# 13.1 Add fields to Model

- First add some fieds to the `posts` model
- Opem `/app/Models/Post.php`
- add `category` and `published`

```php
# /app/Models/Post.php
protected $fillable = [
    'title',    
    'body',
    'category',
    'published'
];
```
