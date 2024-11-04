<?php
require_once "../controle/verificalogado.php";

?>  
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

    
    <form action="../controle/funcionario.php" method="get">
        <h3>Nome do funcionário: 

        </h3><br>
        <input type="text" placeholder="Nome" name="nome_f"> <br><br>

        <h3>Data de nascimento:</h3><br>
        <input type="date" name="data_nf"> <br> <br>

        <h3>CPF:</h3><br>
        <input type="text" placeholder="CPF"name="cpf_f" ><br> <br>

        <h3>salario: </h3> <br>nascimento
        <input type="text"name="salario"><br><br>


        <h3>Telefone:</h3><br>
        <input type="text" placeholder="Telefone"name="tele_f" ><br> <br>
    
        <input type="submit" value="Cadastrar">
    </form>

</body>


<body>

        <h1>Cadastro Funcionário<h1>

        <form action="../controle/salvarfuncionario.php?id=<?php echo $id; ?>" method="post">
        Nome:
        <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
        CPF:
        <input type="text" name="cpf" class="form-control" value="<?php echo $cpf; ?>">
        Telefone:
        <input type="text" name="telefone" class="form-control" value="<?php echo $telefone; ?>">
        Data de nascimento:
        <input type="text" name="data" class="form-control" value="<?php echo $data; ?>">
        Salário:
        <input type="text" name="salario" class="form-control" value="<?php echo $salario; ?>">
        






</body>
</html>