<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexao = new mysqli("localhost", "root", "", "fullstack");

    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    $nome = $_POST['nome'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nome, , senha) VALUES ('$nome', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Registro bem-sucedido!";
    } else {
        echo "Erro ao registrar: " . $conexao->error;
    }

    $conexao->close();
}
?>
