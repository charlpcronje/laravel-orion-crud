# 12.4 PATCH Request

## 12.4.1 Request

- Endpoint: `https://orion.devserv.me/api/posts/13`
- Method: `PATCH`
- Auth Header: `Brearer 1|CAuIUWmLOWDns5blNIN6ejiOw2yp267NIGuFrO1w`
- Request Body:

```json
{
    "title": "This is a test title Updated"
}
```

## 12.4.1 Response

```json
{
  "data": {
    "id": 13,
    "created_at": "2022-02-16T14:17:35.000000Z",
    "updated_at": "2022-02-16T14:20:08.000000Z",
    "title": "This is a test title Updated",
    "body": "This is a tets boddy for my yeys ost enandii sdkal dkdajdaasdlakjd lad aldasjdsadd jld d dl"
  }
}
```
