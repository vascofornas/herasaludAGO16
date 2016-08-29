<?php
session_start();
$latitud_usuario =  $_SESSION['latitud'];
$longitud_usuario =  $_SESSION['longitud'];

include('encriptar.php');
/* Database connection start */
$servername = "localhost";
$username = "herasosj_hera";
$password = "Papa020432";
$dbname = "herasosj_hera";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

/* Database connection end */


$sql1v =" SELECT * FROM tb_doctores";
$query1=mysqli_query($conn, $sql1v);
while( $row1=mysqli_fetch_array($query1) ) {  

$id_doctor = $row1['id_doctor'];



//PUNTUALIDAD

$query_punt = "SELECT AVG(puntualidad) AS punt FROM tbValoraciones WHERE doctor = '".$id_doctor."' ";
$result_punt = mysqli_query($conn, $query_punt) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result_punt) {
	while($row_punt = mysqli_fetch_assoc($result_punt)) {
		$media_puntualidad =  $row_punt['punt'];	
	}
} 



//fin PUNTUALIDAD
//INSTALACIONES

$query_inst = "SELECT AVG(instalaciones) AS inst FROM tbValoraciones WHERE doctor = '".$id_doctor."' ";
$result_inst = mysqli_query($conn, $query_inst) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result_inst) {
	while($row_inst = mysqli_fetch_assoc($result_inst)) {
		$media_instalaciones =  $row_inst['inst'];	
	}
} 


//fin INSTALACIONES
//PRECIO

$query_precio = "SELECT AVG(precio) AS precio FROM tbValoraciones WHERE doctor = '".$id_doctor."' ";
$result_precio = mysqli_query($conn, $query_precio) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result_precio) {
	while($row_precio = mysqli_fetch_assoc($result_precio)) {
		$media_precio =  $row_precio['precio'];	
	}
} 


//fin PRECIO
//ATENCION

$query_atencion = "SELECT AVG(atencion) AS atencion FROM tbValoraciones WHERE doctor = '".$id_doctor."' ";
$result_atencion = mysqli_query($conn, $query_atencion) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result_atencion) {
	while($row_atencion = mysqli_fetch_assoc($result_atencion)) {
		$media_atencion =  $row_atencion['atencion'];	
	}
} 


//fin atwncion

//RECOMENDARIAS
$query_recomendar = "SELECT AVG(lo_recomendarias) AS lo_recomendarias FROM tbValoraciones WHERE doctor = '".$id_doctor."' ";
$result_recomendar = mysqli_query($conn, $query_recomendar) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result_recomendar) {
	while($row_recomendar = mysqli_fetch_assoc($result_recomendar)) {
		$media_recomendar =  $row_recomendar['lo_recomendarias'];	
	}
} 


//fin RECOMENDARIAS



//query para actualizar doctores


//MySqli Update Query
$resultados = $conn->query("UPDATE tb_doctores SET puntualidad = '".$media_puntualidad."', instalaciones = '".$media_instalaciones."', precio = '".$media_precio."', atencion = '".$media_atencion."', lo_recomendarias = '".$media_recomendar."' WHERE id_doctor = '".$id_doctor."' ");

//MySqli Delete Query
//$results = $mysqli->query("DELETE FROM products WHERE ID=24");

if($resultados){
    
}else{
    print 'Error : ('. $conn->errno .') '. $conn->error;
}
//fin query  actualizar doctores

}
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'nombre_doctor', 
	1 => 'especialidad',
	2 => 'ciudad_doctor',
	3 => 'estado_doctor',
	4 => 'puntualidad',
	5 => 'instalaciones',
	6 => 'nombre_doctor',
	7 => 'precio',
	8 => 'lo_recomendarias',
	9 => 'distancia'
	
);


$miles = 1000;

// getting total number records without any search
$sql = "SELECT * , (acos(sin(radians($latitud_usuario)) * sin(radians(latitud_doctor)) + 
cos(radians($latitud_usuario)) * cos(radians(latitud_doctor)) * 
cos(radians($longitud_usuario) - radians(longitud_doctor))) * 6371) as distance
 FROM tb_doctores LEFT JOIN tb_especialidades ON tb_doctores.especialidad_doctor = tb_especialidades.id_especialidad  LEFT JOIN tbCiudades ON tb_doctores.ciudad_doctor = tbCiudades.id_ciudad LEFT JOIN tbEstados ON tb_doctores.estado_doctor = tbEstados.id_estado LEFT JOIN tbPaises ON tb_doctores.pais_doctor = tbPaises.id_pais  ";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
echo $row['distance'];

$sql = "SELECT *, (acos(sin(radians($latitud_usuario)) * sin(radians(latitud_doctor)) + 
cos(radians($latitud_usuario)) * cos(radians(latitud_doctor)) * 
cos(radians($longitud_usuario) - radians(longitud_doctor))) * 6371) as distance ";
$sql.=" FROM tb_doctores LEFT JOIN tb_especialidades ON tb_doctores.especialidad_doctor = tb_especialidades.id_especialidad LEFT JOIN tbCiudades ON tb_doctores.ciudad_doctor = tbCiudades.id_ciudad LEFT JOIN tbEstados ON tb_doctores.estado_doctor = tbEstados.id_estado LEFT JOIN tbPaises ON tb_doctores.pais_doctor = tbPaises.id_pais WHERE 1=1 ";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( nombre_doctor LIKE '".'%'.$requestData['search']['value']."%' ";    
	$sql.=" OR especialidad LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR apellido1_doctor LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR apellido2_doctor LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR nombre_ciudad LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR nombre_estado LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR puntualidad LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR instalaciones LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR atencion LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR precio LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR nombre_pais LIKE '".'%'.$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
	

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
	
	setlocale(LC_ALL,"es_ES");
	
	//nombre
	$ape1 = strtoupper($row["apellido1_doctor"]);
	$ape2 = strtoupper($row["apellido2_doctor"]);

	
	//boton
	$enlace = "<button type='button' class='btn btn-link'>Link</button>";
	
	//estado y pais

	$estado = $row["nombre_estado"];
	$pais = $row["nombre_pais"];
	
	//valoraciones
	
	$id_doctor = $row["id_doctor"];

//fin atwncion

	$nestedData[] = $row["nombre_doctor"].' '.$ape1.' '.$ape2;
	$nestedData[] = $row["especialidad"];
	$nestedData[] = $row["nombre_ciudad"];
	$nestedData[] = $estado."/".$pais;
	
	if ($row["lo_recomendarias"]>0){
	
	
	$recomendarias_doctor =  $row["lo_recomendarias"];
	if ($recomendarias_doctor ==""  ){
		$grafico_recomendarias = 	"0.png";
	}
	if ($recomendarias_doctor <= 0.5 ){
		$grafico_recomendarias = 	"05.png";
	}
	if ($recomendarias_doctor <= 1 && $recomendarias_doctor > 0.5  ){
		$grafico_recomendarias = 	"1.png";
	}
	if ($recomendarias_doctor <= 1.5 && $recomendarias_doctor > 1  ){
		$grafico_recomendarias = 	"15.png";
	}
	if ($recomendarias_doctor <= 2 && $recomendarias_doctor > 1.5  ){
		$grafico_recomendarias = 	"2.png";
	}
	if ($recomendarias_doctor <= 2.5 && $recomendarias_doctor > 2  ){
		$grafico_recomendarias = 	"25.png";
	}
	
	if ($recomendarias_doctor <= 3 && $recomendarias_doctor > 2.5  ){
		$grafico_recomendarias = 	"3.png";
	}
	if ($recomendarias_doctor <= 3.5 && $recomendarias_doctor > 3  ){
		$grafico_recomendarias = 	"35.png";
	}
	
	if ($recomendarias_doctor <= 4 && $recomendarias_doctor > 3.5  ){
		$grafico_recomendarias = 	"4.png";
	}
	if ($recomendarias_doctor <= 4.5 && $recomendarias_doctor > 4  ){
		$grafico_recomendarias = 	"45.png";
	}
	
	if ($recomendarias_doctor <= 5 && $recomendarias_doctor > 4.5  ){
		$grafico_recomendarias = 	"5.png";
	}
	
	
	$nestedData[] = '<img src="imagenes/'. $grafico_recomendarias.'" width="100%" height="">';
	
	}
	else {
	$nestedData[] = "No hay datos";
	}
	
	if(!empty($row['latitud_doctor']) && !empty($row['longitud_doctor'])){
	
	$distancia_doctor = number_format((double)$row['distance'], 2, '.', '');
	
	}
	else {
	$distancia_doctor = "No hay datos";
	}
	
	$nestedData[] = $distancia_doctor;
	
	$mostrar = '<td><a href="datos_doctor.php?id='.encrypt_decrypt('encrypt', ($row['id_doctor'])).'" class="btn btn-info btn-large"  >Ver ficha del doctor</a></td>';
	
	
	$nestedData[] = $mostrar ;
	
	$data[] = $nestedData;
	$punt = "";
}

$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

function distance ($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

?>
