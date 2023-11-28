<?php
include_once 'config/config.php';
include_once 'classes/Crud.php';
$crud = new Crud($db);
$data = $crud->read();
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>FullStack Academy</title>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <a href="#">
                <img src="img/logo.png">
            </a>
        </div>

        <ul class="nav-links">
            <li class="link"><a href="#">Início</a></li>
            <li id="link1" class="link"><a href="#">Características</a></li>
            <li id="link2" class="link"><a href="#">Cursos</a></li>
            <li id="link3" class="link"><a href="#">Sobre</a></li>
        </ul>
        <a href='./Login.php'> <button class="btn">Acessar</button></a>

    </nav>

    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <h4>TORNE-SE AGORA UM PROGRAMADOR FULLSTACK</h4>
            <H1>Olá, Somos a <span>FullStack Academy</span></H1>
            <p>
                Criamos a FullStack Academy com o propósito de proporcionar a todos a chance de se tornar um programador FullStack
                e poder entrar nesse mundo onde só há Códigos e Lógica.
            </p>
            <a href='./Login.php'><button class="btn">Iniciar</button></a>
        </div>
        <div class="image">
            <img src="img/header.png">
        </div>
    </header>

    <section class="container">
        <h2 class="header">NOSSOS RECURSOS</h2>
        <div class="features">
            <div class="card">
                <span><i class="ri-money-dollar-box-line"></i></span>
                <h4>Aulas Gratuitas</h4>
                <p>
                    Nossas aulas são 100% gratuitas e você não precisa pagar nada.
                </p>
                <a href="./Login.php">Entrar <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-bug-line"></i></span>
                <h4>Corrija seus bugs</h4>
                <p>
                    Você tem algum problema em seus códigos? Diga para nós, e iremos ajudá-lo a consertar isso.
                </p>
                <a href="./Login.php">Entrar <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-discord-fill"></i></i></span>
                <h4>Servidor Discord</h4>
                <p>
                    Entre no nosso servidor do discord para suporte, parcerias ou mais informações!
                </p>
                <a href="https://discord.gg/npa4dBsnBa">Entrar <i class="ri-arrow-right-line"></i></a>
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                <h4>Cooperação</h4>
                <p>
                    Você quer que trabalhemos juntos? Escreva um e-mail para nós, nós o leremos.
                </p>
                <a href="./Login.php">Entrar <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>

    <section class="container">
        <h2 class="header">CURSOS</h2>
        <p class="sub-header">
            Os melhores cursos das maiores línguas de programação do mundo estão disponíveis!
        </p>
        <form method="post">
            <div class="pricing">
                <div class="card">
                    <div class="content">
                        <h4>HTML5</h4>
                        <h3>GRÁTIS</h3>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Aulas e cursos de elite
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Códigos profissionais
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Treinamento Pessoal

                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Plano de codificação inteligente
                        </p>
                        <p>
                            <i class="ri-checkbox-circle-line"></i>
                            Exercícios para acelerar o aprendizado
                        </p>
                    </div>
                    <button id="htmlbtn" name="html" class="btn">Acessar</button>
        </form>
        <?php
        if (isset($_POST['html'])) {
            $crud->updateCurso($_SESSION['username']);
        }
        ?>
        </div>
        <div class="card">
            <div class="content">
                <h4>PHP</h4>
                <h3>GRÁTIS</h3>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Aulas e cursos de elite
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Códigos profissionais
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Treinamento Pessoal

                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Plano de codificação inteligente
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Exercícios para acelerar o aprendizado
                </p>
            </div>
            <button class="btn">Acessar</button>
        </div>
        <div class="card">
            <div class="content">
                <h4>CSS</h4>
                <h3>GRÁTIS</h3>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Aulas e cursos de elite
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Códigos profissionais
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Treinamento Pessoal

                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Plano de codificação inteligente
                </p>
                <p>
                    <i class="ri-checkbox-circle-line"></i>
                    Exercícios para acelerar o aprendizado
                </p>
            </div>
            <button class="btn">Acessar</button>
        </div>
        </div>
    </section>

    <footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo">
                <img src="img/logo.png">
            </div>
            <p>
                A equipe FullStack Academy, agradece pela preferência e a confiança.
            </p>
            <div class="socials">
                <a href="https://discord.gg/rdNbRfHbcK"><i class="ri-discord-fill"></i></a>
                <a href="https://www.instagram.com/fullstackacademyrs/"><i class="ri-instagram-line"></i></a>
                <a href="https://twitter.com/FullStckRS"><i class="ri-twitter-x-line"></i></i></a>
            </div>
        </div>
        <div class="column">
            <h4>Empresa</h4>
            <a href="#">Negócios</a>
            <a href="#">Parcerias</a>
            <a href="#">Discord</a>
        </div>
        <div class="column">
            <h4>Sobre nós</h4>
            <a href="#">Blogs</a>
            <a href="#">Canais</a>
            <a href="#">Patrocinadores</a>
        </div>
        <div class="column">
            <h4>Contate-nos</h4>
            <a href="#">Contate-nos</a>
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos e Condições</a>
        </div>
    </footer>

    <div class="copyright">
        Copyright © 2023 FullStack Academy. Todos os direitos reservados.
    </div>


    <script src="script.js"></script>
</body>

</html>