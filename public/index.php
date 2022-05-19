<?php

use Kaue\BuscadorClienteAutogestor\Common\DotEnv;
use Kaue\BuscadorClienteAutogestor\Common\Router;
use Kaue\BuscadorClienteAutogestor\Controllers\{
    SearchController,
    SearchPageController,
    ClientsCategoriesController
};

require __DIR__ . "/../vendor/autoload.php";

DotEnv::send(__DIR__ . "/../");
$router = new Router();

$router->get("/", SearchPageController::class);
$router->get("/api/clientes-categorias", ClientsCategoriesController::class);
$router->post("/clientes", SearchController::class);

$router->dispatch();

if ($router->error()) {
    echo $router->error();
}
