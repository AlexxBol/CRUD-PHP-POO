<?php 

require_once "getSet.php";
require_once "../model/alunoDao.php";

$aluno = new Aluno();
$aluno->setNome("Moser");
$aluno->setSerie("8º Serie");
$aluno->setRa("1263");
$aluno->setIdAluno(1);

$inserir = new AlunoDao();
$inserir->update($aluno);

header ("location: ../index.php?AlunoEditSucesso");
?>