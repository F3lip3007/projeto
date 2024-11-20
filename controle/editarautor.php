<?php
require_once "./conexao.php";

$nome = $_GET['nome'];
$nacionalidade = $_GET['nacionalidade'];
$data_de_nascimento = $_GET['data_de_nascimento'];


if ($idautor == 0) {
        $sql = "INSERT INTO autor (nome,data_de_nascimento,nacionalidade) 
        VALUES ('$nome','$data_de_nascimento','$nacionalidade')";
} 
else {
        $sql = "UPDATE autor SET nome = '$nome', data_de_nascimento = '$data_de_nascimento', cpf ='$cpf' WHERE idautor= $idautor";
}
// rodar esse SQL
mysqli_query($conexao, $sql);
// vai sozinho pro index
header("Location: ../public/autorsql.php");
