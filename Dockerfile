FROM php:8.2-fpm

# Set environment variables
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install system dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libwebp-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Install and configure PHP extensions (GD + others)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) \
       pdo_mysql \
       mbstring \
       exif \
       pcntl \
       bcmath \
       gd \
       zip

# Install PostgreSQL extension
RUN docker-php-ext-install pdo_pgsql

# Install Composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files first (better cache)
COPY composer.json composer.lock ./

# Install dependencies (without running scripts)
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy the rest of the application
COPY . .

# Generate optimized autoload files
RUN composer dump-autoload --optimize

# Laravel setup (safe clears)
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan storage:link || true \
    && php artisan livewire:publish --assets || true

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# Expose port
EXPOSE 8000

# Start Laravel with PHP's built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT}"]


