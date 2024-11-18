<?php
require_once "../controle/verificalogado.php";

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