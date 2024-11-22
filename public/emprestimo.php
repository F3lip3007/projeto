<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM emprestimo WHERE idemprestimo = $id";
  $resultado = mysqli_query($conexao, $sql);


  if ($linha = mysqli_fetch_array($resultado)) {
    $id = $linha['idemprestimo'];
    $devolucao = $linha['devolucao'];
    $funcionario = $linha['funcionario_idfuncionario'];
    // $dia_do_emprestimo = $linha['dia_do_emprestimo'];  
    $cliente = $linha["cliente_idcliente"];
    $livro = $linha["livro_idlivro"];
    $botao = "Salvar";
    $titilo = "Editar Emprestimo";
  } else {
    $id = 0;
    $devolucao = '';
    $funcionario = '';
    // $dia_do_emprestimo = '';
    $cliente = '';
    $livro = '';
    $botao = "Cadastrar";
    $titilo = "Cadastro Emprestimo";
  }
}
else {
  $id = '';
  $devolucao = '';
  $funcionario = '';
  $dia_do_emprestimo = '';
  $cliente = '';
  $livro = '';
  $botao = "Cadastrar";
  $titilo = "Cadastro Emprestimo";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $titilo; ?></title>
    <link rel="stylesheet" href="./css/form-style.css">
</head>

<body>
  <h1 class="tituloc"> <?php echo $titilo; ?> </h1>



  <form action="../controle/editaremprestimo.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Campo oculto para ID -->


    <h3>Data de Devolução:</h3>
    <input type="date" name="devolucao" value="<?php echo $devolucao; ?>" />

    <h3>Funcionario</h3>
    <select name="funcionario">
      <?php
      require_once "../controle/conexao.php";

      $sql = "SELECT idfuncionario, nome FROM funcionario";

      $resultados = mysqli_query($conexao, $sql);

      while ($linha = mysqli_fetch_array($resultados)) {
        $idfuncionario = $linha['idfuncionario'];
        $nome = $linha['nome'];

        if ($funcionario == $idfuncionario) {
          echo "<option value='$idfuncionario' selected>$nome</option>";
        }
        else {
          echo "<option value='$idfuncionario'>$nome</option>";
        }
      }
      ?>
    </select><br> <br>


    <h3>cliente</h3>
    <select name="cliente">
      <?php

      $sql = "SELECT idcliente, nome FROM cliente";

      $resultados = mysqli_query($conexao, $sql);

      while ($linha = mysqli_fetch_array($resultados)) {
        $idcliente = $linha['idcliente'];
        $nome = $linha['nome'];

        if ($cliente== $idcliente) {
          echo "<option value='$idcliente' selected>$nome</option>";
        }
        else {
          echo "<option value='$idcliente'>$nome</option>";
        }

      }   
      ?>
    </select><br> <br>


    <h3>Livro</h3>
    <select name="livro">
      <?php

      $sql = "SELECT idlivro, titulo FROM livro";

      $resultados = mysqli_query($conexao, $sql);

      while ($linha = mysqli_fetch_array($resultados)) {
        $idlivro = $linha['idlivro'];
        $nome = $linha['titulo'];


        if ($livro== $idlivro) {
          echo "<option value='$idlivro' selected>$nome</option>";
        }
        else {
          echo "<option value='$idlivro'>$nome</option>";
        }

      }   
       
      ?>
    </select><br> <br>

    <br><br>


    <input type="submit" class="btn-registrer" value="<?php echo $botao; ?>">

  </form>
</body>

</html>