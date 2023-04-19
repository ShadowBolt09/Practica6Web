<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tiendita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$descr_art = $_POST["descr_art"];
$cant = $_POST["cant"];
$precio_art = $_POST["precio_art"];

$sql = "INSERT INTO Articulos (descr_art, cant, precio_art) VALUES ('$descr_art', $cant, $precio_art)";

if ($conn->query($sql) === TRUE) {
    echo "Artículo registrado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
