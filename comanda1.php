<?php
//cria valores dos produtos
$agua = 3;
$frango = 26;
$refrigerante = 5;
$churrasco = 13;
$saladaFruta = 7;
//pedido 1
$atendente = $_POST["atendente"];
$mesa =  $_POST["mesa"];
$pedido = $_POST["pedido"];

//Mostrando as demandas
echo "<br /><b>Nome Atendente: </b>" .$atendente ."<br />";
echo "<br /><b>Mesa: </b>" .$mesa ."<br />";
echo "<br /><b>Pedido: </b>" .$pedido ."<br />";

if ($pedido == "água") {
    $conta = "<b>Conta = </b>R$ $agua reais<br />";
}elseif($pedido == "refrigerante"){
    $conta = "<b>Conta = </b>R$ $refrigerante reais<br />";
}elseif($pedido == "frango"){
    $conta = "<b>Conta = </b>R$ $frango reais<br />";
}elseif($pedido == "churrasco"){
    $conta = "<b>Conta = </b>R$ $churrasco reais<br />";
}elseif($pedido == "saladaFruta"){
    $conta = "<b>Conta = </b>R$ $saladaFruta reais<br />";
}else{
    echo"Erro no calculo, por favor calcular manualmente!!";
}
echo "<br />" .$conta ."<hr>";
?>