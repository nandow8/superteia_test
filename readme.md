## Instalação

1. composer install
2. php artisan key:generate
3. fazer uma copia do arquivo .env.example na raiz do projeto e renomar para .env, depois atualizar     os campos de acordo com seu banco de dados: DB_DATABASE, DB_USERNAME, DB_PASSWORD
4. php artisan migrate
5. php artisan serve
6. Se estiver no linux e der erro de acesso: sudo chmod 775 storage/

Opcional livereload :
1. npm install (precisa ter nodejs instalado)
2. npm run watch
