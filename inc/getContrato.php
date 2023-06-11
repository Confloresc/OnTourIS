<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["contrato"];

$sql = "SELECT xxx FROM xxx WHERE cp LIKE ? OR xxx LIKE ? ORDER BY xxx ASC LIMIT 0, 0";
$query = $pdo->prepare($sql);
$query->execute([$contrato . '%', $contrato . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$html .= "<li onclick=\"mostrar('" . $row["xxx"] . "')\">" . $row["xxx"] . " - " . $row["xxx"] . "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);