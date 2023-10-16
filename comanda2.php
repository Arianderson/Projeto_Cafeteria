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
//Mostrando as demandas
$cont = 1;
while($cont < 5){
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
    echo"Erro no calculo, por favor calcular manualmente!!";
}
echo $conta ."<hr>";
$cont++;
}
