<?php
/* Database connection start */
$servername = "localhost";
$username = "solinpro_hera";
$password = "glitter1965MVF";
$dbname = "solinpro_hera";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>