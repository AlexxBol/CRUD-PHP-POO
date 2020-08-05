<?php 
require_once "model/alunoDao.php";

$buscar = new AlunoDao();
$buscar->select();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-POO-MVC</title>
</head>
<body>
    <form action="view/pageCreateAluno.php">
    <button type="submit" name="btnCad">Cadastrar</button>
    </form>
    
    <form action="view/pageEditAluno.php">
     <button type="submit" name="btnEdit">Editar</button>
    </form>
    <form action="controller/deleteAluno.php">
     <button type="submit" name="btnDelete">Excluir</button>
    </form>

</body>
</html>

