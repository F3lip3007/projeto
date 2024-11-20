<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 

if (isset($_GET['idempresctomo'])) 
    $id = $_GET['idempresctomo'];
    $sql = "SELECT * FROM empresctomo WHERE idempresctomo = $id";
    $resultado = mysqli_query($conexao , $sql);


    if ($linha = mysqli_fetch_array($resultado)) {
      $id = $linha['idemprestimo'];
      $devolucao = $linha['devolucao'];
      $funcionario = $linha['funcionario_nome']; 
      $cliente = $linha["cliente_nome"]; 
      $livro = $linha["livro_titulo"];
        $botao = "Salvar";
        $titilo="Editar Cliente";
    } else {
        $devolucao = '';
        $funcionario = '';
        $cliente='';
        $livro='';
        $botao = "Cadastrar";
        $titilo="Cadastro Cliente";
    }
else {
    $id = 0;
    $id = '';
    $devolucao = '';
    $funcionario = '';
    $cliente='';
    $livro='';
    $botao = "Cadastrar";
    $titilo="Cadastro Cliente";
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titilo; ?></title>
    <link rel="stylesheet" href="./css/estilo.css">
  </head>
  <body>
  <h1 class ="tituloc"> <?php echo $titilo; ?> </h1>  



    <form action="../controle/emprestimo.php" method="get">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->


      <h3>Data de Devolução:</h3>
      <input type="date" name="Data_Devol"value="<?php echo $devolucao; ?>"/>

      <h3>Funcionario</h3>
      <select name="funcionario"value="<?php echo $funcionario; ?>">
        <?php
            require_once "../controle/conexao.php";

            $sql = "SELECT idfuncionario, nome FROM funcionario";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idfuncionario'];
                $nome = $linha['nome'];


                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select><br> <br>


      <h3>cliente</h3>
      <select name="cliente"value="<?php echo $cliente; ?>">
        <?php

            $sql = "SELECT idcliente, nome FROM cliente";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idcliente'];
                $nome = $linha['nome'];


                echo "<option value='$id'>$nome</option>";
            }
            ?>
        </select><br> <br>

        
      <h3>Livro</h3>
      <select name="livro"value="<?php echo $livro; ?>">
        <?php

            $sql = "SELECT idlivro, titulo FROM livro";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['idlivro'];
                $nome = $linha['titulo'];


                echo "<option value='$id'>$nome</option>";
            }
            ?>
      </select><br> <br>

    <br><br>

      
    <input type="submit" class ="btn-registrer" value="<?php echo $botao; ?>">

    </form>
  </body>
</html>
