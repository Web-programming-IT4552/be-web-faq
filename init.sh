docker-compose up --build -d
#docker-compose exec app composer update
docker-compose exec app composer install --no-scripts
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan optimize
#docker-compose exec php artisan make:migration [ten]
docker-compose exec app php artisan migrate