<?php

namespace Kaue\BuscadorClienteAutogestor\Entity;

class Client
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $category_id;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }
}
