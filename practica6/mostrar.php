<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Tiendita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id_art, descr_art, cant, precio_art FROM Articulos";
$result = $conn->query($sql);

$articulos = [];
while ($row = $result->fetch_assoc()) {
    $articulos[] = $row;
}

$conn->close();

echo json_encode($articulos);
?>
