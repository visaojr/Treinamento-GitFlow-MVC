<?php

require 'database.php';

class Alunos{

    public $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->connection();
    }

    public function listAll(){
        $query = "SELECT * FROM Alunos";
        $stmt  = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt; 
    }

    public function insertAluno($dados){
        $query = "INSERT INTO Alunos VALUES(:matricula, :nome, :telefone)";
        $stmt  = $this->conn->prepare($query);
        try{
            $stmt->execute($dados);
            return 1;
        }catch(PDOException $e){
            echo $e->getMessage();
            return 0;
        }
    }

    public function removeAluno($matricula){
        $query = "DELETE FROM Alunos WHERE matricula = :matricula)";
        $stmt  = $this->conn->prepare($query);
        $stmt->bindParam(":matricula", $matricula);
        try{
            $stmt->execute();
            return 1;
        }catch(PDOException $e){
            echo $e->getMessage();
            return 0;
        }
    }

    public function getAluno($matricula) {
        $query = "SELECT * FROM Alunos WHERE `matricula` = :matricula";
        $stmt  = $this->conn->prepare($query);
        $stmt->bindParam(":matricula", $matricula);
        $stmt->execute();
        return $stmt;
    }
}


?>