<?php

$qualSuaIdade = 66;

$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeIdoso = 60;

if ($qualSuaIdade < $idadeCrianca) {

    echo "Criança";

} elseif ($qualSuaIdade < $idadeAdulto) {

    echo "Adolescente";

} elseif ($qualSuaIdade < $idadeIdoso) {

    echo "Adulto";

} else {

    echo "Idoso";

}

echo "<br>";

echo ($qualSuaIdade > $idadeAdulto)?"Maior de idade":"Menor de idade";


?>