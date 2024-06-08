# FROM php:8.2

# RUN apt-get update && apt-get install -y \
#     libpq-dev \
#     && docker-php-ext-install pdo pdo_pgsql

# WORKDIR /var/www/html

# COPY . .

# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# CMD php artisan serve --host=0.0.0.0 --port=8000



FROM php:8.2-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql
RUN a2enmod rewrite
RUN a2enmod ssl
RUN service apache2 restart

WORKDIR /var/www/html

COPY . .

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

CMD php artisan migrate --seed
CMD php artisan serve --host=0.0.0.0 --port=8000