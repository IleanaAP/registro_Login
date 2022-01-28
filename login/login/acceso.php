<?php
$servername = "localhost";
$database = "sibw";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//check conection
if (!$conn) {
	die("Conexión fallida: ".mysqli_connect_error());
}
echo "Conexión exitosa.";
?>