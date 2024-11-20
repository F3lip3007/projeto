<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; // Conexão com o banco de dados

// Verifica se existe um ID passado pela URL
if (isset($_GET['idcliente'])) {
    $id = $_GET['idcliente'];
    $sql = "SELECT * FROM editora WHERE ideditora = $id";
    $resultado = mysqli_query($conexao, $sql);

    // Se encontrou o cliente, preenche as variáveis com os dados
    if ($linha = mysqli_fetch_array($resultado)) {
        $nome_editora = $linha['nome'];
        $localidade_editora = $linha['localidade'];
        $botao = "Salvar";
        $titilo="Editar Editora";
    } else {
        // Caso o ID não seja encontrado, define valores vazios
        $nome_editora = '';
        $localidade_editora= '';
        $botao = "Cadastrar";
        $titilo="Cadastro Editora";
    }
} else {
    // Se não existir ID, define como novo cadastro
    $id = 0;
    $nome_editora = '';
    $localidade_editora= '';
    $botao = "Cadastrar";
    $titilo="Cadastro Editora";
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
    <h1> <?php echo $titilo; ?></h1>

<div class = "reto">

<form action="../controle/editareditora.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->

        <h3>Nome da editora:</h3> <br>
        <input t9pe="text" placeholder="Nome" name="nome_editora"
        value="<?php echo $nome_editora; ?>"> <br><br>

        <h3>Localidade da empresa:</h3><br>
        <input type="text" placeholder="Localidade da empresa"name="localidade_editora"
        value="<?php echo $localidade_editora; ?>" ><br> <br>

        <input type="submit" value="<?php echo $botao; ?>" >
    </form>

</div>

</body>
</html>