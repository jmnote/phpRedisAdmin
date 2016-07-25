phpRedisAdmin Cloud Foundry Ready
=================================

This is an example application which can be run on CloudFoundry using the PHP Build Pack.

This is an out-of-the-box implementation of phpRedisAdmin 1.6.0.


Installation
============
Just 5 steps:

 1. Clone this app.
 2. Go inside the folder and run `cf push`
 3. Bind your redis service with `cf bs phpredisadmin <service_name>` and repeat for all redis services you want in your phpRedisAdmin
 4. Restage the service with `cf restage phpredisadmin` 
 5. Get service name & password for login phpredisadmin-cf: `cf env <app_name>` and you're done.
