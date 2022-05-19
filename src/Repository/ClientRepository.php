<?php

namespace Kaue\BuscadorClienteAutogestor\Repository;

use Kaue\BuscadorClienteAutogestor\Entity\IClientRepository;
use PDO;
use PDOException;

class ClientRepository implements IClientRepository
{
    public function __Construct(private $conn)
    {
    }

    public function load(?int $limit = 0, bool $join)
    {
        try {
            $query = "SELECT * FROM clients";
            if ($join) {
                $query = "SELECT * FROM clients_categories";
            }

            if ($limit > 0) {
                $query = "{$query} LIMIT {$limit}";
            }
            $stmt = $this->conn->prepare($query . " ORDER BY first_name");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Ops! Estamos com problemas para mostrar o conteúdo :(\n" . $e->getMessage());
        }
    }

    public function loadByName(string $name, bool $join)
    {
        try {
            $query = "SELECT * FROM clients WHERE first_name LIKE CONCAT('%', :fn, '%') OR last_name LIKE CONCAT('%', :ln, '%')";
            if ($join) {
                $query = "SELECT * FROM clients_categories WHERE first_name LIKE CONCAT('%', :fn, '%') OR last_name LIKE CONCAT('%', :ln, '%') OR name LIKE CONCAT('%', :n, '%')";
            }

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":fn", $name, PDO::PARAM_STR);
            $stmt->bindParam(":ln", $name, PDO::PARAM_STR);
            if ($join) {
                $stmt->bindParam(":n", $name, PDO::PARAM_STR);
            }
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Ops! Estamos com problemas para mostrar o conteúdo :(\n" . $e->getMessage());
        }
    }

    public function loadByCategory(int $categoryId)
    {
        try {
            $query = "SELECT * FROM clients WHERE category_id = :catid";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":catid", $categoryId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Ops! Estamos com problemas para mostrar o conteúdo :(\n" . $e->getMessage());
        }
    }
}
