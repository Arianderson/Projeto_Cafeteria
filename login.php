<?php include './shared/head.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="duvida.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.google.com/specimen/Sacramento">
</head>

<body>
    <!--background-->
    <div class="div1">
        <!--Menu-->
        <div class="div_menu">
            <!--Logo-->
            <div class="div_nomelogo">
                <img src="./img/logo_nome.jpg" alt="logo_nome" width="50%" />
                <div class="divnav">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="duvida.php">Fale Conosco</a></li>
                            <li><a href="contatos.php">Contato</a></li>
                            <li><a href="login.php" style="color: #fdad01;">login</a></li>
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
                <h2>Login:</h2>
                <!-- Cria o formulário com quatro inputs de matrícula -->
                <form action="menu.php" method="post">
                    <label for="usuario">Usuário:</label>
                    <input type="text" id="usuario" name="usuario" value="" required /><br />
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" value="" required /><br />
                    <button type=" submit" name="submit" value="">Enviar Pedido</button>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
 <?php include './shared/footer.php'?>
</body>
</html>