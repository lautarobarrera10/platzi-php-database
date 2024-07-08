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


$mysqli = new mysqli($server, $username, $password, $database, $port);

if ($mysqli->connect_errno)
    die("Falló la conexión: {$mysqli->connect_error}");

$setname = $mysqli->prepare("SET NAMES 'utf8'");

$setname->execute();