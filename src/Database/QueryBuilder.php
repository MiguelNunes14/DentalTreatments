<?php
namespace Miguel\ProjetoFinal\Database;

use Connection;
use \PDO;

class QueryBuilder
{
    private $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    public function getAll($table,$class = "StdClass") {
        $stmt = $this->pdo->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function getAllBy($table, $column, $value, $class = "StdClass"){
        $stmt = $this->pdo->prepare("SELECT * FROM $table where $column = :value");
        $stmt->execute(['value' => $value]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function getTratamentos($utente_id, $FDI, $class = "StdClass"){
        $stmt = $this -> pdo -> prepare("SELECT * from Tratamentos T where Utente_id = :utente AND FDI = :fdi AND Data > DATE_SUB(curdate() ,INTERVAL 6 MONTH) ORDER BY Data");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt -> execute(['utente' => $utente_id,
                         'fdi' => $FDI]);
        return $stmt->fetchAll();
    }
    
    public function login($table, $username, $column1, $column2, $class = "StdClass") {
        // Procura o utente pelo nome de utilizador ou outro campo
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $column1 = :utilizador OR $column2 = :utilizador");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['utilizador' => $username]);
        return $stmt->fetch();
    }
    
    public function login1Field($table, $username, $column, $class = "StdClass") {
        // Procura o utente pelo nome de utilizador ou outro campo
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $column = :utilizador");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['utilizador' => $username]);
        return $stmt->fetch();
    }
    
    public function findById($table,$id,$class = "StdClass") {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE Id=:id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }

    public function getFirst($table,$column, $column_value, $class = "StdClass") {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $column=:id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['id'=>$column_value]);
        return $stmt->fetch();
    }

    public function deleteById($table,$id) {
        $stmt = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->rowCount() == 1;
    }
    public function create($table,$attributes) {
        $stmt = $this->pdo->prepare("INSERT INTO $table (".
            implode(",",array_keys($attributes)).
            ") VALUES (:".implode(', :', array_keys($attributes)).")");
        $stmt->execute($attributes);
    }
    public function update($table,$id,$attributes) {
        $query = "UPDATE $table SET ";
        foreach ($attributes as $key => $attribute)
            $query .= "$key=:$key,";
        $query = rtrim($query, ",");
        $query .= ' WHERE id=:id';
        $attributes['id'] = $id;
        $stmt = $this->pdo->prepare($query);       
        $stmt->execute($attributes);
        return $stmt->rowCount() == 1;
    }
}