<?php
require_once "../controle/verificalogado.php";

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widtV, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <h1> Cadastro do Autor</h1>



    <form action="../controle/autor.php" method="GET">
        <h3>Nome do autor:</h3> <br>
        <input type="text" name="nome"> <br><br>

        <h3>Nacionalidade:</h3><br>
        <input type="text" name="nacionalidade"> <br> <br>

        <h3>Data de nascimento:</h3><br>
        <input type="date" name="data_de_nascimento"> <br> <br>

        <input type="submit" value="Cadastrar">

    </form>


</body>
</head>