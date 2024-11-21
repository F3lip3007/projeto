<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 
// na hora de testar se nao der certo o id testar com o nome ex:id :somente
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM funcionario WHERE idfuncionario = $id";
    $resultado = mysqli_query($conexao , $sql);


    if ($linha = mysqli_fetch_array($resultado)) {
        $nome = $linha['nome'];
        $cpf = $linha['cpf'];
        $telefone = $linha['telefone'];
        $data_de_nascimento = $linha['data_de_nascimento'];
        $salario= ['salario'];
        $botao = "Salvar";
        $titilo="Editar funcionario";
    } else {

        $nome = '';
        $cpf = '';
        $telefone = '';
        $data_de_nascimento = '';
        $salario= '';
        $botao = "Cadastrar";
        $titilo="Cadastro funcionario";
    }
} else {
    $id = 0;
    $nome = '';
    $cpf = '';
    $telefone = '';
    $data_de_nascimento = '';
    $salario= '';
    $botao = "Cadastrar";
    $titilo="Cadastro funcionario";
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
    <h1 class ="tituloc"> <?php echo $titilo; ?> </h1>  
    
    <form action="../controle/editarfuncionario.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->
    

        <h3>Nome do funcionário:</h3><br>
        <input type="text" placeholder="Nome" name="nome" value="<?php echo $nome; ?>"> <br><br>

        <h3>Data de Nascimento:</h3><br>
        <input type="date" name="data_de_nascimento" value="<?php echo $data_de_nascimento; ?>"> <br> <br>

        <h3>CPF:</h3><br>
        <input type="text" placeholder="CPF"name="cpf" value="<?php echo $cpf; ?>"><br> <br>

        <h3>Salário: </h3> <br>
        <input type="number" placeholder="Salário"name="salario" value="<?php echo $salario; ?>"><br><br>

        <h3>Telefone:</h3><br>
        <input type="text" placeholder="Telefone"name="telefone"value="<?php echo $telefone; ?>" ><br> <br>
    
        <input type="submit" class ="btn-registrer" value="<?php echo $botao; ?>">
    </form>

</body>

</html>