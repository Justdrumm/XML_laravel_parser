    FROM php:7.4-fpm
    RUN apt-get update && apt-get install -y libmagickwand-dev --no-install-recommends && rm -rf /var/lib/apt/lists/*
    RUN printf "\n" | pecl install imagick
    RUN docker-php-ext-enable imagick
    RUN docker-php-ext-install pdo pdo_mysql
    WORKDIR /var/www
