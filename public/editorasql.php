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
    <a href='../controle/pesquisareditora.php'>pesquisar</a>
    <table class= decoracao>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>localidade</th>
            <th>deletar</th>

        </tr>
        <?php
        require_once "../controle/conexao.php";
        $campo = 'ideditora';
        $tabela= 'editora';
        $loc = 'editorasql.php';

        $sql = "SELECT * FROM editora";
        
        $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $ideditora = $linha['ideditora'];
                $nome = $linha['nome'];
                $localidade = $linha['localidade'];

                echo "<tr>";
                echo "<td>$ideditora</td>";
                echo "<td>$nome</td>";
                echo "<td>$localidade</td>";
                echo "<td> <a class = 'letra' href='../controle/deletar.php?id=$ideditora&campo=$campo&tabela=$tabela&loc=$loc'>Deletar</a><td/>";
                echo "<td> <a class = 'letra' href='./editoras.php?idcliente=$ideditora'>Editar</a><td/>";
                echo "</tr>";
            }
            
            ?>
    </table>    
  
</body>
</html>