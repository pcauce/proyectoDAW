<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "formulario";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);


$sql = "INSERT INTO Usuarios (Nombre, Apellido, Email, fechaNac, contrasena)
        VALUES ('$nombre', '$apellido', '$email', '$fechaNacimiento', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han enviado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>