<?php include 'head.php'; ?>
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
                            <li><a href="contatos.php">Contatos</a></li>
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
                <form action="comanda1.php" method="post">
                    <label for="matricula">Nome do Cliente:</label>
                    <input type="text" id="atendente" name="atendente" value="" required/><br />
                    <label for="turma">Número da Mesa:</label>
                    <input type="text" id="mesa" name="mesa" value="" required/><br />
                    <label for="pedido">Faça seu Pedido:</label>
                    <select name="produto1[]" id="produto">
                        <option value="null" selected disabled>Selecione</option>
                        <option value="água">água</option>
                        <option value="Refrigerante">Refrigerante</option>
                        <option value="Salada de fruta">Salada de Fruta</option>
                        <option value="Frango">Frango</option>
                        <option value="Churrasco">Churrasco</option>
                    </select>
                    <select name="produto2[]" id="produto">
                        <option value="null" selected disabled>Selecione</option>
                        <option value="água">água</option>
                        <option value="Refrigerante">Refrigerante</option>
                        <option value="Salada de fruta">Salada de Fruta</option>
                        <option value="Frango">Frango</option>
                        <option value="Churrasco">Churrasco</option>
                    </select>
                    <select name="produto3[]" id="produto">
                        <option value="null" selected disabled>Selecione</option>
                        <option value="água">água</option>
                        <option value="Refrigerante">Refrigerante</option>
                        <option value="Salada de fruta">Salada de Fruta</option>
                        <option value="Frango">Frango</option>
                        <option value="Churrasco">Churrasco</option>
                    </select>
                    <select name="produto4[]" id="produto">
                        <option value="null" selected disabled>Selecione</option>
                        <option value="água">água</option>
                        <option value="Refrigerante">Refrigerante</option>
                        <option value="Salada de fruta">Salada de Fruta</option>
                        <option value="Frango">Frango</option>
                        <option value="Churrasco">Churrasco</option>
                    </select>
                    <select name="produto5[]" id="produto">
                        <option value="null" selected disabled>Selecione</option>
                        <option value="água">água</option>
                        <option value="Refrigerante">Refrigerante</option>
                        <option value="Salada de fruta">Salada de Fruta</option>
                        <option value="Frango">Frango</option>
                        <option value="Churrasco">Churrasco</option>
                    </select>
                    <div class="quantidade">
                        <label for="tamcamisa">Quantidade:</label>
                        <select name="quantidade1[]" id="quantidade1">
                            <option value="null" selected disabled>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <select name="quantidade2[]" id="quantidade2">
                            <option value="null" selected disabled>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <select name="quantidade3[]" id="quantidade3">
                            <option value="null" selected disabled>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <select name="quantidade4[]" id="quantidade4">
                            <option value="null" selected disabled>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <select name="quantidade5[]" id="quantidade5">
                            <option value="null" selected disabled>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <label for="observacao">Observações do Pedido:</label>
                    <textarea name="observacao" id="observacao" cols="20" rows="5"></textarea><br />
                    <label for="guardanapo">Precisa de Guardanapo?</label>
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
                    <label for="acomphamento">Acompanhamentos:</label>
                    <table style="width: 268px; height: 40px; border-collapse: separate; border-spacing: 0 0px; line-height: 20px;">
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="bombom" /></td>
                            <td><label for="">Bom Bom</label>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="peDeMoleque" /></td>
                            <td><label for="">Pé de Moleque</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="pirulito" /></td>
                            <td><label for="">Pirulito</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="jujuba" /></td>
                            <td><label for="">Jujuba</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="passoquita" /></td>
                            <td><label for="">Passoquita</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="amedoindourado" /></td>
                            <td><label for="">Amedoim Dourado</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="picole" /></td>
                            <td><label for="">Picolé</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="halls" /></td>
                            <td><label for="">Halls</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="shokito" /></td>
                            <td><label for="">Shokito</label></td>
                        </tr>
                        <tr>
                            <td><input class="checkbox" type="checkbox" name="ckextras[]" value="negobom" /></td>
                            <td><label for="">Nego-Bom</label></td>
                        </tr>
                    </table>
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
</body>

</html>