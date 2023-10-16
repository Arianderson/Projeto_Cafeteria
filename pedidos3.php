<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedidos.css">
    <title>Cafetetia - Coffee</title>
</head>

<body>
    <!--background-->
    <div class="div1">
        <!--Menu-->
        <div class="div_menu">
            <!--Logo-->
            <div class="div_nomelogo">
                <img src="./img/logo_nome.jpg" alt="logo_nome" />
                <div class="divnav">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="#" style="color: #fdad01;">Pedidos</a></li>
                            <li><a href="contatos.php">Contats</a></li>
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
                <h2>Informe o seu Pedido:</h2>
                <!-- Cria o formulário com quatro inputs de matrícula -->
                <form action="comanda3.php" method="post">
                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente1" name="atendente1" value="" />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa1" name="mesa1" value="" />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido1" name="pedido1" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente2" name="atendente2" value="" /><br>
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa2" name="mesa2" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido2" name="pedido2" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente3" name="atendente3" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa3" name="mesa3" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido3" name="pedido3" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente4" name="atendente4" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa4" name="mesa4" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido4" name="pedido4" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente5" name="atendente5" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa5" name="mesa5" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido5" name="pedido5" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente6" name="atendente6" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa6" name="mesa6" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido6" name="pedido6" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente7" name="atendente7" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa7" name="mesa7" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido7" name="pedido7" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente8" name="atendente8" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa8" name="mesa8" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido8" name="pedido8" value="" /><br /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente9" name="atendente9" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa9" name="mesa9" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido9" name="pedido9" value="" /><br />

                    <div style="width: 100%; height:1px; background-color:#000"></div><br />

                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente10" name="atendente10" value="" /><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa10" name="mesa10" value="" /><br />
                    <label for="tamcamisa">Pedido:</label>
                    <input type="text" id="pedido10" name="pedido10" value="" /><br />
                    <button type=" submit" name="submit" value="">Enviar Pedido</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>