# stock-management-app
A simple stock management with Laravel/Vue Js.
  
## Features
  - Authentication
  - Stock Adding
  - Stock Manage / Edit / Add stock
  - PDF/Excel Generate
  - Supplier Management
  - Client Management
  - Category Management


## Setup

  After you clone this project:
  
  1- Run `cp .env.example .env` to create a `.env` file
  
  2-Setup your Database information to your `.env` file :

  ``` bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YourDatabaseName
DB_USERNAME=YourUsername
DB_PASSWORD=YourPassword
  ```
  3-Run `composer install`
  
  4-Run `php artisan key:generate`
  
  5-Run `php artisan migrate --seed`
      
  6-Run `npm install`
  
  7-Run `npm run watch`
  
  8-Run `php artisan serve` and your app will be running on `localhost:8000`
