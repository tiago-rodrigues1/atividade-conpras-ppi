<?php 
$conn = new PDO("sqlite:../../db/compras_db");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$nome = $_GET["nome"];
$valor = $_GET["valor"];
$quantidade = $_GET["quantidade"];

$prepare = $conn->prepare("INSERT INTO compras (nome, valor, quantidade) VALUES (:nome , :valor, :quantidade);");

$prepare->bindParam(":nome", $nome);
$prepare->bindParam(":valor", $valor);
$prepare->bindParam(":quantidade", $quantidade);

$response = $prepare->execute();

if ($response) {
    header('Location: /');
}

?>