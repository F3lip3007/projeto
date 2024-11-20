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
    <a class = "letra" href="../controle/pesquisarlivro.php" >pesquisar</a>
    <table  class= decoracao>
        <tr>
            <th>id</th>
            <th>genero</th>
            <th>titulo</th>
            <th>disponivel</th>
            <th>idioma</th>
            <th>data de publicação</th>
            <th>autor</th>
            <th>editora</th>
            <th>deletar</th>
        </tr>
        <?php

        require_once "../controle/conexao.php";
        $campo = 'idlivro';
        $tabela= 'livro';
        $loc = 'livrosql.php';
        
        
        $sql = "SELECT * FROM livro";
        $resultados = mysqli_query($conexao, $sql);
        
        $sql = "SELECT 
        livro.idlivro, livro.titulo, livro.genero, livro.idioma, livro.data_de_publicacao, livro.disponivel, 
        editora.nome AS editora_nome, 
        autor.nome AS autor_nome
        FROM livro  
        JOIN editora ON livro.editora_ideditora = editora.ideditora
        JOIN autor ON livro.autor_idautor = autor.idautor";

        $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idlivro'];
            $titulo = $linha['titulo'];
            $genero = $linha['genero'];
            $idioma = $linha['idioma'];
            $data_publicacao = $linha['data_de_publicacao'];
            $disponivel = $linha['disponivel'];
            $editora_nome = $linha['editora_nome']; // Nome da editora
            $autor_nome = $linha['autor_nome']; // Nome do autor

            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$titulo}</td>";
            echo "<td>{$genero}</td>";
            echo "<td>{$idioma}</td>";
            echo "<td>{$data_publicacao}</td>";
            echo "<td>{$disponivel}</td>";
            echo "<td>{$editora_nome}</td>";
            echo "<td>{$autor_nome}</td>";
            echo "<td> <a class = 'letra' href='../controle/deletar.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>Deletar</a><td/>";
            echo "<td> <a class = 'letra' href='./livros.php?id=$id'>Editar</a><td/>";
            echo "</tr>";
        }

        ?>
    </table>


</body>

</html>