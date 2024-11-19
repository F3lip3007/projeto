<?php
require_once "./conexao.php";
$ideditora = $_POST['ideditora'];
$nome_editora = $_POST['nome_editora'];
$localidade_editora = $_POST['localidade_editora'];


// echo $nome;
// echo "<br>";
// echo $data_de_nascimento;
// echo "<br>";
// echo $cpf;
// echo "<br>";
// echo $telefone;
// echo "<br>";

// conectar o servidor no banco 
// em que servidor? qual usuario? qual senha? qual banco?



// criar um comando SQL que insere esses dados
if ($ideditora== 0) {
    $sql = "INSERT INTO editora(nome,localidade) 
    VALUES ('$nome_editora','$localidade_editora')";
} else {
    $sql = "UPDATE editora SET nome = '$nome_editora',localidade ='$localidade_editora' WHERE ideditora = $ideditora";
}
// rodar esse SQL
mysqli_query($conexao, $sql);

// vai sozinho pro index
header("Location: ../public/home.php");
