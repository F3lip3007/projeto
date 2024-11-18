<?php
require_once "./conexao.php";
$idcliente = $_POST['idcliente'];
$nome_editora = $_GET['nome_ed'];
$loc_editora = $_GET[''];
// conectar o servidor no banco 
// em que servidor? qual usuario? qual senha? qual banco?



// criar um comando SQL que insere esses dados
if ($idcliente == 0) {
    $sql = "INSERT INTO cliente (nome,data_de_nascimento,cpf,telefone) 
    VALUES ('$nome','$data_de_nascimento','$cpf','$telefone')";
} else {
    $sql = "UPDATE cliente SET nome = '$nome', data_de_nascimento = '$data_de_nascimento', cpf ='$cpf',telefone ='$telefone' WHERE idcliente = $idcliente";
}
// rodar esse SQL
mysqli_query($conexao, $sql);

// vai sozinho pro index
header("Location: ../public/clientesql.php");
