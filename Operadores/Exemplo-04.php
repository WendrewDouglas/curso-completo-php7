<?php

$a = 30;

$b = 30.0;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

// um sinal de igual é atribuição
//var_dump($a = $b);
// se eu deixar atribuido para $a o mesmo valor de $b como na variável acima, as variáveis abaixo irão considerar o mesmo valor.

echo "<br>";

// dois sinais de igual é comparação de valor
var_dump($a == $b);

echo "<br>";

// três sinais de iguais é comparação de tipo e valor
var_dump($a === $b);

echo "<br>";

// excalamação é uma negação (simboliza o diferente)
var_dump($a != $b);

echo "<br>";

// excalamação é uma negação
var_dump($a !== $b);

?>