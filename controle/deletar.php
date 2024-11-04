<?php
require_once "./conexao.php";

$tabela = $_GET['tabela'];
$campo = $_GET['campo'];
$loc = $_GET['loc'];
// url
$id = $_GET['id'];

// echo $campo;
// echo $loc;
// echo $id ;
// echo $tabela;

// DELECT FROM paciente WHERE idpaciente =2;
$sql = "DELECT FROM $tabela WHERE $campo = $id";


header("Location: ../public/$loc");

    $id = $_GET['id'];
    
    // DELETE FROM paciente WHERE idpaciente = 3;
    $sql = "DELETE FROM $tabela WHERE idcliente = $id;";

    mysqli_query($conexao, $sql);

    header("Location: ../public/$onde.php");
?>