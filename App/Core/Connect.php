<?php

namespace App\Core;
require ("App/Support/Config.php");
use PDO;
use PDOException;


class Connect {

 static $instace;

    public static function getInstance()
    {
        if (empty(self::$instace)){
            try {
                self::$instace = new PDO(
                    "mysql:host=". HOST . ";dbname=" . DB,
                    USER,
                    PASSWORD
                );
            }catch ( PDOException $exception ){
                die("<h1>Erro Ao Conectar</h1>" . $exception->getMessage());
            }
        }
        return self::$instace;
 }
}
