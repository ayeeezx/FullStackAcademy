<?php
include_once './Config/Config.php';
include_once './Classes/Crud.php';


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>FullStack Academy</title>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <a href="index.php">
                <img src="img/logo.png">
            </a>
        </div>

    </nav>

    </header>
    <div class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <form action="login.php" method="post">
            <h2>Conecte-se</h2>
            <label for="username">Usuário:</label>
            <input type="text" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
            <button type="submit" name="enviar">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="Registrar.php">Registre-se aqui</a></p>
    </div>


    <?php

    if (isset($_POST["enviar"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $crud = new Crud($db);

        // Verificar as credenciais 
        if ($username != null && $password != null) {
            if ($crud->validate($username, $password)) {
                header("Location: index.php");
            } else {
                echo "Falha no login. Por favor, verifique seu usuário e senha.  ";
            }
        } else {
            echo 'preencha todos os campos ';
        }
    }

    
    if (isset($_POST["enviar"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $crud = new Crud($db);
    }

    ?>

    <div class="copyright">
        Copyright © 2023 FullStack Academy. Todos os direitos reservados.
    </div>

    <script src="script.js"></script>
</body>

</html>