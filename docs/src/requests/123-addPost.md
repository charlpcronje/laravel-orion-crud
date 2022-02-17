# 12.3 POST Request

## 12.3.1 Request

- Endpoint: `https://orion.devserv.me/api/posts/10`
- Method: `POST`
- Auth Header: `Brearer 1|CAuIUWmLOWDns5blNIN6ejiOw2yp267NIGuFrO1w`
- Request Body:

```json
{
    "title": "This is a test title",
    "body": "This is a tets boddy for my yeys ost enandii sdkal dkdajdaasdlakjd lad aldasjdsadd jld d dl"
}
```

## 12.3.2 Response

```json
{
  "data": {
    "id": 13,
    "created_at": "2022-02-16T14:17:35.000000Z",
    "updated_at": "2022-02-16T14:17:35.000000Z",
    "title": "This is a test title",
    "body": "This is a tets boddy for my yeys ost enandii sdkal dkdajdaasdlakjd lad aldasjdsadd jld d dl"
  }
}
```
