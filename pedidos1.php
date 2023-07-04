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
            <li><a href="#" style="color: rgb(253, 173, 1);">Pedidos</a></li>
            <li><a href="contatos.php">Contats</a></li>
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
            <form action="comanda1.php" method="post"> 
                <label for="matricula">Nome do Cliente:</label>
                <input type="text" id="atendente" name="atendente"  value="" /><br>
                <label for="turma">Número da Mesa:</label>
                <input type="text" id="mesa" name="mesa"  value="" /><br>
                <label for="tamcamisa">Pedido:</label>
                <input type="text" id="pedido" name="pedido"  value="" /><br>
                <button type=" submit" name="submit" value="">Enviar Pedido</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>