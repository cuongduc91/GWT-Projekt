FROM php:7.2-apache
# RUN docker-php-ext-install mysqli
# RUN docker-php-ext-enable mysqli

# RUN pecl install xdebug
# RUN docker-php-ext-enable xdebug

RUN apt-get update && \
  apt-get install -y libmemcached-dev zlib1g-dev && \
  docker-php-ext-install pdo pdo_mysql && \
  pecl install \
  xdebug-2.6.0 \
  memcached-3.0.4

RUN docker-php-ext-enable xdebug memcached