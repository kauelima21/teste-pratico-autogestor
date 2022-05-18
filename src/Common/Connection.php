<?php

namespace Kaue\BuscadorClienteAutogestor\Common;

use PDO;

class Connection
{
    private static $instance;
    private const DB_OPTIONS = [
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new PDO(
              "mysql:host=" . getenv("DB_HOST") . ";dbname=" . getenv("DB_NAME"),
              getenv("DB_USER"),
              getenv("DB_PASS"),
              self::DB_OPTIONS
            );
        }

        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}
