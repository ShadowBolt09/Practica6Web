<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tiendita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id_art = $_POST["id_art"];

$sql = "DELETE FROM Articulos WHERE id_art = $id_art";

if ($conn->query($sql) === TRUE) {
    echo "Artículo eliminado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
