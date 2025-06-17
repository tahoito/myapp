FROM php:8.2-fpm

# 必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev libpq-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Composerインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install

CMD ["php-fpm"]
