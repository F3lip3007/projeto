<?php
require_once "../controle/verificalogado.php";

?>  
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <h1> Cadastro da Editora</h1>

<div class = "reto">

    <form action="../controle/editora.php" method="get">
        <h3>Nome da editora:</h3> <br>
        <input t9pe="text" placeholder="Nome" name="nome_ed"> <br><br>

        <h3>Localidade da empresa:</h3><br>
        <input type="text" placeholder="Localidade da empresa"name="loc_ed" ><br> <br>

        <input type="submit" value="Cadastrar">
    </form>

</div>

</body>
</html>