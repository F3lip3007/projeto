<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 
if (isset($_GET['idautor'])) {
    $idcliente = $_GET['idautor'];
    $sql = "SELECT * FROM autor WHERE idautor = $idautor";
    $resultado = mysqli_query($conexao , $sql);


    if ($linha = mysqli_fetch_array($resultado)) {
        $nome = $linha['nome'];
        $nacionalidade = $linha['nacionalidade'];
        $data_de_nascimento = $linha['data_de_nascimento'];
        $botao = "Salvar";
    } else {
        $nome = '';
        $nacionalidade = '';
        $data_de_nascimento = '';
        $botao = "Cadastrar";

    }
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
    <h1> Cadastro do Autor</h1>

     <form action="../controle/autor.php?id=<?php echo $id; ?>" method="post"> 
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