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
        $connection = Connection::getInstance()->getConnection();

        $connection->query(
            "INSERT INTO incomes (payment_method, type, date, amount, description) VALUES (
            {$data["payment_method"]},
            {$data["type"]},
            '{$data["date"]}',
            {$data["amount"]},
            '{$data["description"]}'
            );"
        );
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