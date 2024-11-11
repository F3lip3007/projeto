<?php
require_once "../controle/verificalogado.php";

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<h1>Lista de Funcionários</h1>

<table class= decoracao >
    <tr>
        <th>id funcionário</th>
        <th>nome</th>
        <th>cpf</th>           
        <th>salário</th>
        <th>data de nascimento </th>
        <th>telefone</th>
        <th>deletar</th>

    </tr>
    <?php
        require_once "../controle/conexao.php";
        $campo = 'idfuncionario';
        $tabela= 'funcionario';
        $loc = 'funcionariosql.php';
        
        $sql = "SELECT * FROM funcionario";
        $resultados = mysqli_query($conexao, $sql);


        while ($linha = mysqli_fetch_array($resultados)) {
        $id = $linha['idfuncionario'];
        $nome = $linha['nome'];
        $cpf = $linha['cpf'];
        $salario = $linha['salario'];
        $data_de_nascimento = $linha["data_de_nascimento"];
        $telefone = $linha["telefone"];



        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$nome</td>";
        echo "<td>$cpf</td>";
        echo "<td>$salario</td>";
        echo "<td>$data_de_nascimento</td>";
        echo "<td>$telefone</td>";
        echo "<td> <a class = 'letra' href='../controle/deletar.php?id=$id&campo=$campo&tabela=$tabela&loc=$loc'>Deletar</a><td/>";
        echo "</tr>";
        }
        ?>
          <a href='../controle/pesquisarfuncionario.php'>pesquisar</a>
</body>
</html>
