<?php

namespace Kaue\BuscadorClienteAutogestor\Entity;

interface ICategoryRepository
{
    public function load(?int $limit = 0);
    public function loadById(int $id);
    public function loadByName(string $name);
}
