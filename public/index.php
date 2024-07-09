<?php

require "../vendor/autoload.php";

// Obtener la URL desde el parámetro `slug`
$slug = $_GET["slug"] ?? "";
$slug = trim($slug, "/");
$slug = explode("/", $slug);

var_dump($slug);
