FROM php:8.3-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli


# # Enable Apache mods
RUN a2enmod http2 ssl rewrite

# # Update Apache configuration to enable HTTP/2
RUN echo "Protocols h2 http/1.1" >> /etc/apache2/apache2.conf

# # Set ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# # Restart Apache to apply the changes
RUN service apache2 restart