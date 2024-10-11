<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empréstimo</title>
    <link rel="stylesheet" href="./css/estilo.css">
  </head>
  <body>
    <h1>Cadastro da Emprestimo</h1>



    <form action="../controle/emprestimo.php" method="get">

      <h3>Data de Devolução:</h3>
      <input type="date" name="Data_Devol"/>

      <h3>Funcionario</h3>
      <select name="funcionario">
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
      <select name="cliente">
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
      <select name="livro">
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

      
      <input type="submit" value="Cadastrar">

    </form>
  </body>
</html>
