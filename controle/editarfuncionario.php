<?php 
// se conectar ao banco
// qual o servidor? qual usuario? qual senha? qual banco
require_once "./conexao.php";
// na hora de testar se nao der certo o id testar com o nome ex:idfuncionario
$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$salario = $_POST['salario'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$telefone = $_POST['telefone'];

if ($id == 0) {
    // criar um comando SQL que grava no banco
    $sql = "INSERT INTO funcionario (cpf, telefone, nome, data_de_nascimento,salario )
     VALUES ('$cpf', '$telefone', '$nome', '$data_de_nascimento','$salario')";
} else {
    $sql = "UPDATE funcionario SET nome = '$nome', cpf = '$cpf', salario ='$salario', data_de_nascimento = '$data_de_nascimento', telefone = '$telefone' WHERE idfuncionario = '$id'";
}

mysqli_query($conexao, $sql);
// Mandar executar o comando

header("Location: ../public/funcionariosql.php");

?>