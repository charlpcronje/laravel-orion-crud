# 15. Laravel Scopes

- Open the `Post` Model: `/app/Models/Post.php`
- Add the following methods

## 15.1 Update Model

```php
    /**
     * Scope the query to published posts
     * Whenever you have a public method within a model that starts with the word `scope` it has a special meaning
     * It means you can scope other queries with the word following scope, in the case `published`
     */
    public function scopePublished($query) {
        return $query->where('published',true);

        /* now I can do the following
         * Instead of
         * Post::where('title','Nice Title')->where('published',true);
         * You can say
         * Post::where('title','Nice Title')->published();
         * That will give me all the post with a title of 'Nice Title' and that is published
         */
    }

    /**
     * Scope the query by category
     */
    public function scopeWhereCategory($query, $category) {
        return $query->where('category',$category);
        /* Now you can do the following
         * Post::query()->whereCateogry('Laravel Orion')
         */
    }
```

## 15.2 Update Controller

- Open the PostController: `/app/Http/Controllers/Api/PostsController.php`
- Add the following method

```php
public function exposedScopes(): array {
    return ['published','whereCategory'];
}
```
