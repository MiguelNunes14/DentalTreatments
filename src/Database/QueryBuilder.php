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
    
    public function login($table, $username, $column1, $column2, $class = "StdClass") {
        // Procura o utente pelo nome de utilizador ou outro campo
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $column1 = :utilizador OR $column2 = :utilizador");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['utilizador' => $username]);
        return $stmt->fetch();
    }
    
    public function findById($table,$id,$class = "StdClass") {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['id'=>$id]);
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