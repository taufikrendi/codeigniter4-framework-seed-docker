FROM php:8.0-fpm-alpine
WORKDIR /var/www/web
RUN set -ex \
  && apk --no-cache add \
    postgresql-dev
RUN docker-php-ext-install pgsql && docker-php-ext-enable pgsql
RUN docker-php-ext-install intl && docker-php-ext-enable intl
RUN apk add --no-cache \
    oniguruma-dev \
    && docker-php-ext-install mbstring \
    && docker-php-ext-enable mbstring \
    && rm -rf /tmp/*
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer
RUN composer self-update
COPY ../www/web /var/www/web
RUN composer create-project codeigniter4/appstarter web -vvv
#RUN composer require firebase/php-jwt