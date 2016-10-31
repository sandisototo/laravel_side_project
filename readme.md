#Methys Vehicle Management System
                    
Laravel application that allows users to login, and managing a database of registered vehicles and their owners.

## SetUp 

Step:
- Clone the project into your working directory
- CD into the application directory
- Find 'env.example', copy it to '.env' //$cp .env.example .env
- In '.env', change the database settings to point to your local database
- Use `php artisan key:generate` command to generate an application key.
- Use `php artisan migrate` command to create the necessary migrations
- Use `php artisan db:seed` command to insert the neccessary records to test this application.
- Finally, use `php artisan serve` to run the application 
(Please note:  In my case I've used a local apache virtual host to run this application but you don't really need to. Just in case you wondered why my url looks something like: http://local.vehicles.co.za instead of http://localhost/ It's just for the fun of it :). If you want to do this, you might wanna have a look at https://httpd.apache.org/docs/current/vhosts/examples.html)




## API

My API is still under construction at least half way done. :) 
All the url will be exposed as soon as it's done.

