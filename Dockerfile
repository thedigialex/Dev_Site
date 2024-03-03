# Use PHP 8.2 with Apache
FROM php:8.2-apache

# Install dependencies for Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Install extensions for Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Set the working directory in the container
WORKDIR /var/www

# Copy the application to the container
COPY . /var/www

# Set the correct permissions on the storage and bootstrap/cache directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Set the document root to the public directory
ENV APACHE_DOCUMENT_ROOT /var/www/public

# Update Apache configuration with the new document root
RUN sed -i -e 's|/var/www/html|${APACHE_DOCUMENT_ROOT}|g' /etc/apache2/sites-available/000-default.conf
RUN sed -i -e 's|/var/www/|${APACHE_DOCUMENT_ROOT}/|g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
