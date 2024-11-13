# Use a imagem oficial do PHP 8.2
FROM php:8.2-fpm

# Instale dependências do sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Defina o diretório de trabalho
WORKDIR /var/www

# Copie o projeto Laravel
COPY . .

# Instale as dependências do Laravel
RUN composer install --optimize-autoloader --no-dev

# Defina as permissões de diretórios
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Expõe a porta usada pelo Laravel
EXPOSE 8000

# Comando para iniciar o servidor PHP
CMD php artisan serve --host=0.0.0.0 --port=8000
