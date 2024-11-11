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
<h1>Lista de Empréstimos</h1>

<table class= decoracao >
    <tr>
        <th>id funcionario</th>
        <th>nome</th>
        <th>cpf</th>           
        <th>salario</th>
        <th>data de nascimento </th>
        <th>telefone</th>
        <a href="../controle/pesquisarfuncionario.php"></a>
    </tr>
    <?php
        require_once "../controle/conexao.php";

        
        $sql = "SELECT * FROM funcionario";
        $resultados = mysqli_query($conexao, $sql);


        while ($linha = mysqli_fetch_array($resultados)) {
        $id = $linha['idfuncionario'];
        $nome = $linha['nome'];
        $cpf = $linha['dia_do_emprestimo'];
        $funcionario = $linha['funcionario_idfuncionario'];
        $cliente = $linha["cliente_idcliente"];
        $livro = $linha["livro_idlivro"];



        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$devolucao</td>";
        echo "<td>$dia_do_emprestimo</td>";
        echo "<td>$funcionario</td>";
        echo "<td>$cliente</td>";
        echo "<td>$livro</td>";
        echo "</tr>";
        }
        ?>
          <a href='../controle/pesquisaremprestimo.php'>pesquisar</a>
</body>
</html>
