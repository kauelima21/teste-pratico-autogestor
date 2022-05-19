<?php

namespace Kaue\BuscadorClienteAutogestor\Controllers;

use Kaue\BuscadorClienteAutogestor\Common\Connection;
use Kaue\BuscadorClienteAutogestor\Repository\ClientRepository;
use Kaue\BuscadorClienteAutogestor\Common\{Request, Response, ViewEngine};

class SearchPageController
{
    use ViewEngine;

    public function handle(Request $req, Response $res)
    {
        $clients = (new ClientRepository(Connection::getInstance()))->load(0, true);

        echo $this->render("search", [
            "title" => "Pesquisar por clientes",
            "clients" => $clients
        ]);
    }
}
