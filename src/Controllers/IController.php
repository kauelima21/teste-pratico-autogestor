<?php

namespace Kaue\BuscadorClienteAutogestor\Controllers;

use Kaue\BuscadorClienteAutogestor\Common\Request;
use Kaue\BuscadorClienteAutogestor\Common\Response;

interface IController
{
    public function handle(Request $req, Response $res);
}
