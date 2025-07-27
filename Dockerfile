# Gunakan base image PHP dengan Apache
FROM php:8.2-cli

# Install dependensi dasar
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    nodejs \
    npm \
    libpq-dev \
    libzip-dev \
    zip \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Salin semua file ke image
COPY . .

# Install dependensi PHP Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Install dependency frontend
RUN npm install && npm run build

# Port Railway akan inject ke variabel $PORT, default ke 8080
ENV PORT=8080

# Jalankan Laravel dev server
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"]
