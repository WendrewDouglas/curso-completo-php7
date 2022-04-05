<?php

require_once("config.php");
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
//Na linnha abaixo está escrevendo os headers no arquivo

fwrite($file, implode(",", $headers) . "\r\n");
//Para trazer o restante dos dados, utilizamos o foreach


foreach ($usuarios as $row) {
    $data = array();
    foreach($row as $key => $value){
        array_push($data, $value);
    } //fim do foreach de linhas
    fwrite($file, implode(",", $data)."\r\n");
} //fim do foreach de colunas

fclose($file);

echo "Arquivo .csv criado com sucesso!";

?>