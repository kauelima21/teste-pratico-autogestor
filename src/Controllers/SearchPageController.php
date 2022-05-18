<?php

namespace Kaue\BuscadorClienteAutogestor\Controllers;

use Kaue\BuscadorClienteAutogestor\Common\Request;
use Kaue\BuscadorClienteAutogestor\Common\Response;
use Kaue\BuscadorClienteAutogestor\Common\ViewEngine;

class SearchPageController
{
    use ViewEngine;

    public function handle(Request $req, Response $res)
    {
        echo $this->render("search", [
            "title" => "Pesquisar por clientes"
        ]);
        return $res->withHeader('Content-type', 'text/html')->withStatus(200);
    }
}
