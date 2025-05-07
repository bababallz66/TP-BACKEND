<?php

namespace Core;

use PDO;
use PDOException;

require_once __DIR__ . "/../../config/config.php";

abstract class Model
{
    protected static ?PDO $pdo = null;

    public function __construct()
    {
        if (is_null(self::$pdo)) {
            self::initDB();
        }
    }


    public function initDB()
    {
        try {
            self::$pdo = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
                DB_USER,
                DB_PASS
            );
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Impossible d'accéder à la base de données MySqL : " . $e->getMessage();
        }
    }
    protected function getDB()
    {
        return self::$pdo;
    }
}
