<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalController {
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
        // $payment_method = $data["payment_method"];
        // $type = $data["type"];
        // $date = $data["date"];
        // $amount = $data["amount"];
        // $description = $data["description"];

        $connection = Connection::getIntance()->getConnection();

        $stmt = $connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (
        :payment_method, 
        :type, 
        :date, 
        :amount, 
        :description)");

        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $stmt->execute();
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