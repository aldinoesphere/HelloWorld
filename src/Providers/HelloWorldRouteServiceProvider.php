<?php
 
namespace HelloWorld\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Routing\ApiRouter;
 
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router, ApiRouter $apiRouter)
    {
    	$apiRouter->version(
			['v1'],
			['namespace' => 'HelloWorld\Controllers', 'middleware' => 'oauth'],
			function ($apiRouter) {
				$apiRouter->get('payment/helloworld/setting/{settingType}', 'ContentController@sayHello');
			}
		);
		$router->get('hello', 'HelloWorld\Controllers\ContentController@sayHello');
    }
}