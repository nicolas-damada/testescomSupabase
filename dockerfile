FROM php:8.5-apache

# Copia os arquivos do seu projeto para o diretório do Apache
COPY . /var/www/html/

# Altera a porta padrão do Apache para 80 do container (o Render gerencia automaticamente)
EXPOSE 80
