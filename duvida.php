<?php include './shared/head.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="duvida.css">
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
                            <li><a href="#" style="color: #fdad01;">Fale Conosco</a></li>
                            <li><a href="contatos.php">Contato</a></li>
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
                <h2>Fale Conosco:</h2>
                <!-- Cria o formulário com quatro inputs de matrícula -->
                <form action="#" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" id="atendente" name="atendente" value="" required/><br />
                    <label for="numero">Número:</label>
                    <input type="text"  name="mesa" value="" required/><br />
                    <label for="email">Email:</label>
                    <input type="email"  name="email" value="" required/><br />
                    <label for="feedback">Gostou da Nossa Proposta?</label>
                    <table style="width: 268px; height: 40px; line-height: 20px;">
                        <tr>
                            <td><input type="radio" name="guardanapo" value="1"></td>
                            <td><label for="sim">Sim</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="guardanapo" value="2"></td>
                            <td><label for="nao">Não</label></td>
                        </tr>
                    </table>
                    <label for="acomphamento">Do que se trata:</label>
                    <table style="width: 268px; height: 40px; border-collapse: separate; border-spacing: 0 0px; line-height: 20px;">
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="bombom" /></td>
                            <td><label for="">Acessibilidade</label>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="peDeMoleque" /></td>
                            <td><label for="">Front-End</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="pirulito" /></td>
                            <td><label for="">Back-end</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="jujuba" /></td>
                            <td><label for="">Dados Compartilhados</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="passoquita" /></td>
                            <td><label for="">Facilidade de Acesso</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="amedoindourado" /></td>
                            <td><label for="">Outros</label></td>
                        </tr>
                    </table>
                    <label for="observacao">Observações:</label>
                    <textarea name="observacao" id="observacao" cols="20" rows="5"></textarea><br />
                    <br /><button type=" submit" name="submit" value="">Enviar Pedido</button>
                    <input type="hidden" name="id_solicitante" value="1">
                    <input type="hidden" name="hora" value="<?php $timezone = new DateTimeZone('America/Sao_Paulo');
                                                            $date = new DateTime('now', $timezone);
                                                            $horaatual = $date->format('d/m/Y H:i');
                                                            echo $horaatual; ?>">

                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
 <?php include './shared/footer.php'?>
</body>
</html>