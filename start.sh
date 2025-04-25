#!/bin/bash
set -e

DB_DATABASE=$(grep DB_DATABASE .env | cut -d '=' -f2)
DB_USERNAME=$(grep DB_USERNAME .env | cut -d '=' -f2)
DB_PASSWORD=$(grep DB_PASSWORD .env | cut -d '=' -f2)

echo "Khởi động MySQL..."
if service mariadb status &>/dev/null; then
    service mariadb start
elif service mysqld status &>/dev/null; then
    service mysqld start
elif service mysql status &>/dev/null; then
    service mysql start
else
    mkdir -p /var/run/mysqld
    chown -R mysql:mysql /var/run/mysqld
    mysqld_safe --skip-syslog &
    echo "Đợi MySQL khởi động..."
    sleep 10
fi

echo "Đảm bảo MySQL đã sẵn sàng..."
until mysqladmin ping -h localhost --silent; do
    echo "Đang đợi MySQL..."
    sleep 2
done

echo "Thiết lập MySQL..."
mysql -e "CREATE DATABASE IF NOT EXISTS ${DB_DATABASE};"
mysql -e "CREATE USER IF NOT EXISTS '${DB_USERNAME}'@'localhost' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -e "CREATE USER IF NOT EXISTS '${DB_USERNAME}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -e "GRANT ALL PRIVILEGES ON ${DB_DATABASE}.* TO '${DB_USERNAME}'@'localhost';"
mysql -e "GRANT ALL PRIVILEGES ON ${DB_DATABASE}.* TO '${DB_USERNAME}'@'%';"
mysql -e "FLUSH PRIVILEGES;"

echo "Import dữ liệu vào MySQL..."
mysql ${DB_DATABASE} < /docker-entrypoint-initdb.d/purehealthdb_backup.sql

sed -i 's/DB_HOST=127.0.0.1/DB_HOST=127.0.0.1/g' .env
sed -i 's/DB_HOST=localhost/DB_HOST=127.0.0.1/g' .env

echo "" >> .env
echo "# Cấu hình socket MySQL" >> .env
echo "DB_SOCKET=/var/run/mysqld/mysqld.sock" >> .env

rm -f bootstrap/cache/config.php

echo "Cấu hình Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "Tạo liên kết từ public đến storage..."
php artisan storage:link

echo "Khởi động Apache..."
apache2-foreground 