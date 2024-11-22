<?php
require_once "../controle/verificalogado.php";

require_once "../controle/conexao.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<form action="../controle/usuariohash.php" method="post">
    <h3>Gmail:</h3>
    <input type="text" name="email" >

    <h3>Senha:</h3>
    <input type="text"  name="senha">
    <br><br>

    <input type="submit"    value="cadrastar "  class="btn btn-primary">
</form>
</body>
</html>