### Project 

How to start the project
---
docker compose up -d --build
---
After that the environment will be created.
Then enter the php docker container
---
docker exec -it neuronation-lara-php bash
---
And install all php packages running
---
composer install
---
Then copy the default configuration
---
cp .env.example .env
---
and generate the encryption key
---
php artisan key:generate
---
Run migrations to fill the database
---
php artisan migrate
---
After that the application will be available in your browser
---
http://localhost:8000/
---

## Database challenge


## Code challenge
