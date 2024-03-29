Instructions 

Open your XAMPP panel and start the apache and mysql server

Open the cmd console and type "composer install" then wait for the packages to install

Then you run these commands in this order

php artisan migrate

php artisan db:seed

php artisan serve

Go to your browser and type "localhost:8000"



