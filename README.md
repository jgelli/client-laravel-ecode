# client-laravel-ecode

## Features

- [x] Admin dashboard
- [x] List Client in Admin Dashboard
- [x] Filters in Admin Dashboard
- [x] Admin Login and Register
- [x] Client Loign and Register
- [x] Client Edit

## Dependencies

To run this project you need to install locally on your machine the following dependencies:

- Docker;
- Docker Composer;
- NPM;

## Running

1. Open the project folder and run `make build-image`
2. Now run `make bash` to get in the docker terminal
3. Inside docker terminal run `composer install`
4. Still in docker terminal run the Laravel migrations with `php artisan migrate`
5. Acess localhost:8005
6. Have fun!

## Routes

- Client: localhost:8005
- Admin: localhost:8005/admin
