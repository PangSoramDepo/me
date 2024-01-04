# Use the official PHP image as the base image
FROM php:8.0-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Install dependencies and required PHP extensions
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libpq-dev \
        libjpeg-dev \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the Laravel project files to the container
COPY . .
COPY .env.example .env

# Set permissions for Laravel directories
RUN chown -R www-data:www-data storage bootstrap/cache

# Install PHP dependencies
RUN composer install --no-scripts --ignore-platform-reqs

# Generate Laravel application key
# RUN php artisan key:generate

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache server
CMD ["php", "artisan", "serve", "--port=80", "--host=0.0.0.0"]
