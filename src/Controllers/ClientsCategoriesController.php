<?php

namespace Kaue\BuscadorClienteAutogestor\Controllers;

use Kaue\BuscadorClienteAutogestor\Common\{Request, Response, Connection};
use Kaue\BuscadorClienteAutogestor\Repository\ClientRepository;

class ClientsCategoriesController
{
    public function handle(Request $req, Response $res)
    {
        $clients = (new ClientRepository(Connection::getInstance()))->load(0, true);
        echo json_encode($clients);
        return $res->withHeader('Content-type', 'text/html')->withStatus(200);
    }
}
