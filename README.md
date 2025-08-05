# DOG-CRUD GUIDE

This web application features a dog manager application that allows you to add a dog with the following data:
- Name
- Age
- Race
- Weight
- Animal Type (just to learn relational stuff in laravel)

In order to test this app out, make sure to have docker installed. Once you got it, proceed to do the following commands

> docker compose up -d --build

With the containers up, enter into the application container with

> docker exec -it blog_php bash

Once you are inside the container, use the following commands

> composer install
> cp .env.example .env
> php artisan key:generate
> php artisan config:clear
> php artisan config:cache
> php artisan migrate
> npm install
> npm run build

Once you are done with all the commands, the application must be ready for use!

To enter the application, enter the following URL into your web browser
> http://localhost:8081/dog
