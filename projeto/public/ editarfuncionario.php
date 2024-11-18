<?php
// Conexão com o banco
include('conexao.php');

// Verificar se o ID do funcionário foi passado pela URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Buscar os dados do funcionário
    $sql = "SELECT * FROM funcionarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $funcionario = $result->fetch_assoc();
    } else {
        echo "Funcionário não encontrado!";
        exit;
    }
} else {
    echo "ID não fornecido!";
    exit;
}
?>


<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Funcionário</title>
</head>
<body>
    <h1>Editar Funcionário</h1>
    <form action="atualizar_funcionario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $funcionario['nome']; ?>" required><br><br>
        
        <label for="cpf">CPF:</label>
        <input type="cpf" name="cpf" id="cpf" value="<?php echo $funcionario['cpf']; ?>" required><br><br>
        
        <label for="salario">Salário:</label>
        <input type="text" name="salario" id="salario" value="<?php echo $funcionario['salario']; ?>" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $funcionario['telefone']; ?>" required><br><br>

        <label for="salario">Salário:</label>
        <input type="text" name="data_de_nascimento" id="data_de_nascimento" value="<?php echo $funcionario['data_de_nascimento']; ?>" required><br><br>

        
        
        <input type="submit" value="Atualizar">
    </form> -->
<!-- </body>
</html> -->
