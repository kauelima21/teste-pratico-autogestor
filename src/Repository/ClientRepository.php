<?php

namespace Kaue\BuscadorClienteAutogestor\Repository;

use Kaue\BuscadorClienteAutogestor\Entity\IClientRepository;
use PDOException;

class ClientRepository implements IClientRepository
{
    public function __Construct(private $conn)
    {
    }

    public function load(?int $limit = 0)
    {
        try {
            $query = "SELECT * FROM clients";
            if ($limit > 0) {
                $query = "SELECT * FROM clients LIMIT {$limit}";
            }
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Ops! Estamos com problemas para mostrar o conteúdo :(\n" . $e->getMessage());
        }
    }
}
