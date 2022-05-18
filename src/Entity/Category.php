<?php

namespace Kaue\BuscadorClienteAutogestor\Entity;

class Category
{
    private int $id;
    private string $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}
