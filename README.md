# stock-management-app
A simple stock management with Laravel/Vue Js.

# Techstack
  - Laravel 5.5
  - JS
  - Laravel Mix
  - Bootstrap
  - webpack
  - node Modules
  
# Features
  - Stock Adding
  - Stock Manage / Edit / Add stock
  - PDF/Excel Generate
  - Supplier Management
  - Client Management
  - Category Management


## Setup

  1- Run `cp .env.example .env` to create a `.env` file
  
  2-Setup your Database information to your `.env` file :

  ``` bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
  ```
  3-Run `composer install`
  
  4-Run `php artisan key:generate`
  
  5-Run `php artisan migrate`
  
  6-Run `php artisan db:seed`
    
  7-Run `npm install`
  
  8-Run `npm run watch`
  
  9-Run `php artisan serve` and your app will be running on `localhost:8000`
