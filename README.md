README
======

![license](https://img.shields.io/packagist/l/bafs/via.svg?style=flat-square)
![PHP 5.4+](https://img.shields.io/badge/PHP-5.4+-brightgreen.svg?style=flat-square)

What is Via?
-----------------

Via is a PHP router. Support for http request, cli and a lot more. Create own rule is very simple by implements interfaces.

Via can be used to develop all kind of websites and scripts.

Installation
------------

The best way to install is to use the composer by command:

composer require newclass/via
composer install

Use example
-------------

    use Via\Action\HTTPAction;
    use Via\Action\HTTPRequest;
    use Via\Router;

    $router=new Router();
    
    $router->addAction(new HTTPAction('/users','get'),new YourDispatcher('users')); //YourDispatcher create by implements Via\Dispatcher interface
    $router->addAction(new HTTPAction('/users/{id}.json','post'),new YourDispatcher());

    try{    
        $dispatcher=$router->createDispatcher(new HTTPRequest('/users/1232.json','post'));
        $dispatcher->execute();
    } catch(RouteNotFoundException $e){
        header("HTTP/1.0 404 Not Found");
    }
        