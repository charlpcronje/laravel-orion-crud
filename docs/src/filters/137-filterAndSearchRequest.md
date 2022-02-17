# 13.7 Filter and Search Request

## 13.7.1 POST Request - Filter Published and Seach Title

- Endpoint: `https://orion.devserv.me/api/posts/search`
- Method: `POST`
- Auth Header: `Brearer 1|CAuIUWmLOWDns5blNIN6ejiOw2yp267NIGuFrO1w`
- Request Body:

```json
{
    "search": {
        "value": "Laravel Orion"
    }
    "filters": [
        {
            "field": "title",
            "operator": "=",
            "value": "Enim aut Voluptatem enim aut ea."
        }
    ]
}
```

## 13.7.2 Response - Filter Published and Seach Title

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
    },
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
    },
    {
      "id": 7,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Vel iusto necessitatibus id ratione recusandae in.",
      "body": "Nihil aut qui iste aperiam. Dolores labore et nulla qui perferendis. Ut natus deleniti dicta rerum quos amet.",
      "published": 0,
      "category": "Vue Tips"
    },
    {
      "id": 8,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Autem voluptas dolores aut in et et.",
      "body": "Sed quisquam quas id. Assumenda tempore consequatur perferendis rerum sint aut quasi occaecati. Et ut possimus sunt maxime atque non cumque. Optio optio et est non.",
      "published": 1,
      "category": "Vue Tips"
    },
    {
      "id": 9,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Qui quaerat iusto nisi temporibus.",
      "body": "Nihil occaecati illo sed quaerat tempora. Pariatur ullam occaecati quod esse ea porro et. Ipsam mollitia necessitatibus quasi incidunt dolores voluptates est.",
      "published": 0,
      "category": "Vue Tips"
    },
    {
      "id": 10,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Dignissimos maxime enim error voluptatem.",
      "body": "Temporibus doloribus quo aut sint sed quasi. Et excepturi dignissimos neque occaecati inventore. Eos porro est et aut quia minima velit delectus.",
      "published": 1,
      "category": "Coding Tips"
    },
    {
      "id": 11,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Maxime odio ea libero molestiae.",
      "body": "Dolor asperiores ab cumque ipsa quas. Cum qui a itaque voluptatem et. Qui ea odit quia voluptatem eius at eius. Cum id earum amet maxime.",
      "published": 1,
      "category": "Coding Tips"
    },
    {
      "id": 12,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Ab cupiditate quod expedita ut eius necessitatibus.",
      "body": "Soluta cum occaecati amet iusto ipsam sapiente omnis. Fuga quia ducimus qui accusamus nihil. Ut natus quis saepe quos minus. Delectus cupiditate rem fugit et omnis libero delectus velit.",
      "published": 0,
      "category": "Coding Tips"
    },
    {
      "id": 13,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Velit ipsum aliquam nihil delectus et deserunt.",
      "body": "Atque mollitia necessitatibus et corrupti dolore maiores dolorem. Quia modi modi ipsum.",
      "published": 1,
      "category": "Secure Zone"
    },
    {
      "id": 14,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Omnis blanditiis saepe quia quo repudiandae ut architecto.",
      "body": "Iste possimus natus ut sed a iure distinctio. Enim rerum ducimus aperiam aut sint et. Itaque eum quae voluptas natus. Repudiandae non dolorem rerum.",
      "published": 0,
      "category": "Secure Zone"
    },
    {
      "id": 15,
      "created_at": "2022-02-17T04:35:04.000000Z",
      "updated_at": "2022-02-17T04:35:04.000000Z",
      "title": "Ad inventore est dignissimos tempore vel.",
      "body": "Facere consectetur sit quidem explicabo. Dolorem itaque magni rerum. Minus ab eaque pariatur omnis maxime animi magnam.",
      "published": 0,
      "category": "Secure Zone"
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
    "to": 15,
    "total": 15
  }
}
```
