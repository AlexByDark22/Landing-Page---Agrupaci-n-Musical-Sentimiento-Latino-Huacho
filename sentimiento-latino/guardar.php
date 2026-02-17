<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, email, telefono, mensaje)
        VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?estado=ok#contacto");
} else {
    header("Location: index.php?estado=error#contacto");
}

$conn->close();
exit();
?>


