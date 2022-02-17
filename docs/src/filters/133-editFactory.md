# 13.3 Edit Posts Factory

## 13.3.1 Add Fields to Factory

Add `published` and `category`

```sh
# /database/factories/PostFactory.php

class PostFactory extends Factory {

    public function definition() {
        return [
            'title' => $this->faker->sentence(),    # Random Sentence
            'body' => $this->faker->paragraph(),    # Random Text Paragraph
            'published' => $this->faker->boolean(), # Random Boolean
            'category' => $this->faker->word(),     # Random Word
        ];
    }
}
```

## 13.3.2 Create Post with Factory

```sh
php artisan tinker
>>> Post::factory()->create()

# output
[!] Aliasing 'Post' to 'App\Models\Post' for this Tinker session.
=> App\Models\Post {#4489
     title: "Consectetur sunt possimus rem harum eum.",
     body: "Mollitia iusto possimus tempore nisi numquam tenetur omnis. Labore qui soluta molestiae cumque eligendi ad. Qui sint deleniti inventore omnis dolores aperiam. Atque hic sunt necessitatibus in quo.",
     published: false,
     category: "distinctio",
     updated_at: "2022-02-17 03:50:00",
     created_at: "2022-02-17 03:50:00",
     id: 14,
   }
```
