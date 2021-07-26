<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Laravel Show Sentences In Boxes 1.0

> ### This is a project that creates different tables using user input data like rows, columns and the sentences to insert in the table fields or table boxes based on the user needs.
This repo's functionality is complete!

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Note: This templete was tested on XAMPP using Laravel 7.0

To begin using this template, you may:
[Download and install XAMPP](https://www.apachefriends.org/download.html)

Clone the repository

    git clone https://github.com/Obenny/https://github.com/Obenny/show-sentences-in-boxes.git.git 

Or Download the file from the link below and unzip it

     https://github.com/Obenny/https://github.com/Obenny/show-sentences-in-boxes

Switch to the repo folder

    cd show-sentences-in-boxes

Install all the dependencies using composer

    composer install

Install all the front end and back end dependencies using composer

    npm install or yarn install

Copy the .env.example file and rename it to .env. Make the required configuration changes(like changing the database name, host username, host password as it is on your local host) in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the database seeder to generate sample users in the users-table

    php artisan db:seed --class=DatabaseSeeder

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000 at any of your browsers

**Summary of command list**

    git clone https://github.com/Obenny/employee-management-system-1.git
    cd employee-management-system-1
    composer install
    npm install or yarn install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    php artisan db:seed --class=DatabaseSeeder
    php artisan serve

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data with relationships which includes users, articles, comments, tags, favorites and follows. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.**

Open the DummyDataSeeder and set the property values as per your requirement

    database/seeds/DummyDataSeeder.php

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh

# Projects features

## Users(Visitors)

- Allow Users to surf the website without login and registration [ DONE ]

## Admin

### Testing credentials
- #### Email: admin@admin.com
- #### Password: password
- #### or you may register to create your own credentials

- Allow ADMIN to Create/Retrieve/Update/Delete Tables and Boxes in the system [ DONE ]
- Allow ADMIN to Create/Retrieve/Update/Delete Sentences in Boxes in the system [ DONE ]

### Sample Screenshots
- Sample screenshots can be found on the screenshots-folder

## Built With Template from

* [mini-crm](https://github.com/Obenny/mini-crm)


## Author(s)

* **Isaac Obenson** - *Initial work* - [Obenny](https://github.com/Obenny)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to [Dropee](https://www.dropee.com/) and anyone whose idea was used.
