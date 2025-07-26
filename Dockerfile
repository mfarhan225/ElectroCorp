# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Install ekstensi PHP yang diperlukan
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# Install ekstensi intl
RUN apt-get update && apt-get install -y libicu-dev && docker-php-ext-install intl && docker-php-ext-enable intl

# Aktifkan mod_rewrite untuk Apache (penting untuk CodeIgniter)
RUN a2enmod rewrite

# Salin semua file project ke dalam container
COPY . /var/www/html/

# Set permission yang aman untuk CodeIgniter
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Ubah konfigurasi Apache agar mendukung .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set DocumentRoot ke folder public (CI4)
RUN sed -i 's|/var/www/html|/var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Jangan restart apache di Render, karena tidak akan berguna di build phase

EXPOSE 80
