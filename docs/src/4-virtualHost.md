# 4. Create Virtual Host

Okay so I like to have my config file for vhosts close to me and close to the sites it supports

## 4.1 httpd.conf

Open `/etc/httpd/conf/httpd.conf`

Add the following to the last line of the config file

> This will let Apache look for a vhosts.conf in each sub folder of `/var/www`

```conf
IncludeOptional /var/www/**/*vhosts.conf
```

In `/var/www/sz/vhosts.conf` I added the following

## vhosts.conf

```conf
# orion.devserv.me
<VirtualHost 104.192.7.185:8080>
    ServerName orion.devserv.me
    ServerAdmin admin@devserv.me
    DocumentRoot /var/www/sz/html/orion.devserv.me/public
    <Directory /var/www/sz/html/orion.devserv.me/public>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>
    ErrorLog /var/www/sz/html/orion.devserv.me/logs/error.log
    CustomLog /var/www/sz/html/orion.devserv.me/logs/access.log combined 
</VirtualHost>
```

Then add logs folder to `vhost`

```sh
mkdir /var/www/sz/html/orion.devserv.me/logs
```
