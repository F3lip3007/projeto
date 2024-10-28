<?php
require_once "./conexao.php";

$tabela = $_GET['$tabela'];
$campo = $_GET['campo'];
$loc = $_GET['loc'];
// url
$id = $_GET['id'];

echo'$campo';
echo'$loc';
echo'$id ';
echo'$tabela';

// DELECT FROM paciente WHERE idpaciente =2;
$sql = "DELECT FROM  $tabela WHERE $campo = $id";

mysqli_query($conexao, $sql);

header("Location: ../public/$loc");
?>