<?php

namespace Phroute\Phroute;

use Kanumone\Bshop\Controllers\FormController;
use Kanumone\Bshop\Controllers\ProductController;
use Kanumone\Bshop\Controllers\SectionController;

function processInput(){
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

function processOutput($response){
    echo $response;
}

$router = new RouteCollector();

$router->get('/', ['\Kanumone\Bshop\Controllers\IndexController', 'index']);
$router->get('/section/{section_id:i}', function ($section_id) {
    $controller = new SectionController($section_id);
    $controller->show();
});
$router->get('/section/{section_id:i}/product/{product_id:i}', function ($section_id, $product_id) {
    $controller = new ProductController($section_id, $product_id);
    $controller->show();
});

$router->group(['prefix' => 'form'], function ($router) {
    $router->get('/', ['\Kanumone\Bshop\Controllers\FormController', 'show']);
    $router->post('/', ['\Kanumone\Bshop\Controllers\FormController', 'send']);
});

$dispatcher = new Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], processInput());
} catch (Exception\HttpRouteNotFoundException $e) {
    http_response_code(404);
    require_once SRC_PATH . '/resources/404.php';
    die();
}

processOutput($response);