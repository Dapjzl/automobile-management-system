FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    libzip-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Set working directory
WORKDIR /var/www

# Copy composer and npm files first (better caching)
COPY composer.json composer.lock package*.json ./

# Install PHP dependencies
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies
RUN npm install

# Copy the rest of the application
COPY . .

# Build frontend assets (⚠️ use build instead of dev)
RUN npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Generate application key and optimize
RUN php artisan key:generate && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan storage:link

# Set up Livewire assets
RUN php artisan livewire:publish --assets

# Expose port 9000
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
