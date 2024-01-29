FROM php:8.3-apache

# install git
RUN apt-get update && apt-get install -y git libzip-dev

# Install required PHP extensions
RUN docker-php-ext-install mysqli zip

# Enable Apache mods
RUN a2enmod http2 ssl rewrite

# Update Apache configuration to enable HTTP/2
RUN echo "Protocols h2 http/1.1" >> /etc/apache2/apache2.conf

# Set ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Restart Apache to apply the changes
RUN service apache2 restart

# Change the working directory
WORKDIR /var/www/html

# Install dependencies
RUN composer install