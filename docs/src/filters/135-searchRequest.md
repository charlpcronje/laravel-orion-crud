# 13.5 Search Request

## 13.5.1 Update Posts Controller

Add method to controller to specify which fields are searchable

```php
# /app/Http/Controllers/Api/PostsController.php

protected function searchableBy(): array {
    return ['title','body','category'];
}
```

## 13.5.2 POST Request

- Endpoint: `https://orion.devserv.me/api/posts/search`
- Method: `POST`
- Auth Header: `Brearer 1|CAuIUWmLOWDns5blNIN6ejiOw2yp267NIGuFrO1w`
- Request Body:

```json
{
    "search": {
        "value": "Laravel Orion"
    } 
}
```

## 13.5.3 Response

```json
{
  "data": [
    {
      "id": 1,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Enim aut voluptatem enim aut ea.",
      "body": "Repudiandae ipsa aliquid occaecati debitis. Laborum dolorem ut omnis vel corrupti dignissimos dolor. Repudiandae ea ea voluptatum commodi et. Rerum eligendi dolorum eaque voluptatem.",
      "published": 0,
      "category": "Laravel Orion"
    },
    {
      "id": 2,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Eos est consequuntur aspernatur reiciendis quaerat et est accusamus.",
      "body": "Provident quia omnis delectus odio. Animi animi fugit voluptates quos qui earum fuga. Perspiciatis amet repellendus vero error nemo aut deserunt. Voluptatum quos laborum deleniti earum omnis facilis quibusdam. Consectetur consequuntur itaque consequatur aut tempora autem.",
      "published": 1,
      "category": "Laravel Orion"
    },
    {
      "id": 3,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Sunt ea repellat quisquam.",
      "body": "Molestiae tempora asperiores blanditiis vel. Quo minus quasi dicta et repellendus quam repellendus. Quis qui sit animi praesentium eligendi.",
      "published": 0,
      "category": "Laravel Orion"
    }
  ],
  "links": {
    "first": "http://orion.devserv.me/api/posts/search?page=1",
    "last": "http://orion.devserv.me/api/posts/search?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http://orion.devserv.me/api/posts/search?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http://orion.devserv.me/api/posts/search",
    "per_page": 15,
    "to": 3,
    "total": 3
  }
}
```
