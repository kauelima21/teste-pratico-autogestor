<?php

namespace Kaue\BuscadorClienteAutogestor\Common;

trait ViewEngine
{
    public function render(string $viewPath, array $data): string
    {
        extract($data);
        ob_start();
        /** Limitando para ser sempre as views da pasta 'views' e que sempre sejam arquivos php */
        require __DIR__ . "/../../views/" . $viewPath . ".php";
        return ob_get_clean();
    }
}
