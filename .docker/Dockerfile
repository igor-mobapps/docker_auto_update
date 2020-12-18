# Build Stage 1
# Compile Composer Dependencies
FROM composer:2.0 AS composer
WORKDIR /var/www/app/
COPY . /var/www/app/
RUN composer install --ignore-platform-reqs --no-interaction --no-dev --prefer-dist --optimize-autoloader

# Build Stage 2
# PHP Alpine + apache
FROM alpine:3.7
WORKDIR /var/www/app/
COPY --from=composer /var/www/app/ /var/www/app/
RUN apk add --no-cache zip unzip libzip-dev libpng-dev libxml2-dev libmcrypt-dev curl gnupg apache2 \
    php7 php7-apache2 php7-mbstring php7-session php7-json php7-openssl php7-tokenizer php7-pdo php7-pdo_mysql php7-fileinfo php7-ctype \
    php7-xmlreader php7-xmlwriter php7-xml php7-simplexml php7-gd php7-bcmath php7-zip php7-dom php7-posix php7-calendar libc6-compat libstdc++ nano \
    && mkdir -p /run/apache2

# Add Script to container and set permission
ADD entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh   

# Apache Configuration
COPY /config/apache.conf /etc/apache2/conf.d/

ENTRYPOINT ["/entrypoint.sh"]