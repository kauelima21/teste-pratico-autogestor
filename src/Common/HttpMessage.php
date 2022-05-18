<?php

namespace Kaue\BuscadorClienteAutogestor\Common;

class HttpMessage
{
    public function withHeader(string $type, string $value)
    {
        header("{$type}: {$value}");
        return $this;
    }

    public function getHeaders()
    {
        return getallheaders();
    }

    public function getHeader(string $name)
    {
        return getallheaders()[$name];
    }
}
