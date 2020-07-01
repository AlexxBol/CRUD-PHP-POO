<?php 
class Aluno{

    private $idAluno, $nome, $serie, $ra;

    public function getIdAluno(){

        return $this->idAluno;
     }
 
     public function setIdAluno($idAluno){
 
         $this->idAluno = $idAluno;
     }

    public function getNome(){

        return $this->nome;
     }
 
     public function setNome($nome){
 
         $this->nome = $nome;
     }

     public function getSerie(){

        return $this->serie;
     }
 
     public function setSerie($serie){
 
         $this->serie = $serie;
     }

     public function getRa(){

        return $this->ra;
     }
 
     public function setRa($ra){
 
         $this->ra = $ra;
     }

}


?>