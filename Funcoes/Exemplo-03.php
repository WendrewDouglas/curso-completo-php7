<?php

function ola($texto = "Mundo", $periodo = "Bom dia.") {
    return "Olá $texto! $periodo<br>";
}
echo ola("");
echo ola();
echo ola("Wendrew", "Boa Noite.");
echo ola("Douglas","");

?>