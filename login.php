<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "formulario_prueba";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM registro WHERE correo = '".$nombre."' and contrasena = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	$query = mysqli_query($conn,"SELECT * FROM registro WHERE nombre = '".$nombre."' ");
	//header("Location: pagina.html")
	echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	
	print '<script language="JavaScript">';
print 'alert("Datos incorrectos");';
header("Location: login.html");

print '</script>';



}
	



?>