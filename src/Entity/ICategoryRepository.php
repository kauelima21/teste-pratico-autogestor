<?php

namespace Kaue\BuscadorClienteAutogestor\Entity;

interface ICategoryRepository
{
    public function load(?int $limit = 0);
}
