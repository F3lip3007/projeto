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
    <table class= decoracao>
        <tr>
            <th>idautor</th>
            <th>nome</th>
            <th>nacionalidade</th>
            <th>data_de_nascimento</th>
        </tr>
        <?php

        require_once "../controle/conexao.php";

        $sql = "SELECT * FROM autor";

        $resultados = mysqli_query($conexao,$sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha ['idautor'];
            $nome = $linha ['nome'];
            $nacionalidade = $linha ['nacionalidade'];
            $nascimento = $linha ['data_de_nascimento'];    

            if ($id == $idautor) {
                $selecionado = 'selected';
            } else {
                $selecionado = '';
            }

            echo "<option value='$id' $selecionado>$nome</option>";



            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$nacionalidade</td>";
            echo "<td>$nascimento</td>";
            echo "</tr>";


        }
        ?>
    


</body>
</html>