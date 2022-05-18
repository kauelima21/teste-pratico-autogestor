<?php

namespace Kaue\BuscadorClienteAutogestor\Controllers;

use Kaue\BuscadorClienteAutogestor\Common\Connection;
use Kaue\BuscadorClienteAutogestor\Common\Request;
use Kaue\BuscadorClienteAutogestor\Common\Response;
use Kaue\BuscadorClienteAutogestor\Repository\ClientRepository;

class ClientsController
{
    public function handle(Request $req, Response $res)
    {
        echo json_encode((new ClientRepository(Connection::getInstance()))->load());
        return $res->withHeader('Content-type', 'application/json')->withStatus(200);
    }
}
