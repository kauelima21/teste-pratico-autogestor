<?php

namespace Kaue\BuscadorClienteAutogestor\Repository;

use Kaue\BuscadorClienteAutogestor\Entity\ICategoryRepository;
use PDO;
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

    public function loadById(int $id)
    {
        try {
            $query = "SELECT * FROM categories WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchObject();
        } catch (PDOException $e) {
            die("Ops! Estamos com problemas para mostrar o conteúdo :(\n" . $e->getMessage());
        }
    }

    public function loadByName(string $name)
    {
        try {
            $stmt = $this->conn->prepare(
                "SELECT * FROM categories WHERE name LIKE CONCAT('%', :n, '%')"
            );
            $stmt->bindParam(":n", $name, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Ops! Estamos com problemas para mostrar o conteúdo :(\n" . $e->getMessage());
        }
    }
}
