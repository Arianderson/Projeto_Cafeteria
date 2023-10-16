<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pedidos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.google.com/specimen/Sacramento">
  <title>Cafetetia - Coffee</title>
</head>

<body>
  <!--background-->
  <div class="div1">
    <!--Menu-->
    <div class="div_menu">
      <!--Logo-->
      <div class="div_nomelogo">
        <img src="./img/logo_nome.jpg" alt="logo_nome" width="70%" />
        <div class="divnav">
          <nav>
            <ul>
              <li><a href="index.php" style="color: #fdad01;">Home</a></li>
              <li><a href="menu.php">Menu</a></li>
              <li><a href="pedidos1.php">Pedidos</a></li>
              <li><a href="contatos.php">Contats</a></li>
              <li><a href="login.php">login</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!--Div Apresentação do Pedido-->
    <div class="div_main">
      <!--Div da esquerda-->
      <div class="div_left">
        <img src="./img/logo_nome.jpg" alt="Logo Cafeteria" style="padding: 25px 0;">
      </div>
      <div class="div_right">
        <h2>Detalhe do Pedido:</h2>
        <!-- Cria o formulário com quatro inputs de matrícula -->
        <div class="detalhepedido">
          <?php
          //Verificando se as informações de quantidade e pedidos chegaram:
            if (isset($_POST["produto1"]) and $_POST["quantidade1"] == null ) {
              header("location: pedidos1.php");
            }
          //Dados referente ao cliente/pedido:
          $id_solicitante = $_POST["id_solicitante"];
          $horaatual = $_POST["hora"];
          $bombom = null;
          $peDeMoleque = null;
          $pirulito = null;
          $jujuba = null;
          $passoquita = null;
          $amedoindourado = null;
          $picole = null;
          $halls = null;
          $shokito = null;
          $negobom = null;

          //************Todas as Condições do código:*************

          //condicao observação
          if (isset($observacao)) {
            $observacao = $_POST["peDeMoleque"];
          } else {
            $observacao = "Sem observações";
          }

          //condicao guardanapo
          $guardanapo = null;
          if (isset($_POST["guardanapo"])) {
            $guardanapo = $_POST["guardanapo"];
          }
          if ($guardanapo == '1') {
            $guardanapo = "Sim";
          } else {
            $guardanapo = "Não";
          }

          //cria valores dos produtos
          $agua = 3;
          $frango = 26;
          $refrigerante = 5;
          $churrasco = 13;
          $saladaFruta = 7;
          
          //Formatação do Pedido
          $atendente = $_POST["atendente"];
          $mesa =  $_POST["mesa"];
          echo "<br /><b>Data e Horário: </b>" . $horaatual . "<br />";
          echo "<br /><b>Nome Atendente: </b>"  . ucfirst($atendente) . "<br />";
          echo "<br /><b>Mesa: </b> $mesa <br />";
          echo "<br /><b>ID Solicitante:</b>  $id_solicitante <br />";
          echo "<br /><b>Pedido: <br /></b>";

          //condicoes quantidades/pedidos do cliente:
          $quantidade1 = null;
          if (isset($_POST["quantidade1"])) {
            $quantidade1 = $_POST["quantidade1"];
          }
          if ($quantidade1 !== null) {
            for ($i = 0; $i < count($quantidade1); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . $quantidade1[$i] ."</b>";
            }
          } 
          $pedido1 = null;
          if (isset($_POST["produto1"])) {
            $pedido1 = $_POST["produto1"];
          }
          if ($pedido1 !== null) {
            for ($i = 0; $i < count($pedido1); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . " " . "</b>"   . $pedido1[$i] . "<br />";
            }
          }
          $quantidade2 = null;
          if (isset($_POST["quantidade2"])) {
            $quantidade2 = $_POST["quantidade2"];
          }
          if ($quantidade2 !== null) {
            for ($i = 0; $i < count($quantidade2); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . $quantidade2[$i] . "</b>";
            }
          }
          $pedido2 = null;
          if (isset($_POST["produto2"])) {
            $pedido2 = $_POST["produto2"];
          }
          if ($pedido2 !== null) {
            for ($i = 0; $i < count($pedido2); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . " " . "</b>"   . $pedido2[$i] . "<br />";
            }
          }
          $quantidade3 = null;
          if (isset($_POST["quantidade3"])) {
            $quantidade3 = $_POST["quantidade3"];
          }
          if ($quantidade3 !== null) {
            for ($i = 0; $i < count($quantidade3); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . $quantidade3[$i] . "</b>";
            }
          }
          $pedido3 = null;
          if (isset($_POST["produto3"])) {
            $pedido3 = $_POST["produto3"];
          }
          if ($pedido3 !== null) {
            for ($i = 0; $i < count($pedido3); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . " " . "</b>"   . $pedido3[$i] . "<br />";
            }
          }
          $quantidade4 = null;
          if (isset($_POST["quantidade4"])) {
            $quantidade4 = $_POST["quantidade4"];
          }
          if ($quantidade4 !== null) {
            for ($i = 0; $i < count($quantidade4); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . $quantidade4[$i] . "</b>";
            }
          }
          $pedido4 = null;
          if (isset($_POST["produto4"])) {
            $pedido4 = $_POST["produto4"];
          }
          if ($pedido4 !== null) {
            for ($i = 0; $i < count($pedido4); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . " " . "</b>"   . $pedido4[$i] . "<br />";
            }
          }
          $quantidade5 = null;
          if (isset($_POST["quantidade5"])) {
            $quantidade5 = $_POST["quantidade5"];
          }
          if ($quantidade5 !== null) {
            for ($i = 0; $i < count($quantidade5); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . $quantidade5[$i] . "</b>";
            }
          }
          $pedido5 = null;
          if (isset($_POST["produto5"])) {
            $pedido5 = $_POST["produto5"];
          }
          if ($pedido5 !== null) {
            for ($i = 0; $i < count($pedido5); $i++) {
              echo "<b style=" . "color:#b17514" . ">" . " " . "</b>"   . $pedido5[$i] . "<br />";
            }
          }

          //Condição Produtos Extras:
          echo "<br /><b>Extras: </b>";
          $ckextras = null;
          if (isset($_POST["ckextras"])) {
            $ckextras = $_POST["ckextras"];
          }
          if ($ckextras !== null) {
            for ($i = 0; $i < count($ckextras); $i++) {
              echo " <p> $ckextras[$i]</p>";
            }
          }
          echo "<br /><b>Observação: </b>  $observacao <br />";
          echo "<br /><b>Enviar Guardanapo? </b> $guardanapo <br />";
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>