<?php

namespace Kaue\BuscadorClienteAutogestor\Repository;

use Kaue\BuscadorClienteAutogestor\Entity\ICategoryRepository;
use PDOException;

class CategoryRepository implements ICategoryRepository
{
    public function __Construct(private $conn)
    {
    }

    public function load(?int $limit = 0)
    {
        try {
            $query = "SELECT * FROM categories";
            if ($limit > 0) {
                $query = "SELECT * FROM categories LIMIT {$limit}";
            }
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Ops! Estamos com problemas para mostrar o conteúdo :(\n" . $e->getMessage());
        }
    }
}
