<?php 
include"caneta.php";
$bic = new caneta();
$bic ->marca= "bic";
$bic ->cor="vermelho";
$bic ->material ="plastico";
$fibercastle = new caneta();

$bic -> escrever("boa noite");
$bic -> desenhar("#");
$bic -> desenhar("=");
$bic-> reescrever(1);

$fibercastle->marca ="fibercastle";
$fibercastle->cor="azul";
$fibercastle->material="madeira";

$fibercastle -> escrever("i am a fibercastle");
$fibercastle -> reescrever(9);
?>