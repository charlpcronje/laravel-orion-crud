# 7. First API Test

I played around with some REST clients and I wanted to find something I could run inside of VSCode in the browser

## 7.1 Thunder Client

> Install the extension in VSCode called Thunder Client

- ![ThunderClient](firsTest/thunderClientIcon.png) After the install click on icon.
- Then Make a new collection (Click on the 3 lines)
- Also click on Env and add a `Dev` Env
- Add a variabe under the `Dev` Env called `API_URL` with value of `https://orion.devserv.me/api`
- Right click on the Orion collection and click on collection settings.
- Click the Auth tab
- Click on the Bearer Tab
- Paste the User's pain text token there
- Create users and posts folders under the Orion collection

First Request, add under users. Click on new request:

- GET Request
- URL: `https://orion.devserv.me/api/user`
- Click send and it gets the user with the token specified under Auth
- Output should look like:

```sh
{
  "id": 1,
  "name": "Charl Cronje",
  "email": "charl@devserv.me",
  "email_verified_at": "2022-02-15T01:22:33.000000Z",
  "created_at": "2022-02-15T01:22:34.000000Z",
  "updated_at": "2022-02-15T01:22:34.000000Z"
}
```
