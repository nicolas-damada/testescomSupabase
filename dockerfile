FROM php:8.2-apache

# Instala as extensões do PostgreSQL para o PHP
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Copia os arquivos do seu projeto para a pasta pública do Apache
COPY . /var/www/html/

# Dá permissão para o Apache ler os arquivos
RUN chown -R www-data:www-data /var/www/html