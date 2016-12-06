<?php 

include("./PHP/includes/conexion.php");



$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];
$pass = $_POST["contrasenia"];



$insertar = "INSERT INTO cliente(nombre, apellido, mail,telefono, contrasenia)
		     VALUES ('$nombre', '$apellido', '$mail', '$telefono', '$pass')";


$resultado = mysqli_query($db, $insertar);

if (!$resultado){
	echo 'error';
}

else {
	header("location: usrexito.html");
}



?>