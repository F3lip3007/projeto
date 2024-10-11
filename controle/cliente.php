<?php

    $nome_c = $_GET['nome_c'];
    $data_c = $_GET['data_c'];
    $cpf_c = $_GET['cpf_c'];
    $telef_c = $_GET['telef_c'];

    // echo $nomedocliente; 
    // echo "<br>";
    // echo $data_nasc;
    // echo "<br>";
    // echo $cpf;
    // echo "<br>";
    // echo $telefone;
    // echo "<br>";

    // conectar o servidor no banco 
    // em que servidor? qual usuario? qual senha? qual banco?



    // criar um comando SQL que insere esses dados
    require_once "./conexao.php";

    $sql = "INSERT INTO cliente (nome,data_de_nascimento,cpf,telefone) 
    VALUES ('$nome_c','$data_c','$cpf_c','$telef_c')";

    // rodar esse SQL
    mysqli_query($conexao, $sql);

    // vai sozinho pro index
    header("Location: ../public/home.php");
?>
    