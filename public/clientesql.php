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
    <table class= decoracao>
       <tr>
            <th>idcliente</th>
            <th>cpf</th>
            <th>telefone</th>
            <th>nome</th>
            <th>data_de_nascimento</th>
        </tr>

        <?php
            require_once "../controle/conexao.php";
            $campo = 'idcliente';
            $tabela= 'cliente';
            $loc = 'clientesql.php';



            
            $sql = "SELECT * FROM cliente";
            // $tabela=$_GET['clintes'];
            // $onde=$_GET['clinte'];


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
                echo "<td> <a class = 'letra' href='../controle/deletar.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>Deletar</a><td/>";
                echo "<td> <a class = 'letra' href='../controle/editarcliente.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>Editar</a><td/>";
                
                echo "</tr>";
            }
            
        ?>
       
    </table>  
</body>
</html>