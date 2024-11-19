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

    
    <form action="../controle/funcionario.php" method="get">
        <h3>Nome do funcionário:</h3><br>
        <input type="text" placeholder="Nome" name="nome_f"> <br><br>

        <h3>Data de Nascimento:</h3><br>
        <input type="date" name="data_nf"> <br> <br>

        <h3>CPF:</h3><br>
        <input type="text" placeholder="CPF"name="cpf_f" ><br> <br>

        <h3>Salário: </h3> <br>
        <input type="text" placeholder="Salário"name="salario"><br><br>

        <h3>Telefone:</h3><br>
        <input type="text" placeholder="Telefone"name="tele_f" ><br> <br>
    
        <input type="submit" value="Cadastrar">
    </form>

</body>

</html>