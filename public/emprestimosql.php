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
        <th>id empréstimo</th>
        <th>devolução</th>
        <th>dia do empréstimo</th>           
        <th>funcionario id funcionario</th>
        <th>cliente id cliente </th>
        <th>livro id livro</th>
        <a href="../controle/pesquisaremprestimo.php"></a>
    </tr>
    <?php
        require_once "../controle/conexao.php";

        
        $sql = "SELECT * FROM emprestimo";
        $resultados = mysqli_query($conexao, $sql);


        while ($linha = mysqli_fetch_array($resultados)) {
        $id = $linha['idemprestimo'];
        $devolucao = $linha['devolucao'];
        $dia_do_emprestimo = $linha['dia_do_emprestimo'];
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