<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM autor WHERE idautor = $id";
    $resultado = mysqli_query($conexao , $sql);


    if ($linha = mysqli_fetch_array($resultado)) {
        $nome = $linha['nome'];
        $nacionalidade = $linha['nacionalidade'];
        $data_de_nascimento = $linha['data_de_nascimento'];
        $titilo="Editar Autor";
        $botao = "Salvar";
    } else {
        $nome = '';
        $nacionalidade = '';
        $data_de_nascimento = '';
        $titilo="Cadastro Autor";
        $botao = "Cadastrar";

    }
}else {
    $id = 0;
    $nome = '';
    $nacionalidade='';
    $data_de_nascimento = '';
    $botao = "Cadastrar";
    $titilo="Cadastro Autor";
    echo'cuu';
}

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widtV, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <h1> <?php echo($titilo);?></h1>

     <form action="../controle/editarautor.php?id=<?php echo $id; ?>" method="post"> 
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->
        <h3>Nome do autor:</h3> <br>
        <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>"> <br><br>

        <h3>Nacionalidade:</h3><br>
        <input type="text" name="nacionalidade" class="form-control" value="<?php echo $nacionalidade; ?>"> <br> <br>

        <h3>Data de nascimento:</h3><br>
        <input type="date" name="data_de_nascimento" class="form-control" value="<?php echo $data_de_nascimento; ?>"> <br> <br>

        <input type="submit" value="<?php echo $botao; ?>" class="btn btn-primary">

    </form>

</body>
</head>