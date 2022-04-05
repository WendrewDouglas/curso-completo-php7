<?php

$pesssoa = array (
    'nome'=>'Wendrew',
    'idade'=>37
);

foreach ($pesssoa as &$value) {

    if (gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';
    
}

print_r($pesssoa);

?>