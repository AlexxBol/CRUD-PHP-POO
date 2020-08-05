<?php 

require_once "getSet.php";
require_once "../model/alunoDao.php";
$aluno = new Aluno();
$aluno->setIdAluno(15);

$inserir = new AlunoDao();
$inserir->delete($aluno);

header ("location: ../index.php?AlunoDeleteSucesso");
?>