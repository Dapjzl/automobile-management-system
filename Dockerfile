FROM php:8.2-fpm

# Set environment variables
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \ 
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install and configure PHP extensions
RUN docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd\
    pdo_mysql \
    pdo_pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files first (better caching)
COPY composer.json composer.lock ./

# Install dependencies without running scripts (artisan not yet available)
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy the rest of the application
COPY . .

# Generate optimized autoload files
RUN composer dump-autoload --optimize

# Laravel setup (safe-fail if artisan not ready)
RUN php artisan config:clear || true \
    && php artisan route:clear || true \
    && php artisan view:clear || true \
    && php artisan storage:link || true \
    && php artisan livewire:publish --assets || true

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache

# Expose Render HTTP port (Render expects your app to listen on $PORT)
EXPOSE 10000

# Run Laravel using the Render-assigned PORT
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=${PORT}"]
