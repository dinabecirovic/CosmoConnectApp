# Koristi PHP 8.1 sa Apache serverom
FROM php:8.1-apache

# Postavi radni direktorijum
WORKDIR /var/www/html

# Instaliraj zavisnosti
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd zip

# Instaliraj Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Kopiraj sve iz trenutnog direktorijuma u radni direktorijum
COPY . /var/www/html

# Instaliraj PHP zavisnosti
RUN composer install --no-dev --optimize-autoloader

# Postavi odgovarajuće dozvole za Laravel
RUN chown -
