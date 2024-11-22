<?php
require_once "../controle/conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$nacionalidade = $_POST['nacionalidade'];
$data_de_nascimento = $_POST['data_de_nascimento'];


if ($id == 0) {
        $sql = "INSERT INTO autor (nome,data_de_nascimento,nacionalidade) 
        VALUES ('$nome','$data_de_nascimento','$nacionalidade')";
} 
else {
        $sql = "UPDATE autor SET nome = '$nome', data_de_nascimento = '$data_de_nascimento', nacionalidade ='$nacionalidade' WHERE idautor= $id";

}
// rodar esse SQL
mysqli_query($conexao, $sql);
// vai sozinho pro index
header("Location: ../public/autorsql.php");
