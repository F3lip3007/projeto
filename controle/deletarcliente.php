<?php
require_once "./conexao.php";

$id = $_GET['id'];

// DELECT FROM paciente WHERE idpaciente =2;
$sql = "DELECT FROM paciente WHERE idpaciente = $id";

mysqli_query($conexao, $slq);

header("Location: ../public/clientesql.php");
?>