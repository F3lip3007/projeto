<?php
require_once "../controle/verificalogado.php";

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <h1>Lista de clientes</h1>
    <table>
       <tr>
            <td>idcliente</td>
            <td>cpf</td>
            <td>telefone</td>
            <td>nome</td>
            <td>data_de_nascimento</td>
        </tr>

        <?php

  
            require_once "../controle/conexao.php";

            
            $sql = "SELECT * FROM cliente";
            $tabe=$_GET['clintesql'];
            $onde=$_GET['clinte'];


            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha ['idcliente'];
                $cpf = $linha ['cpf'];
                $telefone = $linha ['telefone'];
                $nome = $linha ['nome'];
                $nascimento = $linha ['data_de_nascimento'];

                

                
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$cpf</td>";
                echo "<td>$nome</td>";
                echo "<td>$telefone</td>";
                echo "<td>$nascimento</td>";
                echo "<td><a href='../controle/deletar.php?id=$id'>deletar</td>";
                echo "</tr>";



                
            }
        ?>
</body>
</html>