<?php
$mysqli = new  mysqli("localhost","solinpro_hera","glitter1965MVF","solinpro_hera");
if (mysqli_connect_errno()){
	printf ("fallo la conexion", mysqli_connect_errno());
exit();
}


?>