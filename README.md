# lainsafe (php7.3)

```
apt update -y  && apt upgrade -y
apt install nginx git -y
mkdir /var/www/html/filesafe/uploads/ -p
cd /var/www/html
git clone https://github.com/ech1/lainsafe

mv phpfilesafe.conf /etc/nginx/conf.d/phpfilesafe.conf
