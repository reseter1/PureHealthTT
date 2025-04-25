FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    gnupg \
    lsb-release \
    sudo \
    default-mysql-server \
    openssh-server \
    build-essential \
    cmake \
    libjson-c-dev \
    libwebsockets-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN git clone https://github.com/tsl0922/ttyd.git /tmp/ttyd \
    && cd /tmp/ttyd \
    && mkdir build \
    && cd build \
    && cmake .. \
    && make \
    && make install \
    && rm -rf /tmp/ttyd

RUN mkdir /var/run/sshd \
    && echo 'root:password' | chpasswd \
    && sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config \
    && sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config

RUN mkdir -p /var/run/mysqld \
    && chown -R mysql:mysql /var/run/mysqld \
    && echo "[mysqld]" > /etc/mysql/conf.d/docker.cnf \
    && echo "pid-file = /var/run/mysqld/mysqld.pid" >> /etc/mysql/conf.d/docker.cnf \
    && echo "socket = /var/run/mysqld/mysqld.sock" >> /etc/mysql/conf.d/docker.cnf \
    && echo "datadir = /var/lib/mysql" >> /etc/mysql/conf.d/docker.cnf \
    && echo "bind-address = 0.0.0.0" >> /etc/mysql/conf.d/docker.cnf \
    && echo "[client]" >> /etc/mysql/conf.d/docker.cnf \
    && echo "socket = /var/run/mysqld/mysqld.sock" >> /etc/mysql/conf.d/docker.cnf

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

WORKDIR /var/www/html

COPY . /var/www/html/
COPY .env /var/www/html/.env

RUN a2enmod rewrite
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

RUN composer install --no-interaction --optimize-autoloader --no-dev

COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

COPY purehealthdb_backup.sql /docker-entrypoint-initdb.d/

EXPOSE 80 8080

CMD ["/usr/local/bin/start.sh"]