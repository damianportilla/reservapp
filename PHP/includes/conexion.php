<?php
define('DB_HOST','localhost');
define('DB_USER','damian');
define('DB_PASS','beaverss2');
define('DB_NAME','reservapp');

// La extensión mysqli (mysql improved) permite acceder a la funcionalidad proporcionada por MySQL 4.1 y posterior.
// Utilicemos SIEMPRE mysqli ya que será la extension que mantendrá soporte hasta PHP 7 inclusive. 
// La extension mysql_connect y relacionadas queda obsoletas en PHP 5.5
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
	 //echo "Conexion OK a: " . DB_NAME;

}

?>