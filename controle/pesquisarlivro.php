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
    <form action="./controle/pesquisarautor.php" method="get">
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
            echo "<td>titulo</td>";
            echo "<td>dispoivel</td>";
            echo "<td>idioma</td>";
            echo "<td>data_de_publicacao</td>";
            echo "<td>autor_idautor</td>";
            echo "<td>editora_ideditora</td>";

            while ($linha = mysqli_fetch_array($resultados)){
               $id = $linha['idlivro'];
               $titulo = $linha ['titulo'];
               $disponivel = $linha ['disponivel'];
               $idioma = $linha['idioma'];
               $data_de_publicacao = $linha ['data_de_publicacao'];
               $autor_idautor = $linha ['autor_idautor'];
               $editora_ideditora= $linha['editora_ideditora'];
               echo "<tr";
               echo "<td>ID</td>";
               echo "<td>titulo</td>";
               echo "<td>dispoivel</td>";
               echo "<td>idioma</td>";
               echo "<td>data_de_publicacao</td>";
               echo "<td>autor_idautor</td>";
               echo "<td>editora_ideditora</td>";
   
            }
        }
    }
    
    else {
        echo "Procure um nome";
    }
            
  
    ?>

</body>
</html>