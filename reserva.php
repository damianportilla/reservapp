<?php 

include("./PHP/includes/conexion.php");

session_start();

$dia = $_POST["dia"];
$hora = $_POST["hora"];
$cantidad = $_POST["cantidad"];



$turno = "SELECT id FROM  turno WHERE dia = '$dia'";
		    



$resultado = mysqli_query($db, $turno);




if (!$resultado){
	echo 'error';
}

else {

	if ($row = mysqli_fetch_array($resultado))
		$user_id = $_SESSION['id'];
		$turno_id = $row["id"];
	$reserva = "INSERT INTO reserva(idcliente, idturno) VALUES ('$user_id', '$turno_id')";





//$insertar = "INSERT INTO cliente(nombre, apellido, mail,telefono, contrasenia)
//		     VALUES ('$nombre', '$apellido', '$mail', '$telefono', '$pass')";


	$resulreserva = mysqli_query($db, $reserva);



		if (!$resulreserva){
			echo 'error';
		}

		else {
			header("location: resexito.html");
		}

	
}



?>