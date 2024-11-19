<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 

if (isset($_GET['idcliente'])) {
    $idcliente = $_GET['idcliente'];
    $sql = "SELECT * FROM cliente WHERE idcliente = $idcliente";
    $resultado = mysqli_query($conexao , $sql);


    if ($linha = mysqli_fetch_array($resultado)) {
        $nome = $linha['nome'];
        $cpf = $linha['cpf'];
        $telefone = $linha['telefone'];
        $data_de_nascimento = $linha['data_de_nascimento'];
        $botao = "Salvar";
        $titilo="Editar Cliente";
    } else {

        $nome = '';
        $cpf = '';
        $telefone = '';
        $data_de_nascimento = '';
        $botao = "Cadastrar";
        $titilo="Cadastro Cliente";
    }
} else {
    $idcliente = 0;
    $nome = '';
    $cpf = '';
    $telefone = '';
    $data_de_nascimento = '';
    $botao = "Cadastrar";
    $titilo="Cadastro Cliente";
}
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titilo; ?></title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
    <div class ="form-container2"></div>
    <div class = "form-box"></div>

    <h1 class ="tituloc"> <?php echo $titilo; ?> </h1>  
       
    <form action="../controle/editarcliente.php" method="POST">
        <input type="hidden" name="idcliente" value="<?php echo $idcliente; ?>"> <!-- Campo oculto para ID -->

    <div class = "form-group">
        <h3>Nome do cliente:</h3>
        <input type="text" placeholder="Nome" name="nome" value="<?php echo $nome; ?>"> <br><br>
    </div>

    <div class = "form-group">
        <h3>Data de nascimento:</h3>
        <input type="date" name="data_de_nascimento" value="<?php echo $data_de_nascimento; ?>"> <br><br>
    </div>

    <div class = "form-group">
        <h3>CPF:</h3>
        <input type="text" placeholder="CPF" name="cpf" value="<?php echo $cpf; ?>"><br><br>
    </div>

    <div class = "form-group">
        <h3>Telefone:</h3>
        <input type="text" placeholder="Telefone" name="telefone" value="<?php echo $telefone; ?>"><br><br>
    </div>

        <input type="submit" class ="btn-registrer" value="<?php echo $botao; ?>">
    </form>
</div>

<div class ="form-image">
    <div class = "rocket"></div>
</div>
</body>

</html>
