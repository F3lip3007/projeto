<?php
session_start();
if (isset($_SESSION['logado'])){
    header("Location:home.php");

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">

<head>
<body>
    

    
    <form action="../controle/verificarlogin.php" method="post">
        
        <br><h1>Coloque seu E-mail e sua senha para acessar o site</h1> <br>

        <div class="login">

        <h3>E-mail:</h3> <br>
        <input type = "text"name="email"> <br><br>

        <h3>Senha: </h3> <br>
        <input type = "password"name="senha"> <br><br>

        <input type="submit">
        </div>

        <div class="imagemesquerda">

            <img src = "../public/assets/foto.png">
        </div>
        <php>

    </form>



</body>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>