<?php

namespace Kaue\BuscadorClienteAutogestor\Controllers;

use Kaue\BuscadorClienteAutogestor\Common\Connection;
use Kaue\BuscadorClienteAutogestor\Common\Request;
use Kaue\BuscadorClienteAutogestor\Common\Response;
use Kaue\BuscadorClienteAutogestor\Repository\CategoryRepository;

class CategoriesController
{
    public function handle(Request $req, Response $res)
    {
        echo json_encode((new CategoryRepository(Connection::getInstance()))->load());
        return $res->withHeader('Content-type', 'application/json')->withStatus(200);
    }
}
