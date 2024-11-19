<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('./assets/fundo.jpg');
            color: #333;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden; /* Tirar ou ocultar barra de rolagem na horizontal */
        }

        header {
            text-align: center;
            padding: 15px;
            font-size: 1.8rem;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.8);
            border-bottom: 2px solid rgba(0, 0, 0, 0.1);
        }

        /* Menu lateral */
        input[type="checkbox"] {
            display: none; /* Esconde o checkbox */
        }

        #menuToggle {
            position: fixed;
            top: 20px;
            left: 90%;
            background-color: #000080;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1000;
            text-decoration: none;
        }

        /* Estilo do menu */
        #menu {
            position: fixed;
            top: 0;
            left: -350px; /* Escondido fora da tela */
            width: 350px;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.2);
            transition: left 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        /* Mostra o menu ao marcar o checkbox */
        input[type="checkbox"]:checked ~ #menu {
            left: 0; /* Move o menu para dentro da tela */
        }

        /* Estilo do iframe */
        #menu iframe {
            flex: 1; /* Preenche todo o espaço disponível */
            border: none;
        }

        footer {
            text-align: center;
            padding: 10px;
            background: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            border-top: 2px solid rgba(0, 0, 0, 0.1);
            margin-top: auto; /* Fixa no final da página */
        }

    .botao-header {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    }

    .botao-header:hover {
    background-color: #0056b3;
}

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

    <header> Biblioteca Luz do Saber</header>


    <iframe name="conteudo"  width="100%" height="100%"></iframe>
    
    <!-- Botão para abrir o menu -->
    <label for="menuCheckbox" id="menuToggle">Abrir Menu</label>
    <input type="checkbox" id="menuCheckbox">
    

    <!-- Menu lateral decorado com iframe -->
    <div id="menu">
        <iframe src="Menulink.php"  width="100%"></iframe>
        <a href="../controle/deslogar.php" class="btn btn-gradient">Sair</a><br><br><br><br>
    </div >
 

    <footer> 2024. Biblioteca.</footer>

</body>
</html>
