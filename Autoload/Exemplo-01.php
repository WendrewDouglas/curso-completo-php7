<?php

function __autoload($nomeClasse){

    require_once("$nomeClasse.php");

}

$carro = new DellRey();

$carro->acelerar(80);

?>