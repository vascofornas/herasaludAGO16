<?php

session_start();
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //Send request and receive json data by latitude and longitude
   $_SESSION['latitud'] = $_POST['latitude'];
    $_SESSION['longitud'] = $_POST['longitude'];
   
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    if($status=="OK"){
        //Get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    //Print address 
   // echo $location;
	
	
	
$dbhost = "localhost";
$dbname = "herasosj_hera";
$dbusername = "herasosj_hera";
$dbpassword = "Papa020432";

// Function to get the client ip address
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
$link = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbusername,$dbpassword);


$ip_usuario = get_client_ip_server();
$latitud_usuario =  $_POST['latitude'];
$longitud_usuario = $_POST['longitude'];
$statement = $link->prepare("INSERT INTO tb_locations(ip_location, latitud_location, longitud_location)
    VALUES(:uip, :ulatitud, :ulongitud)");
$statement->execute(array(
    "uip" => $ip_usuario,
    "ulatitud" => $latitud_usuario,
    "ulongitud" => $longitud_usuario
));
	
}
?>