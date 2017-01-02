
# Light MVC framework for PHP applications 
A simplistic example of combining a few popular packages into your own micro-framework.

#### Pre-requisites
1. [Composer](https://getcomposer.org/):  is a dependency manager for PHP.
Just because you are not using a framework does not mean you will have to reinvent the wheel every time you want to do something. With Composer, you can install third-party libraries for your application.

Note: The composer.json file is the Composer configuration file that will be used to configure your project and its dependencies.

2. Run tables.sql wich includes sql scripts to create all the tables you need in your server side  database
#### What's included?

 MVC directory structure and classes for:

HTTP requests (GET, POST, …) and responses (headers and status codes);
Route request Uri to different controllers (regex expertise);
Session control (server side and using Database);
Connect to databases (decision of MySQL drivers);
Configurable key->values that can be used in the application

I spent some time picking out packages, preferring those used by existing large applications or frameworks. Here is what's included, in no particular order:

* **[nikic/fast-route](https://github.com/nikic/FastRoute)**
  * Popular routing library used by frameworks like [Slim](http://www.slimframework.com).  
  
* **[Http Component](https://github.com/PatrickLouys/http)**
  * Simplifies request & reponse handling.
  
  
The index.php is the starting point, so it has to be inside the web server directory. This means that the web server has access to all subdirectories.

To handle the Sessions control I followed this tutorial: http://culttt.com/2013/02/04/how-to-save-php-sessions-to-a-database/
