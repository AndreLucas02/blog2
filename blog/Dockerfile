# Use a imagem PHP oficial como base
FROM php:latest

# Defina o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Copie os arquivos principais e pastas para o diretório de trabalho no contêiner
COPY contato.php index.php post.php /var/www/html/
COPY css/styles.css /var/www/html/css/
COPY templates/header.php templates/footer.php /var/www/html/templates/
COPY img /var/www/html/img
COPY helpers/url.php /var/www/html/helpers
COPY data/categories.php data/posts.php /var/www/html/data/

# Exponha a porta 80 para acesso web (se necessário)
EXPOSE 3000

# Comando para executar quando o contêiner for iniciado
CMD ["php", "-S", "0.0.0.0:80"]
