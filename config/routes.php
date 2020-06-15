<?php
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/posts', function ($routes) {
    $routes->connect(
        '/',
        ['controller' => 'Posts',]
    );
    $routes->connect(
        '/create',
        ['controller' => 'Posts', 'action' => 'create']
    );

    $routes->connect(
        '/:id',
        ['controller' => 'Posts', 'action' => 'view'],
        ['id' => '\d+', 'pass' => ['id']]
    );
    $routes->connect(
        'edit/:id',
        ['controller' => 'Posts', 'action' => 'eidt'],
        ['id' => '\d+', 'pass' => ['id']]
    );
    $routes->connect(
        '/hello',
        ['controller' => 'Posts', 'action' => 'hello']
    );
});

Router::prefix('admin', function($routes) {
    $routes->connect('/', ['controller' => 'Dashboard']);
    $routes->connect('/create', ['controller' => 'Posts', 'action' =>  'create']);
});

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));


    $routes->applyMiddleware('csrf');


    $routes->connect('/', ['controller' => 'Posts', 'action' => 'index', 'home']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


    $routes->fallbacks(DashedRoute::class);
});
