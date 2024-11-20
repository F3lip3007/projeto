<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 
// na hora de testar se nao der certo o id testar com o nome ex:id :somente
if (isset($_GET['idcliente'])) 
    $id = $_GET['idcliente'];
    $sql = "SELECT * FROM cliente WHERE idcliente = $id";
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
else {
    $id = 0;
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
<body>
    

    <div class ="form-container2"></div>
    <div class = "form-box"></div>

    <h1 class ="tituloc"> <?php echo $titilo; ?> </h1>  
       
    <form action="../controle/editarcliente.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->

    <div class = "form-group">
        <h3>Nome do cliente:</h3>
        <input type="text" placeholder="Nome" name="nome" value="<?php echo $nome; ?>"> <br><br>
    


        <h3>Data de nascimento:</h3>
        <input type="date" name="data_de_nascimento" value="<?php echo $data_de_nascimento; ?>"> <br><br>



        <h3>CPF:</h3>
        <input type="text" placeholder="CPF" name="cpf" value="<?php echo $cpf; ?>"><br><br>



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
