- access the docker
docker exec -it 83ad4ef2b5dc bash

- get code container
docker ps

- install laravel packages
composer install

- generate key
php artisan key:generate

- permissons storage diretories
chmod 0777 -R /var/www/html/storage/logs/
chmod 0777 -R /var/www/html/storage/framework/sessions/
chmod 0777 -R /var/www/html/storage/framework/views/
