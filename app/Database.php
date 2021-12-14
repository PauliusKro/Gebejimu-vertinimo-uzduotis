<?php

namespace Imones;

use PDO;
use PDOExeption;

class Database {
    private static $connection = 'mysql:host=127.0.0.1';
    private static $user = 'Paulius';
    private static $password = '1233';
    private static $database = 'php_darbas';
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ];

    public static function connect() {
        try {
            return new PDO(
                self::$connection.';dbname='.self::$database,
                self::$user,
                self::$password,
                self::$options
            );
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}