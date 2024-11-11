<?php
require_once "../controle/verificalogado.php";

if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = '';
}

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
    <h1>Lista de Editoras</h1>

    <table class= decoracao>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>localidade</th>
        </tr>
        <?php
        require_once "../controle/conexao.php";

        $sql = "SELECT * FROM editora";
        
        $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['ideditora'];
                $nome = $linha['nome'];
                $localidade = $linha['localidade'];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nome</td>";
                echo "<td>$localidade</td>";
                echo "<td> <a class = 'letra' href='../controle/deletar.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>Deletar</a><td/>";
                echo "<td> <a class = 'letra' href='../controle/editareditora.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>editar</a><td/>";
                echo "</tr>";
            }
            
            ?>
    </table>    
    <a href='../controle/pesquisarcliente.php'>pesquisar</a>
</body>
</html>