<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menulink</title>
<style>
    /* Botão básico */
    .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: bold;
            text-transform: uppercase;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            text-align: center;
        }
         /* Botão q fica grande */
         .btn-gradient {
            background: linear-gradient(45deg, #000080, #000080);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-gradient:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

</style>
</head>

<body>
    <br>
<br><br><br><br>
    <a href="funcionario.php" target="conteudo" class="btn btn-gradient">Cadastro Funcionario </a><br><br><br><br>
    <a href="cliente.php" target="conteudo" class="btn btn-gradient">Cadastro Cliente</a><br><br><br><br>
    <a href="livrosfor.php" target="conteudo" class="btn btn-gradient">Cadastro Livro</a><br><br><br><br>
    <a href="emprestimofor.php" target="conteudo" class="btn btn-gradient">Cadastro Emprestimo</a><br><br><br><br>
    <a href="autor.php" target="conteudo" class="btn btn-gradient">Cadastro Autor</a><br><br><br><br>
    <a href="editoras.php" target="conteudo" class="btn btn-gradient">Cadastro Editoras</a><br><br><br><br>

    <a href="funcionariosql.php" target="conteudo" class="btn btn-gradient">Listar Funcionario</a><br><br><br><br>
    <a href="clientesql.php" target="conteudo" class="btn btn-gradient">Listar Cliente</a><br><br><br><br>
    <a href="autorsql.php" target="conteudo" class="btn btn-gradient">Listar Autor</a><br><br><br><br>
    <a href="livrosql.php" target="conteudo" class="btn btn-gradient">Listar Livros</a><br><br><br><br>
    <a href="editorasql.php" target="conteudo" class="btn btn-gradient">Listar Editora</a><br><br><br><br>
    <a href="emprestimosql.php" target="conteudo" class="btn btn-gradient">Listar Emprestimo</a><br><br><br><br>


    <a href="../controle/deslogar.php" target="conteudo"class="btn btn-gradient">Sair</a><br><br><br><br>




</body>
</html>