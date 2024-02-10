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
Run migrations to fill the database structure
```sh
php artisan migrate
```
You can fill the database by fake data using command
```sh
php artisan app:seed-db-fake-data
```
It will create 10 records of each model. You also can specify the count of fake models using --count option
```sh
php artisan app:seed-db-fake-data --count=500
```
After that the application will be available in your browser
```sh
http://localhost:8000/
```
When the database has data you can run the test HistoryTest
```sh
php artisan test
```

## Database challenge


## Code challenge
