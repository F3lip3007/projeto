<?php
$nome_editora = $_GET['nome_editora'];
$localidade_editora = $_GET['loc_ed'];

require_once "./conexao.php";

$sql = "INSERT INTO editora (nome,localidade) 
VALUES ('$nome_ed','$loc_ed')";

mysqli_query($conexao, $sql);

header("Location: ../public/home.php");
?>