<?php

namespace Kaue\BuscadorClienteAutogestor\Common;

class Request extends HttpMessage
{
    public function getMethod()
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    public function getUri()
    {
        return $_SERVER["REQUEST_URI"];
    }

    public function getQueryParams()
    {
        return $_GET;
    }

    public function getServerParams()
    {
        return $_POST;
    }
}
