Requirements

Xampp 8.2.12
PHP 8.1 (Included in the Xampp)
Laravel 10.10


Instructions 

1) Open your XAMPP panel and start the apache and mysql server

2) Open the cmd console and type "composer install" then wait for the packages to install

3) Then you run these commands in this order

3.1) php artisan migrate

3.2) php artisan db:seed

3.3) php artisan serve

4) Go to your browser and type "localhost:8000"

5) Log in using the credentials indicated in the .env file (adminuser and adminpassword123)


Wrapping Up, all details of the code starts in routes/web.php

