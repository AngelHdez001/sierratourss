<?php

$conexion=mysqli_connect('localhost','root','','formulario_prueba') or die ('Error en la base de datos');

$sql="INSERT INTO registro VALUES(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["correo"]."','".$_POST["pass"]."','".$_POST["genero"]."')";

$resultado=mysqli_query($conexion,$sql) or die ('Error en el query');

mysqli_close($conexion);


echo 'Nombre: '.$_POST["nombre"].'<br>';

echo 'Apellido: '.$_POST["apellido"].'<br>';

echo 'Correo: '.$_POST["correo"].'<br>';

echo 'Contraseña: '.$_POST["pass"].'<br>';

echo 'Genero: '.$_POST["genero"];

header ("Location: login.html");






?>