### Project 

How to start the project
```sh
docker compose up -d --build
```
After that the environment will be created.
Then enter the php docker container
```sh
docker exec -it neuronation-lara-php bash
```
And install all php packages running
```sh
composer install
```
Then copy the default configuration
```sh
cp .env.example .env
```
and generate the encryption key
```sh
php artisan key:generate
```
Run migrations to fill the database
```sh
php artisan migrate
```
After that the application will be available in your browser
```sh
http://localhost:8000/
```

## Database challenge


## Code challenge
