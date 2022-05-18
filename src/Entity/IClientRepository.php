<?php

namespace Kaue\BuscadorClienteAutogestor\Entity;

interface IClientRepository
{
    public function load(?int $limit = 0);
}
