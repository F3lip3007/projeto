<?php
require_once "./conexao.php";
$id = $_POST['id'];
$devolucao = $_POST['devolucao'];
$funcionario = $_POST['funcionario'];
$cliente = $_POST['cliente'];
$livro = $_POST['livro'];
// echo 'Data do empréstimo: ' . $data_de_emprestimo;
// echo "<br>";
// echo 'Data de devolução: ' . $data_de_devolucao;
// echo "<br>";
// echo 'Juros do empréstimo' . $juros_de_emprestimo;



// mudei o  texte para date no Data_Devol 


if ($id == 0) {
    $sql = "INSERT INTO emprestimo (devolucao,funcionario_idfuncionario,cliente_idcliente,livro_idlivro) 
    VALUES ('$devolucao','$funcionario','$cliente','$livro')";
} else {
    $sql = "UPDATE emprestimo SET devolucao = '$devolucao', funcionario_idfuncionario = $funcionario, cliente_idcliente =$cliente,livro_idlivro =$livro WHERE idemprestimo = $id";
}
// rodar esse SQL
mysqli_query($conexao, $sql);

// vai sozinho pro index
header("Location: ../public/emprestimosql.php");
?>