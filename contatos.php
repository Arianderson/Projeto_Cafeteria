<?php include './shared/head.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contatos.css">
</head>

<body>
    <!--background-->
    <div class="div1">
        <!--Menu-->
        <div class="div_menu">
            <!--Logo-->
            <div class="div_nomelogo">
                <img src="./img/logo_nome.jpg" alt="logo_nome" width="50%"/>
                <div class="divnav">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="duvida.php">Fale Conosco</a></li>
                            <li><a href="contatos.php" style="color: #fdad01;">Contato</a></li>
                            <li><a href="login.php">login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="div_main">
            <!--Div da esquerda-->
            <div class="div_left">
                <img src="./img/logo_nome.jpg" alt="Logo Cafeteria" style="padding: 25px 0;">
            </div>
            <div class="div_right">
                <h2>Contatos/Endereço:</h2>
                <!-- Cria o formulário com quatro inputs de matrícula -->
                <div class="contatos">
                    <b>TEL: (27) 99956-1334 <br />
                        Vitória (ES), Ilha das Flores <br />
                        Rua Basilio Costa Longa <br />
                        Numero 03, em frente a Igreja Jesus na Ilha</b>
                    <br />
                    <div style="margin: auto;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.191820349215!2d-40.336585523980524!3d-20.33369285100776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb83dc129440bbf%3A0x7b3a85409d97735d!2sR.%20das%20Pedras%2C%203%20-%20Paul%2C%20Vila%20Velha%20-%20ES%2C%2029115-586!5e0!3m2!1spt-BR!2sbr!4v1724193421588!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
 <?php include './shared/footer.php'?>
</body>
</html>