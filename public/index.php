<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalController;
use Router\RouterHandler;

require "../vendor/autoload.php";

// Obtener la URL desde el parámetro `slug`
$slug = $_GET["slug"] ?? "";
$slug = trim($slug, "/");
$slug = explode("/", $slug);

$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;

$router = new RouterHandler;

switch ($resource) {
    case '/':
        echo "Estás en front page";
        break;
    case 'incomes':
        $method = $_POST["method"] ?? "get";
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(IncomesController::class, $id);
        break;
    case 'withdrawals':
        $method = $_POST["method"] ?? "get";
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(WithdrawalController::class, $id);
        break;
    default:
        echo "404 not found";
        break;
}