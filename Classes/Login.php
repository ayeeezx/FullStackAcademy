<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexao = new mysqli("localhost", "root", "", "fullstack");

    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE senha = '$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['papel'] = $row['papel'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Senha incorreta";
        }
    } else {
        echo "Usuário não encontrado";
    }

    $conexao->close();
}
?>
