<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 8;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK!";

?>