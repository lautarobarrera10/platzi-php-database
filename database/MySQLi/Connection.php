<?php

namespace Database\MySQLi;

require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable("C:\Users\lauta\Documents\dev\platzi-php-database");
$dotenv->load();

// Patrón singleton
class Connection {
    private static $instance;
    private $connection;

    public static function getInstance(){
        if (!self::$instance instanceof self)
            self::$instance = new self;

        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

    private function __construct(){
        $this->make_connection();
    }

    private function make_connection(){
        $server = $_ENV["server"];
        $database = $_ENV["database"];
        $username = $_ENV["username"];
        $password = $_ENV["password"];
        $port = $_ENV["port"];

        $mysqli = new \mysqli($server, $username, $password, $database, $port);

        if ($mysqli->connect_errno)
            die("Falló la conexión: {$mysqli->connect_error}");

        $this->setUTF8($mysqli);

        $this->connection = $mysqli;
    }

    private function setUTF8($connection){
        $setname = $connection->prepare("SET NAMES 'utf8'");
        $setname->execute();
    }
}




