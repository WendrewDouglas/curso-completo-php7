<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 9;

$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Deletado OK!";

?>