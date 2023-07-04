<?php
//cria valores dos produtos
$agua = 3;
$frango = 26;
$refrigerante = 5;
$churrasco = 13;
$saladaFruta = 7;
//pedido 1
$atendente1 = $_POST["atendente1"];
$mesa1 =  $_POST["mesa1"];
$pedido1 = $_POST["pedido1"];
//pedido 2
$atendente2 = $_POST["atendente2"];
$mesa2 =  $_POST["mesa2"];
$pedido2 = $_POST["pedido2"];
//pedido 3
$atendente3 = $_POST["atendente3"];
$mesa3 =  $_POST["mesa3"];
$pedido3 = $_POST["pedido3"];
//pedido 4
$atendente4 = $_POST["atendente4"];
$mesa4 =  $_POST["mesa4"];
$pedido4 = $_POST["pedido4"];
//pedido 5
$atendente5 = $_POST["atendente5"];
$mesa5 =  $_POST["mesa5"];
$pedido5 = $_POST["pedido5"];
//pedido 6
$atendente6 = $_POST["atendente6"];
$mesa6 =  $_POST["mesa6"];
$pedido6 = $_POST["pedido6"];
//pedido 7
$atendente7 = $_POST["atendente7"];
$mesa7 =  $_POST["mesa7"];
$pedido7 = $_POST["pedido7"];
//pedido 8
$atendente8 = $_POST["atendente8"];
$mesa8 =  $_POST["mesa8"];
$pedido8 = $_POST["pedido8"];
//pedido 9
$atendente9 = $_POST["atendente9"];
$mesa9 =  $_POST["mesa9"];
$pedido9 = $_POST["pedido9"];
//pedido 10
$atendente10 = $_POST["atendente10"];
$mesa10 =  $_POST["mesa10"];
$pedido10 = $_POST["pedido10"];
//Mostrando as demandas
$cont = 1;
while($cont < 11){
echo "<b>Nome: </b>" .ucfirst($_POST["atendente$cont"])."<br />";
echo "<b>Número da Mesa: </b>" .ucfirst($_POST["mesa$cont"]) ."<br />";
echo "<b>Pedido: </b>" .ucfirst($_POST["pedido$cont"]) ."<br />";
//condicao da conta
if ($_POST["pedido$cont"] == "água") {
    $conta = "<b>Conta = </b>R$ $agua reais<br />";
}elseif(($_POST["pedido$cont"] == "refrigerante")){
    $conta = "<b>Conta = </b>R$ $refrigerante reais<br />";
}elseif(($_POST["pedido$cont"] == "frango")){
    $conta = "<b>Conta = </b>R$ $frango reais<br />";
}elseif(($_POST["pedido$cont"] == "churrasco")){
    $conta = "<b>Conta = </b>R$ $churrasco reais<br />";
}elseif(($_POST["pedido$cont"] == "saladaFruta")){
    $conta = "<b>Conta = </b>R$ $saladaFruta reais<br />";
}else{
    echo "<b>" ."Erro no calculo, por favor calcular manualmente!!</b> <br />";
    $conta = null;
}
echo $conta ."<hr>";
$cont++;
}
?>