# Laravel App

Este projeto é uma aplicação Laravel disponibilizada para fins educacionais.
Fatec Campinas 
Prof. Ed Robson Silva Araújo

## Como iniciar o projeto

Siga os passos abaixo para configurar e executar a aplicação localmente:

```bash
# 1. Clone o repositório
git clone https://github.com/nosbordeGit/app-laravel.git
cd app-laravel

# 2. Configure o ambiente
cp .env.example .env

# 3. Edite as configurações do banco de dados no arquivo .env
# Exemplo:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=password

# 4. Instale as dependências do Laravel
composer update

# 5. Gere a chave da aplicação
php artisan key:generate

# 6. Execute as migrações
php artisan migrate

# 7. Execute o vite
npm install && npm run build

# 8. Inicie o servidor de desenvolvimento do frontend (Vite)
composer run dev
