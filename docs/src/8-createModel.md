# 8. Create model

With orion it is handy to create a Model with a factory and a migration:

```sh
php artisan make:model Post --factory --migration
```

Open the new migration file and update the up function to look like this

```sh
# 2022_02_15_015213_create_posts_table.php
public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('body');
        });
    }
```

## 8.1 Now run a migrate

```sh
php artisan migrate

# output
Migrating: 2022_02_15_015213_create_posts_table
Migrated:  2022_02_15_015213_create_posts_table (63.98ms)
```

Open the `Post.php` Model and set the fillable fields

```php
# Models/Post.php
class Post extends Model {
    use HasFactory;

    protected $fillable = [
        'title',    
        'body'
    ];
}
```

## 8.2 Open the Post Factory

```php
# /database/factories/PostFactory.php

class PostFactory extends Factory {

    public function definition() {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];
    }
}
```

## 8.3 Let add some posts

```sh
php artisan tinker

#Psy Shell v0.11.1 (PHP 8.0.15 — cli) by Justin Hileman
>>> Post::factory()->create()

# Output
=> App\Models\Post {#3559
     title: "Expedita totam sequi inventore soluta.",
     body: "Magni quod qui esse qui fugiat quos voluptatem. Omnis consequatur qui explicabo magni molestiae quis. Eius error non ea aut culpa.",
     updated_at: "2022-02-15 02:05:50",
     created_at: "2022-02-15 02:05:50",
     id: 1,
   }

```

## 8.4 Add 10 users

```sh
php artisan tinker

#Psy Shell v0.11.1 (PHP 8.0.15 — cli) by Justin Hileman
>>> Post::factory()->count(10)->create()

#output

=> Illuminate\Database\Eloquent\Collection {#3554
     all: [
       App\Models\Post {#3561
         title: "Soluta fugiat eum rem omnis.",
         body: "Eum vero qui impedit sit. Qui commodi magnam nihil est repellat. Quis sit ipsum enim laborum explicabo est debitis.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 2,
       },
       App\Models\Post {#240
         title: "Fugit et eum dolor optio dolor consequuntur.",
         body: "Voluptatem corporis velit omnis labore ad id. Nihil consequatur reprehenderit corrupti voluptas occaecati voluptatem. Quis qui neque sed non iusto doloremque.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 3,
       },
       App\Models\Post {#3563
         title: "Amet nemo minima non ducimus.",
         body: "Ratione consequatur est ullam inventore ea placeat quia. Et et ex itaque sit placeat excepturi odio. Sint voluptatibus dolores delectus adipisci consequuntur. Culpa tempora officiis dolores quis nostrum.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 4,
       },
       App\Models\Post {#4281
         title: "Earum nihil voluptatem ullam et odio itaque itaque.",
         body: "Nihil ut facilis ad placeat. Est fuga quos quaerat eos maxime voluptatem. Officia in et facere aut id beatae. Et nemo sunt nemo.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 5,
       },
       App\Models\Post {#3565
         title: "Enim quis et dicta aut accusamus.",
         body: "Enim voluptas dolorum quam ea non. Non explicabo doloremque earum dolor maiores. Ea enim ipsum eaque ipsam et repellendus. Modi saepe architecto blanditiis at.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 6,
       },
       App\Models\Post {#4280
         title: "Ut omnis accusantium laboriosam voluptatem deleniti.",
         body: "Sed quia enim animi placeat. Cum praesentium et omnis optio et nobis reiciendis non. Voluptas officiis illum facere exercitationem.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 7,
       },
       App\Models\Post {#3882
         title: "Occaecati non praesentium totam et.",
         body: "Dolor libero saepe error ut veritatis sed. Incidunt officia totam soluta eum. Sunt velit repudiandae delectus ipsam libero tempore vel dolor.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 8,
       },
       App\Models\Post {#4242
         title: "Est quos laboriosam quo placeat tempore corporis.",
         body: "Sed quisquam nobis non cupiditate doloribus. Dolorem dolorum quaerat architecto vel est qui facere. Et voluptatibus consectetur sint quis doloribus tenetur. Tempore delectus enim ea est id.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 9,
       },
       App\Models\Post {#4489
         title: "Et consectetur fugiat delectus sint asperiores sapiente necessitatibus.",
         body: "Eius suscipit provident saepe. Quae expedita illo iure modi alias. Accusantium dolore quod libero rem accusantium laborum exercitationem. In quia at saepe ut. Quo id officiis quia temporibus sunt et.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 10,
       },
       App\Models\Post {#4490
         title: "Ut est est non consectetur dignissimos consequatur eligendi quia.",
         body: "Omnis est natus aspernatur eveniet sunt enim eaque. Omnis veniam dolores quisquam. Perferendis dolorem laboriosam consequuntur et autem modi accusantium.",
         updated_at: "2022-02-15 02:08:07",
         created_at: "2022-02-15 02:08:07",
         id: 11,
       },
     ],
   }

```
