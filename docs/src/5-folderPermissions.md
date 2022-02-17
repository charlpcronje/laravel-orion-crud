# 5. Folder Permissions

For a dev environment it works to change the ownwer and group to apache and the permissions to 775

```sh
chmod -R 775 /var/www/sz/html/orion.devserv.me
chown -R apache:apache /var/www/sz/html/orion.devserv.me
```
