FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    nano \
    libzip-dev \
    libxml2-dev \
    zip \
    unzip \
    pkg-config \
    libcurl4-openssl-dev \
    libonig-dev \
    libicu-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli pdo pdo_mysql mbstring zip curl xml intl
RUN docker-php-ext-enable mysqli mbstring zip curl xml intl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
