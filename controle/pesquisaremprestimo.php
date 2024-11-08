<?php
require_once "../controle/verificalogado.php";

if (isset($_GET['valor'])) {
    $valor = $_GET['valor'];
} else {
    $valor = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form> action="pesquisar.php" method="get">
        Campo: <br>
        <input type= "text" name="valor" value="<?php echo $valor; ?>"> <br><br>

        <input type="submit" value="Enviar">
    </form> <br> 

    <?php 
    
    if (isset($GET['valor'])) {
        $valor = $_GET['valor'];

        require_once "../controle/conexao.php";
        $sql = "SELECT * FROM paciente WHERE nome LIKE '%$valor%'";
        $resultados = mysqli_query($conexao, $sql);
    
        if (mysqli_num_rows($resultados) == 0) {
            echo "Não foram encontrados resultados.";

        } else {
            echo "<table border='1'";
            echo "<tr";
            echo "<td>ID</td>";
            echo "<td>devolucao</td>";
            echo "<td>dia_do_emprestimo</td>";
            echo "<td>funcionario_idfuncionario</td>";
            echo "<td>cliente_idcliente</td>";
            echo "<td>livro_idlivro</td>";

            while ($linha = mysqli_fetch_array($resultados)){
               $id = $linha['idemprestimo'];
               $devolucao = $linha ['nome'];
               $dia_do_emprestimo= $linha ['dia_do_emprestimo'];
               $funcionario_idfuncionario = $linha['funcionario_idfuncionario'];
               $cliente_idcliente = $linha['cliente_idcliente'];
               $livro_idlivro = $linha['livro_idlivro'];
               echo "<tr";
               echo "<td>ID</td>";
               echo "<td>devolucao</td>";
               echo "<td>dia_do_emprestimo</td>";
               echo "<td>funcionario_idfuncionario</td>";
               echo "<td>cliente_idcliente</td>";
               echo "<td>livro_idlivro</td>";
            }
        }
    }
    
    else {
        echo "Procure um nome";
    }
            
  
    ?>

</body>
</html>