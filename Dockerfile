FROM php:7-apache
RUN docker-php-ext-install mysqli
COPY htdocs/ /var/www/html/
