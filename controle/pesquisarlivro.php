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
    <style>
/* Estilo geral da página */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom, #e6f7ff, #b3d9ff);
    color: #333;
}

/* Cabeçalho */
h1 {
    text-align: center;
    color: #003366;
    font-size: 2.5em;
    margin-top: 20px;
}

/* Estilo do campo de entrada */
input[type="text"] {
    display: block;
    margin: 20px auto;
    padding: 10px;
    width: 50%;
    border: 2px solid #003366;
    border-radius: 5px;
    font-size: 1em;
}

/* Botão Enviar */
input[type="submit"] {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #003366;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    cursor:


}
/* Estilo para centralizar a tabela */
table {
    margin: 20px auto; /* Centraliza horizontalmente */
    border-collapse: collapse; /* Remove espaçamento entre as bordas */
    width: 80%; /* Define uma largura proporcional */
    background-color: #ffffff; /* Fundo branco para contraste */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adiciona sombra */
}

/* Bordas e estilo das células */
table, th, td {
    border: 1px solid #003366; /* Cor da borda */
    text-align: left; /* Alinhamento do texto */
    padding: 8px; /* Espaçamento interno */
}

/* Cabeçalho da tabela */
th {
    background-color: #00509e; /* Fundo azul para o cabeçalho */
    color: white; /* Texto branco */
    text-align: center; /* Alinha o texto no centro */
}

/* Linhas alternadas */
tr:nth-child(even) {
    background-color: #f2f2f2; /* Fundo cinza claro */
}

/* Linhas ao passar o mouse */
tr:hover {
    background-color: #d9f2ff; /* Fundo azul claro ao passar o mouse */
}


    </style>
</head>
<body>
    <form action="../controle/pesquisarlivro.php" method="$_GET">
        Campo: <br>
        <input type= "text" name="valor" value="<?php echo $valor; ?>"> <br><br>

        <input type="submit" value="Enviar">
    </form> <br> 

    <?php 
    
    if (isset($_GET['valor'])) {
        require_once "../controle/conexao.php";
        $valor = $_GET['valor'];
        $sql = "SELECT * FROM livro WHERE titulo LIKE '%$valor%'";
        $resultados = mysqli_query($conexao,$sql);
    
        if (mysqli_num_rows($resultados) == 0) {
            echo "Não foram encontrados resultados.";

            
        } else {
            echo "<table border='1'";
            echo "<tr";
            echo "<td>id</td>";
            echo "<td>titulo</td>";
            echo "<td>dispoivel</td>";
            echo "<td>idioma</td>";
            echo "<td>data_de_publicacao</td>";
            echo "<td>autor_idautor</td>";
            echo "<td>editora_ideditora</td>";
            echo "<tr/>";

            while ($linha = mysqli_fetch_array($resultados)){
               $id = $linha['idlivro'];
               $titulo = $linha ['titulo'];
               $disponivel = $linha ['disponivel'];
               $idioma = $linha['idioma'];
               $data_de_publicacao = $linha ['data_de_publicacao'];
               $autor_idautor = $linha ['autor_idautor'];
               $editora_ideditora= $linha['editora_ideditora'];
               echo "<tr";
               echo "<td>$id</td>";
               echo "<td>$titulo</td>";
               echo "<td>$disponivel</td>";
               echo "<td>$idioma</td>";
               echo "<td>$data_de_publicacao</td>";
               echo "<td>$autor_idautor</td>";
               echo "<td>$editora_ideditora</td>";
               echo "<tr/>";
            }
        }
    }
    
    else {
        echo "Procure um nome";
    }
            
  
    ?>

</body>
</html>