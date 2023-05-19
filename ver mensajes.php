<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "usuarios";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM contacto";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
</head>
<body>
	<h1>Contactos</h1>
	<ul>
		<?php while($fila = $resultado->fetch_assoc()) { ?>
			<li>
				<strong>Nombre:</strong> <?php echo $fila["nombre"]; ?><br>
				<strong>Email:</strong> <?php echo $fila["email"]; ?><br>
				<strong>Mensaje:</strong> <?php echo $fila["mensaje"]; ?>
			</li>
		<?php } ?>
	</ul>
</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>
