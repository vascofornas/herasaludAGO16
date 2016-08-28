<?php /* Database connection start */
$servername = "localhost";
$username = "herasosj_hera";
$password = "Papa020432";
$dbname = "herasosj_hera";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

$id = 1;

$query = "SELECT AVG(puntualidad) AS punt FROM tbValoraciones";
$result = mysqli_query($conn, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row['punt'];	
	}
} 

/* Database connection end */