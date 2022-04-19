# CMS

- CMS back-end
- clone the repository

  ` gh repo clone moreschifio17/CMS`

# Tecnologies

- Laravel 9.xx.xx
- PHP 8.x
- Composer 2.2.xx
- MySQL

# Data base

```
mysql -u root -p
```

## Create data base

```
CREATE DATABASE cms CHARACTER SET utf8 COLLATE utf8_general_ci;
exit
```

## Configure data base

```
cp .env.example .env
```

Change variables .env

```
APP_PORT=3000
    
DB_HOST=localhost
DB_NAME=cms
DB_USER=cms
DB_PASSWORD="xxxxxxxx"
```

## Migration

```
php artisan migrate
```

# Development

## Server

Development local server

```
php artisan serve
```
## Swagger 

```
 composer require "darkaonline/l5-swagger"
```
- open your config/app.php and add this line: 
```
L5Swagger\L5SwaggerServiceProvider::class
```
- After run 
```
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
```
- Connect Database.
```
 php artisan migrate:fresh --seed
```
## PHPUNIT (custom test)
```
php artisan test or vendor\bin\phpunit
