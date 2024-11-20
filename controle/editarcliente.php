<?php
require_once "./conexao.php";
// na hora de testar se nao der certo o id testar com o nome ex:idfuncionario
$id = $_POST['id'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
// $nome_editora = $_GET['nome_ed'];
// $loc_editora = $_GET[''];
// conectar o servidor no banco 
// em que servidor? qual usuario? qual senha? qual banco?



// criar um comando SQL que insere esses dados
if ($id == 0) {
$sql = "INSERT INTO cliente (nome,data_de_nascimento,cpf,telefone) 
    VALUES ('$nome','$data_de_nascimento','$cpf','$telefone')";
} else {
    $sql = "UPDATE cliente SET nome = '$nome', data_de_nascimento = '$data_de_nascimento', cpf ='$cpf',telefone ='$telefone' WHERE idcliente = $id";
}
// rodar esse SQL
mysqli_query($conexao, $sql);

// vai sozinho pro index
header("Location: ../public/clientesql.php");
