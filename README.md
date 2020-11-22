# Klass

Klass is an e-learning web based platform for high-school level.
Klass offers free learning materials on various categories, including physics, mathematics, biology, and more. 

### Tech stack:
1. Laravel 8
2. MySQL
3. TailwindCSS 2

### How to run it:
1. Clone this project
2. Make sure you have MySQL and PHP installed on your machine
3. Open this project directory root and type `cp .env.example .env` on your terminal. This will make a new `.env` file for your environment
4. Run these command on terminal: `composer install`, `npm install`, and `npm install tailwindcss@npm:@tailwindcss/postcss7-compat postcss@^7 autoprefixer@^9`
5. Then generate the `APP_KEY` using: `php artisan key:generate`
6. Run migration: `php artisan migrate`
7. Run command `php artisan serve` , the site is deployed on your localhost
