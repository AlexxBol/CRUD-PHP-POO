<?php 
require_once "aluno.php";
require_once "alunoDao.php";

$aluno = new Aluno();
$aluno->setNome("Henrique");
$aluno->setSerie("9º Serie");
$aluno->setRa("1258");
$aluno->setIdAluno(8);

$inserir = new AlunoDao();
$inserir->insert($aluno);

$atualizar = new AlunoDao();
$atualizar->update($aluno);

$excluir = new AlunoDao();
$excluir->delete($aluno);

$buscar = new AlunoDao();
$buscar->select();

?>