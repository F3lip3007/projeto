<?php
        $genero = $_POST['genero'];
        $titulo = $_POST['titulo'];
        $idioma = $_POST['idioma'];
        $editora = $_POST['editora'];
        $autor = $_POST['autor'];
        $data_de_publicacao = $_POST['data_de_publicacao'];
        $disponivel = $_POST['disponivel'];
        
      require_once "./conexao.php";
if ($id == 0) {
      $sql = "INSERT INTO livro(genero, titulo, idioma, editora_ideditora,data_de_publicacao,autor_idautor,disponivel) 
      VALUES ('$genero','$titulo','$idioma', '$editora','$data_de_publicacao','$autor','$disponivel')";
} else {
  $sql = "UPDATE livro SET genero = '$genero', titulo = '$titulo', editora_ideditora ='$editora',data_de_publicacao ='$data_de_publicacao' , autor_idautor='$autor',disponivel ='$disponivel'WHERE idlivro = $id";
}

      mysqli_query($conexao, $sql);
      
      header("Location: ../public/home.php");
?>