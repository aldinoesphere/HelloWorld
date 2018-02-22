<?php
 
namespace HelloWorld\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Routing\ApiRouter;
 
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
    	$apiRouter->version(
						['v1'],
						['namespace' => 'HelloWorld\Controllers', 'middleware' => 'oauth'],
						function ($apiRouter) {
							$apiRouter->get('payment/skrill/setting/{plentyId}/{settingType}', 'ContentController@sayHello');
						}
		);
    }
}