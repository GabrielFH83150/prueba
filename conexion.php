<?php

// Conectar a la base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "", "usuarios");

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error de conexión: " . mysqli_connect_error();
    exit();
}

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Insertar los datos en la tabla
$query = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
$resultado = mysqli_query($conexion, $query);

// Verificar si la inserción fue exitosa
if ($resultado) {
    echo "Datos enviados correctamente.";
} else {
    echo "Error al enviar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);

?>
