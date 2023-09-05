
<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];


$hostname = "localhost";
$username = "root";
$password = "";
$database = "portafolio";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Falló la conexión");
}

$sql = "INSERT INTO bd_contacto (nombre, apellido, email, telefono, comentario)
                       VALUES('$nombre', '$apellido', '$email', '$telefono', '$comentario')";


if ($conn -> query($sql) == false){
    echo "No se insertó la fila";
}


$conn -> close();

echo '<script language="javascript">alert("Tus datos se registraron correctamente");window.location.href="/Evaluacion%20Continua%201%20PHP/contacto.php"</script>';
