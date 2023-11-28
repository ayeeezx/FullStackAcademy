<?php
include_once 'config/config.php';
include_once 'classes/Crud.php';
$crud = new Crud($db);

$data = $crud->read();



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Administração</title>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <a href="index.php">
                <img src="img/logo.png">
            </a>
        </div>
    </nav>

    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <H1><span>Painel Administrativo</span></H1>
            <H4>Usuários cadastrados</H4>

            <table>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>SENHA</th>
                    <th>ID DO CURSO</th>
                </tr>
                <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nome'] ?></td>
                        <td><?php echo $row['senha'] ?></td>
                        <td><?php if ($row['idCurso'] != null) {
                                echo $row['idCurso'];
                            } else {
                                echo "Nenhum";
                            } ?></td>
                        <form action="" method="post">
                            <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="submit" value="Apagar" name="apagar">
                        </form>
                        <form action="./edit.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="editar" name="editar">
                        </form>
                        </td>

                    </tr>
                <?php }
                if (isset($_POST['apagar'])) {
                    $id = $_POST["id"];
                    $crud->delete($id);
                }

                ?>
            </table>
        </div>
    </header>

    <div class="copyright">
        Copyright © 2023 FullStack Academy. Todos os direitos reservados.
    </div>


    <script src="script.js"></script>
</body>

</html>