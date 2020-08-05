<?php 
require_once "getSet.php";
require_once "../model/alunoDao.php";

$aluno = new Aluno();
$aluno->setNome("Motorola");
$aluno->setSerie("5º Serie");
$aluno->setRa("1111");

$inserir = new AlunoDao();
$inserir->insert($aluno);

header ("location: ../index.php?AlunoCadSucesso");

?>