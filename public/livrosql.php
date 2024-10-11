<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <h1>Lista de Livros</h1>

    <table>
        <tr>
            <td>genero</td>
            <td>titulo</td>
            <td>disponivel</td>
            <td>idioma</td>
            <td>data de publicação</td>
            <td>idioma</td>
            <td>autor</td>
            <td>editora</td>
        </tr>
        <?php

        require_once "../controle/conexao.php";
        
        $sql = "SELECT * FROM livro";
        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idlivro'];
            $genero = $linha['genero'];
            $titulo = $linha['titulo'];
            $disponivel = $linha['disponivel'];
            $idioma = $linha['idioma'];
            $data_publi = $linha['data_de_publicacao'];
            $idautor = $linha['autor_idautor'];
            $ideditora = $linha['editora_ideditora'];


            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$genero</td>";
            echo "<td>$titulo</td>";
            echo "<td>$disponivel</td>";
            echo "<td>$idioma</td>";
            echo "<td>$data_publi</td>";
            echo "<td>$idautor</td>";
            echo "<td>$ideditora</td>";
            echo "</tr>";
        }

        ?>
    </table>


</body>

</html>