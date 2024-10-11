
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <h1> Cadastro do Livro </h1>




    <form action="../controle/livros.php" method="get">
       
        <h3>Gênero:<br>
        <input type="text"placeholder="Gênero" name="genero"> <br> <br>

        <h3>Título:<br>
        <input type="text"placeholder="Título" name="titulo"> <br> <br>

        <h3>Idioma:</h3><br>
        <input type="text"placeholder="Idioma" name="idioma"> <br> <br>

        <h3>Data de publicação:</h3><br>
        <input type="date"placeholder="Data_publi" name="data_pu"> <br> <br>
       
        <h3>Editora:</h3><br>
        <select name="editora">
        <?php
        require_once "../controle/conexao.php";

            $sql = "SELECT ideditora, nome FROM editora";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['ideditora'];
                $nome = $linha['nome'];


                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select><br> <br>

        <h3>Autor:</h3><br>
        <select name="autor">
        <?php

            $sql = "SELECT idautor, nome FROM autor";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idautor'];
                $nome = $linha['nome'];


                echo "<option value='$id'>$nome</option>";
                echo "<br>";
            }
            ?>
        </select><br> <br>

      
        <h3>disponivel: </h3>
        <input type='radio' name='disponivel' value="1">sim<br><br>
        <input type='radio' name='disponivel' value="0">não<br><br>
            
        <input type="submit" value="Cadastrar">
    </form>


</body>
</html>