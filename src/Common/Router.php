<?php

namespace Kaue\BuscadorClienteAutogestor\Common;

class Router
{
    private array $routes;

    private $error;

    private Request $request;

    private Response $response;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
    }

    public function get(string $path, string $handler)
    {
        $this->routes["GET"][$path] = $handler;
    }

    public function post(string $path, string $handler)
    {
        $this->routes["POST"][$path] = $handler;
    }

    public function dispatch()
    {
        if (!key_exists($this->request->getUri(), $this->routes[$this->request->getMethod()])) {
            $this->error = 404;
            return;
        }

        $controller = new $this->routes[$this->request->getMethod()][$this->request->getUri()]();
        $controller->handle($this->request, $this->response);
    }

    public function error()
    {
        return $this->error;
    }
}
