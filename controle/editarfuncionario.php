<?php 
// se conectar ao banco
// qual o servidor? qual usuario? qual senha? qual banco
require_once "../controle/conexao.php";
// na hora de testar se nao der certo o id testar com o nome ex:idfuncionario
$id = $_POST['id'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$nome = $_POST['nome'];
$salario = $_POST['salario'];
$data_de_nascimento = $_POST['data_de_nascimento'];

if ($id == 0) {
    // criar um comando SQL que grava no banco
    $sql = "INSERT INTO funcionario (cpf, telefone, nome, data_de_nascimento,salario )
     VALUES ('$cpf', '$telefone', '$nome', '$data_de_nascimento','$salario')";
} else {
    $sql = "UPDATE funcionario SET cpf = '$cpf', telefone = '$telefone', nome = '$nome', data_de_nascimento = '$data_de_nascimento' , salario ='$salario' WHERE idfuncionario = '$id'";
}

mysqli_query($conexao, $sql);
// Mandar executar o comando

header("Location: ../public/funcionariosql.php");

?>