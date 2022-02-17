# 16. Scoped Request

## 16.1 POST Request - Published Scope

- Endpoint: `https://orion.devserv.me/api/posts/search`
- Method: `POST`
- Auth Header: `Brearer 1|CAuIUWmLOWDns5blNIN6ejiOw2yp267NIGuFrO1w`
- Request Body:

```json
{
    "scopes": [
        {
            "name": "published"
        },
        {
            "name": "whereCategory",
            "parameters": ["Laravel Tips"]
        }
    ]
}
```

## 16.2 Response - Published Scope

```json
{
  "data": [
    {
      "id": 4,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "At voluptate atque accusantium consequatur et exercitationem.",
      "body": "Fugiat quibusdam consequatur voluptatum distinctio. Dolore accusantium et laborum amet saepe nostrum. Commodi aut cum inventore autem nihil nesciunt. Voluptate quam voluptas totam omnis.",
      "published": 1,
      "category": "Laravel Tips"
    },
    {
      "id": 5,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Qui qui fuga veritatis ut sit voluptate.",
      "body": "Sit aut ea enim voluptas non qui eum. Ut aut ex distinctio qui blanditiis eum.",
      "published": 1,
      "category": "Laravel Tips"
    },
    {
      "id": 6,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Rerum velit eveniet deleniti ipsam quia.",
      "body": "Aut minus voluptas totam deleniti quo. Dicta et laudantium a qui saepe. Natus voluptatem ea sint nobis saepe. Maiores ut architecto accusamus quis ipsa. Ut ducimus quia necessitatibus numquam voluptatem et rerum id.",
      "published": 1,
      "category": "Laravel Tips"
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
}
```