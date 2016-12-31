# Frameworkless
An admittedly overly simplistic example of combining a few popular packages into your own micro-framework.


## Why?

**Education.**

I do not recommend building your own framework unless you have a very compelling reason to do so.
Instead,use a popular & well-supported framework like [Symfony](http://symfony.com), [Slim](https://www.slimframework.com), or [Laravel](http://laravel.com).

#### What's included?
I spent some time picking out packages, preferring those used by existing large applications or frameworks. Here is what's included, in no particular order:

* **[nikic/fast-route](https://github.com/nikic/FastRoute)**
  * Popular routing library used by frameworks like [Slim](http://www.slimframework.com).  
* **[filp/whoops](https://github.com/filp/whoops)**
  * Stunning error handler, it makes errors sting a bit less.  
* **[symfony/http-foundation](https://github.com/symfony/http-foundation)**
  * Simplifies request & reponse handling.
* **[league/container](https://github.com/thephpleague/container)**
  * Dependency injection container, for sharing common resources (like a database connection).
* **[twig/twig](https://github.com/twigphp/Twig)**
  * The rock solid templating engine used by Symfony and many others.
* **[vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)**
  * Please don't push your database credentials to GitHub.  