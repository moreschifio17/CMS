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

# Development

## Server

Development local server

```
php artisan serve
```
