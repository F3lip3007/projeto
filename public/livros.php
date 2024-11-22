<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 
// na hora de testar se nao der certo o id testar com o nome ex:id :somente
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM livro WHERE idlivro = $id";
    $resultado = mysqli_query($conexao , $sql);


    if ($linha = mysqli_fetch_array($resultado)) {
        $titulo = $linha['titulo'];
        $genero = $linha['genero'];
        $idioma = $linha['idioma'];
        $data_de_publicacao = $linha['data_de_publicacao'];
        $disponivel = $linha['disponivel'];
        $editora = $linha['editora_ideditora']; // Nome da editora
        $autor = $linha['autor_idautor']; // Nome do autor
        $botao = "Salvar";
        $titilo="Editar livro";
    } else {
        $titulo = '';
        $genero = '';
        $idioma = '';
        $data_de_publicacao = '';
        $disponivel ='';
        $editora = '';
        $autor ='';
        $botao = "Cadastrar";
        $titilo="Cadastro livro";
    }
}else {
    $id = 0;
    $titulo = '';
    $genero = '';
    $idioma = '';
    $data_de_publicacao = '';
    $disponivel ='';
    $editora = '';
    $autor ='';
    $botao = "Cadastrar";
    $titilo="Cadastro livro";
}
?>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <h1> Cadastro do Livro </h1>




    <form action="../controle/editarlivros.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->

       
        <h3>Gênero:<br>
        <input type="text"placeholder="Gênero" name="genero" value="<?php echo $genero; ?>"> <br> <br>

        <h3>Título:<br>
        <input type="text"placeholder="Título" name="titulo" value="<?php echo $titulo; ?>"> <br> <br>

        <h3>Idioma:</h3><br>
        <input type="text"placeholder="Idioma" name="idioma" value="<?php echo $idioma; ?>"> <br> <br>

        <h3>Data de publicação:</h3><br>
        <input type="date"placeholder="data_de_publicacao" name="data_de_publicacao" value="<?php echo $data_de_publicacao; ?>"> <br> <br>
       
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
        <?php
            if ($disponivel== 0) {
                echo "<input type='radio' name='disponivel value='1' checked>sim<br><br>";
                echo "<input type='radio' name='disponivel' value='0'>não<br><br>";
              }
              else if ($disponivel == 1) {
                echo "<input type='radio' name='disponivel value='1'>sim<br><br>";
                echo "<input type='radio' name='disponivel' value='0' checked>não<br><br>";
              }
              else {
                echo "<input type='radio' name='disponivel value='1'>sim<br><br>";
                echo "<input type='radio' name='disponivel' value='0'>não<br><br>";
              }
        ?>
        <!-- <input type='radio' name='disponivel' value="1">sim<br><br>
        <input type='radio' name='disponivel' value="0">não<br><br> -->

     
            
        <input type="submit" class ="btn-registrer" value="<?php echo $botao; ?>">
    </form>


</body>
</html>