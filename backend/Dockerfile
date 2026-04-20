FROM php:8.2-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    zip unzip curl git \
    libzip-dev \
    sqlite3 libsqlite3-dev \
    pkg-config \
    && docker-php-ext-install pdo pdo_sqlite zip

# installer composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

COPY . .

RUN composer install --no-interaction --prefer-dist

RUN chmod -R 777 storage bootstrap/cache

CMD php artisan serve --host=0.0.0.0 --port=8000