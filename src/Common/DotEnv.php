<?php

namespace Kaue\BuscadorClienteAutogestor\Common;

class DotEnv
{
    private static $file;

    public static function send(string $pathEnv)
    {
        self::$file = $pathEnv . ".env";
        if (!is_file(self::$file) || !file_exists(self::$file)) {
            throw new \Exception("Path for env file is not valid");
        }
        
        self::$file = file($pathEnv . ".env");
        foreach (self::$file as $line) {
            putenv(trim($line));
        }
    }
}
