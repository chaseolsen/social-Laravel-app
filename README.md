# social-laravel-app
Here is a pretty straight forward social/blog app built with Laravel, I also used Composer and Artisan for Schemas, Migration, etc. Nothing spectacular, but a nice environment to build on.

https://www.linkedin.com/in/chaseolsen/

## Installation Guide
Clone it:
```
git clone https://github.com/chaseolsen/social-laravel-app.git
```
Install Composer Dependencies:
```
composer install
```
Install NPM Dependencies:
```
npm install
```
Create copy of env:
```
cp .env.example .env
```
Generate app encryption key: php artisan key:generate
```
php artisan key:generate
```
In .env file, add database information to allow Laravel to connect: 
* DB_HOST
* DB_PORT
* DB_DATABASE
* DB_USERNAME
* DB_PASSWORD

Create empty database
Migrate the database
```
php artisan migrate
```

## Technologies Used

* Laravel
* Composer
* Artisan
* Webpack

## Project Overview

Here is basic file structure of project (Left out a few Laravel generated content below)

    ├── app                     # Contains Http -> Controllers/Middleware and Providers
    ├── config                  # Auth for DB (I just used XAMPP for a local DB, so you'd have to change this)
    ├── database                # More generated files and Migrations, containing table Schemas for Migration
    ├── public                  # Pretty self explanitory
    ├── assets                  # Contains views, which holds auth, inc, layouts, pages, posts and all other ___.blade.php files
    ├── routes                  # Contains routes, see web.php specifically, also specifies which controller to handle reqs
    ├── storage                 # Local images like cover_images as well as a laravel.log
    ├── tests                   # Generated with Laravel, didn't do anything regarding this folder
    └── README.md

## Extra Details About Development And Future Plans
This app was primarily built to refresh Laravel and to have a codebase to refer to in the future.
