<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class IncomesController {
    /**
     * Muestra una lista de recursos
     */
    public function index(){}

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create(){}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data){
        $payment_method = $data["payment_method"];
        $type = $data["type"];
        $date = $data["date"];
        $mount = $data["amount"];
        $description = $data["description"];

        $connection = Connection::getInstance()->getConnection();

        $stmt = $connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES (?,?,?,?,?);");

        $stmt->bind_param("iisds", $payment_method, $type, $date, $mount, $description);

        $stmt->execute();

        echo "Se han insertado {$stmt->affected_rows} fila/s";
    }

    /**
     * Muestra un unico recurso especificado
     */
    public function show(){}

    /**
     * Muestra un formulario para editar un recursp
     */
    public function edit(){}

    /**
     * Actualiza un recurso especifico en la base de datos
     */
    public function update(){}

    /**
     * Elimina un recurso de la base de datos
     */
    public function destroy(){}
}