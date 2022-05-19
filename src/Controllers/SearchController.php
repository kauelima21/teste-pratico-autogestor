<?php

namespace Kaue\BuscadorClienteAutogestor\Controllers;

use Kaue\BuscadorClienteAutogestor\Common\{Request, Response, Connection};
use Kaue\BuscadorClienteAutogestor\Repository\{ClientRepository, CategoryRepository};

class SearchController
{
    public function handle(Request $req, Response $res)
    {
        $searchPost = $req->getServerParams()["search"];
        $clients = (new ClientRepository(Connection::getInstance()))->loadByName($searchPost, true);
        echo json_encode($clients);
        return $res->withHeader("Content-type", "application/json")->withStatus(200);
    }
}
