FROM php:8.3-apache

RUN apt-get update \
    && apt-get install -y libicu-dev libonig-dev unzip \
    && docker-php-ext-install intl mbstring mysqli pdo_mysql \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN if [ -f composer.json ]; then \
        composer install --no-dev --optimize-autoloader; \
    fi

RUN sed -ri 's!/var/www/html!/var/www/html/public!g' \
        /etc/apache2/sites-available/*.conf \
    && sed -ri 's/AllowOverride None/AllowOverride All/g' \
        /etc/apache2/apache2.conf \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80

CMD ["apache2-foreground"]