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
<head>
<body>
    <h1>Lista autor</h1>
    <a class = "letra" href="../controle/pesquisarautor.php" >pesquisar</a>
    <table class= decoracao>
        <tr>
            <th>idautor</th>
            <th>nome</th>
            <th>nacionalidade</th>
            <th>data_de_nascimento</th>
            <th>deletar</th>
            <th>editar</th>
    
        </tr>
        <?php

        require_once "../controle/conexao.php";
        $campo = 'idautor';
        $tabela= 'autor';
        $loc = 'autorsql.php';


        $sql = "SELECT * FROM autor";

        $resultados = mysqli_query($conexao,$sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            
            $id = $linha ['idautor'];
            $nome = $linha ['nome'];
            $nacionalidade = $linha ['nacionalidade'];
            $nascimento = $linha ['data_de_nascimento'];    

            if ($id == $id) {
                $selecionado = 'selected';
            } else {
                $selecionado = '';
            }



            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$nacionalidade</td>";
            echo "<td>$nascimento</td>";
            echo "<td> <a class = 'letra' href='../controle/deletar.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>deletar</a><td/>";
            echo "</tr>";

        }
        ?>

</body>
</html>