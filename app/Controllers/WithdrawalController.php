<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalController {
    private $connection;

    public function __construct(){
        $this->connection = Connection::getIntance()->getConnection();
    }


    /**
     * Muestra una lista de recursos
     */
    public function index(){
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals");

        $stmt->execute();

        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        var_dump($results);

        foreach($results as $result)
            echo "Gastaste $" . $result["amount"] . " en " . $result["description"] . "\n";


        // Trae solamente los valores de una columna especificada por el indice
        // $amounts = $stmt->fetchAll(\PDO::FETCH_COLUMN, 2);

        // foreach($amounts as $amount)
        //     echo "Gastaste $amount USD \n";
    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create(){}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data){
        $stmt = $this->connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (
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
     * Muestra un unico recurso especificado por su id
     */
    public function show(int $id){
        $stmt = $this->connection->prepare("SELECT * FROM withdrawals WHERE id = $id");

        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        var_dump($result);

        echo "Gastaste $" . $result["amount"] . " en " . $result["description"] . "\n";
    }

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