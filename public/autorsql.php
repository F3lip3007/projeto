<?php
require_once "../controle/verificalogado.php";

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/table-style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
            <th >editar</th>
            <th >Pesquisar</th>
    
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
            echo "<td> 
            <a class='deletar' href='../controle/deletar.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'> 
            <i class='fas fa-trash'></i>
            </a>
            </td>";
            echo "<td> 
            <a class='editar' href='./autor.php?id=$id'> 
            <i class='fas fa-edit'></i>
            </a>
            </td>";
            echo "<td>  
            <a class='lupa' href='../controle/pesquisarautor.php'>
            <i class='fas fa-search'></i>
            </a>
            </td>";
            
            echo "</tr>";

        }
        ?>
</body>
</html>