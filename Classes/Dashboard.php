<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SESSION['papel'] !== 'admin') {
    echo "Você não tem permissão para acessar esta página.";
    exit();
}

$conexao = new mysqli("localhost", "seu_usuario", "sua_senha", "site_vendas_cursos");

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
</head>
<body>
    <h2>Painel de Administração</h2>
    <h3>Lista de Usuários Cadastrados:</h3>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['email']}</td>
                  </tr>";
        }
        ?>

    </table>

    <a href="logout.php">Sair</a>
</body>
</html>
