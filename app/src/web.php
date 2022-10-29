<?php

namespace Phroute\Phroute;

use Kanumone\Bshop\Controllers\SectionController;

function processInput(){
    return urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}

function processOutput($response){
    echo $response;
}

$router = new RouteCollector();

$router->get('/', ['\Kanumone\Bshop\Controllers\IndexController', 'index']);
$router->get('/section/{section_id}', function ($section_id) {
   $SectionController = new SectionController();
   $SectionController->show($section_id);
});

$dispatcher = new Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], processInput());
} catch (Exception\HttpRouteNotFoundException $e) {
    http_response_code(404);
    echo "Not found";
    die();
}

processOutput($response);