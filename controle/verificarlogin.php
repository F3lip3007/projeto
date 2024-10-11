<?php
require_once "./conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

$resultados = mysqli_query($conexao, $sql);


if (mysqli_num_rows($resultados) == 0) {
    // usuário não cadastrado
    // ou informou dados errados.
    header("Location: ../public/index.php");
} else {
    // pode acessar.
    
    session_start();
    $_SESSION['logado'] = 1;

    header("Location: ../public/home.php");
}
