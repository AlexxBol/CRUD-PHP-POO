<?php 
require_once "conexao.php";

class AlunoDao{

     public function insert($p){
         $sql = 'INSERT INTO aluno (nome, serie, ra) VALUES(?, ?,?)';
         $stmt =  Conexao::getConn()->prepare($sql);
         $stmt->bindValue(1, $p->getNome());
         $stmt->bindValue(2, $p->getSerie());
         $stmt->bindValue(3, $p->getRa());
         $stmt->execute();

         echo ucwords("aluno cadastrado com sucesso!!!!<br>");
     }

    public function select(){

        $sql = 'SELECT * FROM aluno ORDER BY nome';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        $dado = $stmt->fetchAll (PDO::FETCH_ASSOC);

        foreach($dado as $row){
            foreach($row as $key => $value){

                echo "<strong>" . $key . ":</strong>". $value . "<br>";
            }

                echo "==========================<br>";
        }
    }

    public function update($p){
        $sql = 'UPDATE aluno SET nome = ?, serie = ?, ra = ? WHERE idAluno = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getSerie());
        $stmt->bindValue(3, $p->getRa());
        $stmt->bindValue(4, $p->getIdAluno());
        $stmt->execute();

        echo ucwords("dados atualizado com sucesso!!!<br>");
    }

    public function delete($p){
        $sql = 'DELETE FROM aluno WHERE idAluno = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getIdAluno());
        $stmt->execute();

        echo ucwords("dados excluido com sucesso!!!<br>");

    }

}

?>