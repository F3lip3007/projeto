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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/table-style.css">

    <head>

    <body>
        <h1>Lista de Editoras</h1>
        <a href='../controle/pesquisareditora.php'>pesquisar</a>
        <table class=decoracao>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>localidade</th>
                <th colspan="2">deletar</th>

            </tr>
            <?php
            require_once "../controle/conexao.php";
            $campo = 'ideditora';
            $tabela = 'editora';
            $loc = 'editorasql.php';

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
                echo "<td><a class='letra editora' href='../controle/deletar.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>
                    <i class='fas fa-trash lixo'></i> Deletar
                    </a></td>";

                echo "<td><a class='letra editora-editar' href='./editoras.php?id=$id'>
                        <i class='fas fa-edit editar'></i> Editar
                        </a></td>";

                echo "</tr>";
            }

            ?>
        </table>

    </body>

</html>