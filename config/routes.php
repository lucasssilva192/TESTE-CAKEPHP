<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/posts', function ($routes){
        
    $routes->connect('/', 
        ['controller' => 'Posts']
    );
    $routes->connect('/create',
        ['controller' => 'Posts', 'action' => 'create']
    );
    $routes->connect('/:id', 
        ['controller' => 'Posts', 'action' => 'view'],
        ['id' => '\d+', 'pass' => ['id']]);
    $routes->connect('edit/:id',
        ['controller' => 'Posts', 'action' => 'edit'],
        ['id' => '\d+', 'pass' => ['id']]);
    $routes->connect('/ola',
        ['controller' => 'Posts', 'action' => 'ola']);
    });

    $routes->prefix('admin', function($routes){
        $routes->connect('/', ['controller' => 'Dashboard']);
        $routes->connect('/create', ['controller' => 'Posts', 'action' => 'create']);
    });

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Posts', 'action' => 'index', 'home']);
        $builder->connect('/pages/*', 'Pages::display');
        $builder->fallbacks();
    });
};
