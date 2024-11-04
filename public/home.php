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
    
    <h1>Cadastros</h1><br>


 
  <div class="sidenav">
    <a href=>./public/autorsql.php</a>
    <a href="#">./public/clientesql.php</a>
    <a href="#">./public/editorasql.php</a>
    <a href="#">./public/funcionariosql.php</a>
    <a href="#">./public/livrosql.php</a>
  </div>
  
  <div class="content">
    <h2>Vai ter tabela aqui</h2>
    <p>Vai ter outra tabela aqui</p>
  </div>




    <a class = "letra" href="./cliente.php" >Cadastrar Cliente</a> <br><br><br><br>
    <a class = "letra" href="./autor.php" >Cadastrar Autor</a> <br><br><br><br>
    <a class = "letra" href="./editoras.php" >Cadastrar Editora</a> <br><br><br><br>
    <a class = "letra" href="./emprestimofor.php" >Cadastrar Empréstimo</a> <br><br><br><br>
    <a class = "letra" href="./funcionario.php"> Cadastrar Funcionário</a> <br><br><br><br>
    <a class = "letra" href="./livrosfor.php" >Cadastrar Livro</a> <br><br><br><br>

    <h1>Banco de Dados dos Cadastros</h1><br>

    <a class = "letra" href= "./clientesql.php" >Listar Cliente</a> <br><br><br><br>
    <a class = "letra" href= "./autorsql.php">Listar Autor</a> <br><br><br><br>
    <a class = "letra" href= "./editorasql.php">Listar Editora</a> <br><br><br><br>
    <a class = "letra" href= "./emprestimosql.php">Listar Emprestimo</a> <br><br><br><br>
    <a class = "letra" href= "./funcionariosql.php">Listar Funcionário</a> <br><br><br><br>
    <a class = "letra" href= "./livrosql.php">Listar Livros</a> <br><br><br><br>
    <a href="../controle/deslogar.php">Sair</a>

</div>
</body>
</html>