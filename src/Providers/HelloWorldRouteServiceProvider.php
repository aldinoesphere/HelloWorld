<?php
 
namespace HelloWorld\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('settings/hello','HelloWorld\Controllers\ContentController@sayHello');
    }
}