## Laravel Application

The application also demonstrates how to upload a large Excel file to a database. This feature uses laravel excel package. The package helps us to validate the user input and load the file in a queue. Hence suited to upload a large file into a database.


##  :wrench: Setup

1. Clone this repository.
2. `cd` into it.
3. Install Composer Dependencies. `composer install`
4. Install NPM Dependencies.  `npm install`
5. Copy `.env.example` file to `.env` 
6Generate an app encryption key.  `php artisan key:generate`
7Set up your database credentials then run `php artisan migrate` to create the tables.
8Set up queue for file upload: I recommend redis queue driver on `.env` file.
9Use the `php artisan queue:work` to start a queue worker and process new jobs as they are pushed onto the queue.
10`php artisan serve`
11Visit `localhost:8000` in your browser.
