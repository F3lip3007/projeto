<?php
require_once "./conexao.php";

$tabela = $_GET['tabela'];
$campo = $_GET['campo'];
$loc = $_GET['loc'];
$id = $_GET['id'];
// echo "campo";
// echo '<br>';
// echo $campo;
// echo '<br>';
// echo "campo";
// echo '<br>';
// echo $loc;
// echo '<br>';
// echo "campo";
// echo '<br>';
// echo $id ;
// echo '<br>';
// echo "campo";
// echo '<br>';
// echo $tabela;

// DELECT FROM paciente WHERE idpaciente =2;
$sql = "DELETE FROM $tabela WHERE $campo = $id";
mysqli_query($conexao, $sql);



$id = $_GET['id'];

// // DELETE FROM paciente WHERE idpaciente = 3;
// $sql = "DELETE FROM $tabela WHERE idcliente = $id;";


// header("Location: ../public/$onde.php");
header("Location: ../public/$loc");
?>