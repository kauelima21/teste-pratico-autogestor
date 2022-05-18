<?php

namespace Kaue\BuscadorClienteAutogestor\Common;

class Response extends HttpMessage
{
    public function getStatusCode()
    {
        return http_response_code();
    }

    public function withStatus(int $code)
    {
        http_response_code($code);
        return $this;
    }
}
