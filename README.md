# lainsafe (php7.3)

```
apt update -y  && apt upgrade -y
apt install nginx git php7.3-fpm curl php7.3-common socat -y
systemctl enable --now nginx php7.3-fpm

mkdir /var/www/html/filesafe/uploads/ -p
cd /var/www/html
git clone https://github.com/ech1/lainsafe

cp phpfilesafe.conf /etc/nginx/conf.d/phpfilesafe.conf
chown -R www-data: .
nano /etc/nginx/conf.d/phpfilesafe.conf
```
edit the nginx config however you like it and then test it with:
```
nginx -t
nginx -s reload

```
