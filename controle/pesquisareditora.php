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
    <form action="../controle/pesquisareditora.php" method="$_GET">
        Campo: <br>
        <input type= "text" name="valor" value="<?php echo $valor; ?>"> <br><br>

        <input type="submit" value="Enviar">
    </form> <br> 

    <?php 
    
    if (isset($GET['valor'])) {
        $valor = $_GET['valor'];

        require_once "../controle/conexao.php";
        $sql = "SELECT * FROM cliente WHERE nome LIKE '%$valor%'";
        $resultados = mysqli_query($conexao, $sql);
    
        if (mysqli_num_rows($resultados) == 0) {
            echo "Não foram encontrados resultados.";

        } else {
            echo "<table border='1'";
            echo "<tr";
            echo "<td>nome</td>";
            echo "<td>localidade</td>";
            

            while ($linha = mysqli_fetch_array($resultados)){
               $id = $linha['ideditora'];
               $nome = $linha ['nome'];
               $localidade = $linha ['localidade'];
               echo "<tr";
               echo "<td>nome</td>";
               echo "<td>localidade</td>";
               
   
            }
        }
    }
    
    else {
        echo "Procure um nome";
    }
            
  
    ?>

</body>
</html>