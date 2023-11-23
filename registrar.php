<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="./css/registro.css">
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
        <form action="registrar.php" method="post">
        <span class="blur"></span>
        <span class="blur"></span>
            <h2>Registre-se</h2>
            <label for="username">Usuário:</label>
            <input type="text" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
            <button type="submit">Registrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.php">Entre aqui</a></p>
    </div>

    <?php


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];



        echo 'Cadastro realizado com sucesso!!';
    }
    ?>

    <div class="copyright">
        Copyright © 2023 FullStack Academy. Todos os direitos reservados.
    </div>

    <script src="script.js"></script>
</body>

</html>