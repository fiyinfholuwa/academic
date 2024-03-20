# Dockerfile
#latest composer to get the dependencies
FROM composer:2.7.1 as composer
WORKDIR /app
COPY . /app
RUN composer install && composer dumpautoload
RUN php artisan optimize:clear
#latest node to get the dependencies
FROM node:21-alpine3.18 as node 
WORKDIR /app
COPY --from=composer /app /app
RUN npm ci
RUN npm run build
#PHP Apache docker image for php8.1
FROM php:8.2.0RC5-apache-buster as php
#adds library support for different image upload
RUN apt-get update && apt-get install -y zlib1g-dev libpng-dev libwebp-dev libjpeg-dev libfreetype6-dev && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install gd
#000-default.conf is used to configure the web-server to listen to port 80 which Cloud run requires
EXPOSE 8080
EXPOSE 13714
COPY --from=node /app /var/www/
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN chmod 777 -R /var/www/storage/ && \
    echo "Listen 8080" >> /etc/apache2/ports.conf && \
    echo "Listen 13714" >> /etc/apache2/ports.conf && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite


