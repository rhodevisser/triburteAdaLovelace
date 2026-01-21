<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = 
[
    '/' => 'controllers/index.php',
    '/biografie' => 'controllers/biografie.php',
    '/erkenning' => 'controllers/erkenning.php',
    '/bronnen' => 'controllers/bronnen.php',
];


function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


routeToController( $uri, $routes);