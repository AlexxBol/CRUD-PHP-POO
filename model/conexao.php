<?php 

class Conexao{

    private $conn;

    public function getConn(){

      if(!isset($conn)){

         $conn = new PDO("mysql:dbname=escola;host=localhost", "root", "");
      }
      return $conn;
    }
}


?>