# raspberry_salaryman
Salaryman clock record check

# Rasbian/FullPageOS configuración


## PHP

```bash
sudo apt install acl php8.3 php8.3-cli php8.3-fpm php8.3-common php8.3-curl php8.3-mbstring php8.3-xml php8.3-mysql
```

```bash
sudo update-alternatives --set php /usr/bin/php8.3
sudo update-alternatives --config php
```

## Servidor web nginx

Usar vhost **./nginx/default** ajustar document root **/var/www/html/current/public**
y fastcgi_pass de PHP FPM

## MariaDB

```bash
sudo apt install mariadb-server
sudo mysql_secure_installation #frutilladb
```

## Usuario rasberry

export DISPLAY=:0