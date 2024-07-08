<?php

namespace Database\PDO;

require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable("C:\Users\lauta\Documents\dev\platzi-php-database");
$dotenv->load();

class Connection {
    private static $intance;
    private $connection;

    public static function getIntance(){
        if (!self::$intance instanceof self)
            self::$intance = new self;

        return self::$intance;
    }

    public function getConnection(){
        return $this->connection;
    }

    private function __construct(){
        $this->makeConnection();
    }

    private function makeConnection(){
        $server = $_ENV["server"];
        $database = $_ENV["database"];
        $username = $_ENV["username"];
        $password = $_ENV["password"];

        try {
            $connection = new \PDO("mysql:host=$server;dbname=$database", $username, $password);
            $this->setUTF8($connection);
            $this->connection = $connection;
        } catch (\PDOException $e) {
            die("Falló la conexión: {$e->getMessage()}");
        }
    }

    private function setUTF8($connection){
        $setnames = $connection->prepare("SET NAMES 'utf8'");
        $setnames->execute();
    }
}