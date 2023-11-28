<?php
include_once 'config/config.php';
include_once 'classes/Crud.php';
$crud = new Crud($db); 

$id = $_POST['id'];

$data = $crud->read2($id);



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
    <form action="" method="post">
    <td><input type="text" name="idtxt" id="" value="<?php echo $id?>"></td>
    <td><input type="text" name="nometxt" id="" value="<?php echo $row['nome']?>"></td>
    <td><input type="text" name="senhatxt" id="" value="<?php echo $row['senha']?>"></td>
    <td><input type="text" name="cursotxt" id="" value="<?php echo $row['idCurso']?>"></td>
    <td><input type="submit" value="alterar" name="alterar"></td>
    </form>
  </tr>
  <?php }
   if(isset($_POST['alterar'])) {
       
       if($_POST['nometxt'] != null && $_POST['senhatxt'] != null){
        $nome = $_POST['nometxt'];
        $senha = $_POST['senhatxt'];
        $curso = $_POST['cursotxt'];
        $id = $_POST['idtxt'];
        
        var_dump($id);
       $crud->update($id, $nome, $senha, $curso);

       echo "<script>alert('atualizado com sucesso.');</script>";
       header("Location: admin.php");

   }else{
       echo "<script>alert('Por favor, não deixe as caixas de texto vazias.');</script>";
   }
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