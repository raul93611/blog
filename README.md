Things to do to recover the project from Github
Clone the project
Create the env file
php artisan key:generate
composer install
composer update (if you want to update dependencies)
npm install
npm update (if you want to update dependencies)
npm run dev (to compile assets)
Restore the database
php artisan migrate:fresh --seed
php artisan view:clear
php artisan adminlte:update
