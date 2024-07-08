<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable("C:\Users\lauta\Documents\dev\platzi-php-database");
$dotenv->load();

$server = $_ENV["server"];
$database = $_ENV["database"];
$username = $_ENV["username"];
$password = $_ENV["password"];
$port = $_ENV["port"];


try {
    $connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    $setnames = $connection->prepare("SET NAMES 'utf8'");
    $setnames->execute();
} catch (PDOException $e) {
    die("Falló la conexión: {$e->getMessage()}");
}