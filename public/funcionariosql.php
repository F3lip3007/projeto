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
    
        <h1>Lista de Funcionários</h1>

        <table>
            <tr>
                <td>id funcionário</td>
                <td>nome</td>
                <td>cpf</td>
                <td>salário</td>
                <td>data de nascimento</td>
                <td>telefone</td>
            </tr>
            <?php
                require_once "../controle/conexao.php";
                $sql = "SELECT * FROM funcionario WHERE nome LIKE '%valor%'";
                or cpf LIKE '%valor%' or telefone LIKE '%valor%'
                or endereco LIKE '%valor%'";
                $resultados = mysqli_query($conexao, sql);

                if (mysqli_num_rows($resultados) > 0){
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$cpf</td>";
                    echo "<td>$salario</td>";
                    echo "<td>$data_de_nascimento</td>";
                    echo "<td>$telefone</td>";
                    echo "</tr>";

                    while ($linha = mysqli_fetch_array($resultados)) {
                        $id = $linha["idfuncionario"];
                        $nome = $linha["nome"];
                        $cpf = $linha["cpf"];
                        $salario = $linha["salario"];
                        $data_de_nascimento = $linha["data_de_nascimento"];
                        $telefone = $linha["telefone"];
                }
            ?>
        </table>
</body>
</html>