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
$descr_art = $_POST["descr_art"];
$cant = $_POST["cant"];
$precio_art = $_POST["precio_art"];

$sql = "UPDATE Articulos SET descr_art='$descr_art', cant=$cant, precio_art=$precio_art WHERE id_art=$id_art";

if ($conn->query($sql) === TRUE) {
    echo "Artículo actualizado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
