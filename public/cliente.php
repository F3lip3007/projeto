<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; // Conexão com o banco de dados

// Verifica se existe um ID passado pela URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE idcliente = $id";
    $resultado = mysqli_query($conexao, $sql);

    // Se encontrou o cliente, preenche as variáveis com os dados
    if ($linha = mysqli_fetch_array($resultado)) {
        $nome = $linha['nome'];
        $cpf = $linha['cpf'];
        $telefone = $linha['telefone'];
        $data_de_nascimento = $linha['data_de_nascimento'];
        $botao = "Salvar";
    } else {
        // Caso o ID não seja encontrado, define valores vazios
        $nome = '';
        $cpf = '';
        $telefone = '';
        $data_de_nascimento = '';
        $botao = "Cadastrar";
    }
} else {
    // Se não existir ID, define como novo cadastro
    $id = 0;
    $nome = '';
    $cpf = '';
    $telefone = '';
    $data_de_nascimento = '';
    $botao = "Cadastrar";
}
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <h1>Cadastro do Cliente</h1>

    <form action="../controle/cliente.php" method="POST">
        <input type="hidden" name="idcliente" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->

        <h3>Nome do cliente:</h3>
        <input type="text" placeholder="Nome" name="nome" value="<?php echo $nome; ?>"> <br><br>

        <h3>Data de nascimento:</h3>
        <input type="date" name="data_de_nascimento" value="<?php echo $data_de_nascimento; ?>"> <br><br>

        <h3>CPF:</h3>
        <input type="text" placeholder="CPF" name="cpf" value="<?php echo $cpf; ?>"><br><br>

        <h3>Telefone:</h3>
        <input type="text" placeholder="Telefone" name="telefone" value="<?php echo $telefone; ?>"><br><br>

        <input type="submit" value="<?php echo $botao; ?>">
    </form>
</body>

</html>
