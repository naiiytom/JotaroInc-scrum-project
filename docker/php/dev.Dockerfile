FROM php:7.2-fpm-alpine

RUN apk add --no-cache $PHPIZE_DEPS && \
    apk add --update libzip-dev curl-dev && \
    docker-php-ext-install curl pdo_mysql mysqli && \
    apk del gcc g++ && \
    rm -rf /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

VOLUME /app
