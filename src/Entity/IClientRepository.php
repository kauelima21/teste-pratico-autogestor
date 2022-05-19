<?php

namespace Kaue\BuscadorClienteAutogestor\Entity;

interface IClientRepository
{
    public function load(?int $limit = 0, bool $join);
    public function loadByName(string $name, bool $join);
    public function loadByCategory(int $categoryId);
}
