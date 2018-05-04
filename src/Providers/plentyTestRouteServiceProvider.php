<?php

namespace plentyTest\Providers;
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class plentyTestRouteServiceProvider extends RouteServiceProvider{
    public function map(Router $router){
        $router->get('PlentyTest', 'plentyTest', 'plentyTest\Controllers\TestController@test');
    }
}