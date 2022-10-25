<?php

namespace Phroute\Phroute;

function processInput($uri){
    $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    return $uri;
}

function processOutput($response){
    echo $response;
}

$router = new RouteCollector();

$router->get('/', function(){
    return 'Like at Home!';
});

$dispatcher = new Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], processInput($_SERVER['REQUEST_URI']));
} catch (Exception\HttpRouteNotFoundException $e) {
    http_response_code(404);
    echo "Not found";
    die();
}

processOutput($response);