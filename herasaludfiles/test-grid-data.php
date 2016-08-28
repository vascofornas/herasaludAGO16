<?php
/* Database connection start */
$servername = "localhost";
$username = "solinpro_hera";
$password = "glitter1965MVF";
$dbname = "solinpro_hera";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'nombre_doctor', 
	1 => 'especialidad',
	2 => 'ciudad_doctor',
	3 => 'estado_doctor',
	4 => 'nombre_doctor',
	5 => 'nombre_doctor',
	6 => 'nombre_doctor'
);




// getting total number records without any search
$sql = "SELECT * ";
$sql.=" FROM tb_doctores LEFT JOIN tb_especialidades ON tb_doctores.especialidad_doctor = tb_especialidades.id_especialidad LEFT JOIN tbCiudades ON tb_doctores.ciudad_doctor = tbCiudades.id_ciudad LEFT JOIN tbEstados ON tb_doctores.estado_doctor = tbEstados.id_estado LEFT JOIN tbPaises ON tb_doctores.pais_doctor = tbPaises.id_pais";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * ";
$sql.=" FROM tb_doctores LEFT JOIN tb_especialidades ON tb_doctores.especialidad_doctor = tb_especialidades.id_especialidad LEFT JOIN tbCiudades ON tb_doctores.ciudad_doctor = tbCiudades.id_ciudad LEFT JOIN tbEstados ON tb_doctores.estado_doctor = tbEstados.id_estado LEFT JOIN tbPaises ON tb_doctores.pais_doctor = tbPaises.id_pais WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( nombre_doctor LIKE '".'%'.$requestData['search']['value']."%' ";    
	$sql.=" OR especialidad LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR apellido1_doctor LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR apellido2_doctor LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR nombre_ciudad LIKE '".'%'.$requestData['search']['value']."%' ";
	$sql.=" OR nombre_estado LIKE '".'%'.$requestData['search']['value']."%' ";
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
	//puntualidad



	$nestedData[] = $row["nombre_doctor"].' '.$ape1.' '.$ape2;
	$nestedData[] = $row["especialidad"];
	$nestedData[] = $row["nombre_ciudad"];
	$nestedData[] = $estado.' / '.$pais;
	$nestedData[] = $row["nombre_doctor"];
	
	$nestedData[] = $row["nombre_doctor"];
	$nestedData[] = $row["nombre_doctor"];
	
	$data[] = $nestedData;
}

$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
