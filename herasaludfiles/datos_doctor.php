<?php 
include('encriptar.php');

$servername = "localhost";
$username = "herasosj_hera";
$password = "Papa020432";
$dbname = "herasosj_hera";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

$id = $_GET['id'];
		$decrypted_txt = encrypt_decrypt('decrypt', $id);
		

$sql2v =" SELECT * FROM tbValoraciones 
WHERE doctor = '".$decrypted_txt."'";
$query2=mysqli_query($conn, $sql2v);







$sql1v =" SELECT * FROM tb_doctores LEFT JOIN tb_especialidades ON tb_doctores.especialidad_doctor = tb_especialidades.id_especialidad LEFT JOIN tb_paises ON tb_doctores.pais_doctor = tb_paises.id_pais
LEFT JOIN tb_estados ON tb_doctores.estado_doctor = tb_estados.id_estado 
LEFT JOIN tb_ciudades ON tb_doctores.ciudad_doctor = tb_ciudades.id_ciudad 
LEFT JOIN tbColonias ON tb_doctores.colonia_doctor = tbColonias.id_colonia 
WHERE id_doctor = '".$decrypted_txt."'";
$query1=mysqli_query($conn, $sql1v);
while( $row1=mysqli_fetch_array($query1) ) {  

$id_doctor = $row1['id_doctor'];
$nombre_doctor = $row1['nombre_doctor'];
$apellido1_doctor =  $row1['apellido1_doctor'];
$sexo_doctor =  $row1['sexo_doctor'];
$apellido2_doctor =  $row1['apellido2_doctor'];
$especialidad_doctor =  $row1['especialidad'];
$pais_doctor =  $row1['nombre_pais'];
$estado_doctor =  $row1['nombre_estado'];
$ciudad_doctor =  $row1['nombre_ciudad'];
$sexo = $row1['sexo_doctor'];
$imagen_doctor =  $row1['imagen_doctor'];
$icono_especialidad =  $row1['icono'];

$colonia_doctor =  $row1['colonia_doctor'];
$calle_doctor =  $row1['calle_doctor'];
$numero_doctor =  $row1['numero_doctor'];
$telefono_doctor =  $row1['telefono_doctor'];
$colonia_doctor =  $row1['nombre_colonia'];
$bio_doctor =  $row1['bio_doctor'];
$puntualidad_doctor =  $row1['puntualidad'];
$instalaciones_doctor =  $row1['instalaciones'];
$precio_doctor =  $row1['precio'];
$atencion_doctor =  $row1['atencion'];
$recomendarias_doctor =  $row1['lo_recomendarias'];
$email_doctor =  $row1['email'];


if ($puntualidad_doctor ==""  ){
$grafico_puntualidad = 	"0.png";
}

if ($puntualidad_doctor <= 0.5 ){
$grafico_puntualidad = 	"0.png";
}
if ($puntualidad_doctor <= 1 && $puntualidad_doctor > 0.5  ){
$grafico_puntualidad = 	"1.png";
}
if ($puntualidad_doctor <= 1.5 && $puntualidad_doctor > 1  ){
$grafico_puntualidad = 	"15.png";
}
if ($puntualidad_doctor <= 2 && $puntualidad_doctor > 1.5  ){
$grafico_puntualidad = 	"2.png";
}
if ($puntualidad_doctor <= 2.5 && $puntualidad_doctor > 2  ){
$grafico_puntualidad = 	"25.png";
}

if ($puntualidad_doctor <= 3 && $puntualidad_doctor > 2.5  ){
$grafico_puntualidad = 	"3.png";
}
if ($puntualidad_doctor <= 3.5 && $puntualidad_doctor > 3  ){
$grafico_puntualidad = 	"35.png";
}

if ($puntualidad_doctor <= 4 && $puntualidad_doctor > 3.5  ){
$grafico_puntualidad = 	"4.png";
}
if ($puntualidad_doctor <= 4.5 && $puntualidad_doctor > 4  ){
$grafico_puntualidad = 	"45.png";
}

if ($puntualidad_doctor <= 5 && $puntualidad_doctor > 4.5  ){
$grafico_puntualidad = 	"5.png";
}



if ($instalaciones_doctor ==""  ){
$grafico_instalaciones = 	"0.png";
}
if ($instalaciones_doctor <= 0.5 ){
$grafico_instalaciones = 	"05.png";
}
if ($instalaciones_doctor <= 1 && $instalaciones_doctor > 0.5  ){
$grafico_instalaciones = 	"1.png";
}
if ($instalaciones_doctor <= 1.5 && $instalaciones_doctor > 1  ){
$grafico_instalaciones = 	"15.png";
}
if ($instalaciones_doctor <= 2 && $instalaciones_doctor > 1.5  ){
$grafico_instalaciones = 	"2.png";
}
if ($instalaciones_doctor <= 2.5 && $instalaciones_doctor > 2  ){
$grafico_instalaciones = 	"25.png";
}

if ($instalaciones_doctor <= 3 && $instalaciones_doctor > 2.5  ){
$grafico_instalaciones = 	"3.png";
}
if ($instalaciones_doctor <= 3.5 && $instalaciones_doctor > 3  ){
$grafico_instalaciones = 	"35.png";
}

if ($instalaciones_doctor <= 4 && $instalaciones_doctor > 3.5  ){
$grafico_instalaciones = 	"4.png";
}
if ($instalaciones_doctor <= 4.5 && $instalaciones_doctor > 4  ){
$grafico_instalaciones = 	"45.png";
}

if ($instalaciones_doctor <= 5 && $instalaciones_doctor > 4.5  ){
$grafico_instalaciones = 	"5.png";
}



if ($precio_doctor ==""  ){
$grafico_precio = 	"0.png";
}
if ($precio_doctor <= 0.5 ){
$grafico_precio = 	"05.png";
}
if ($precio_doctor <= 1 && $precio_doctor > 0.5  ){
$grafico_precio = 	"1.png";
}
if ($precio_doctor <= 1.5 && $precio_doctor > 1  ){
$grafico_precio = 	"15.png";
}
if ($precio_doctor <= 2 && $precio_doctor > 1.5  ){
$grafico_precio = 	"2.png";
}
if ($precio_doctor <= 2.5 && $precio_doctor > 2  ){
$grafico_precio = 	"25.png";
}

if ($precio_doctor <= 3 && $precio_doctor > 2.5  ){
$grafico_precio = 	"3.png";
}
if ($precio_doctor <= 3.5 && $precio_doctor > 3  ){
$grafico_precio = 	"35.png";
}

if ($precio_doctor <= 4 && $precio_doctor > 3.5  ){
$grafico_precio = 	"4.png";
}
if ($precio_doctor <= 4.5 && $precio_doctor > 4  ){
$grafico_precio = 	"45.png";
}

if ($precio_doctor <= 5 && $precio_doctor > 4.5  ){
$grafico_precio = 	"5.png";
}




if ($atencion_doctor ==""  ){
$grafico_atencion = 	"0.png";
}
if ($atencion_doctor <= 0.5 ){
$grafico_atencion = 	"05.png";
}
if ($atencion_doctor <= 1 && $atencion_doctor > 0.5  ){
$grafico_atencion = 	"1.png";
}
if ($atencion_doctor <= 1.5 && $atencion_doctor > 1  ){
$grafico_atencion = 	"15.png";
}
if ($atencion_doctor <= 2 && $atencion_doctor > 1.5  ){
$grafico_atencion = 	"2.png";
}
if ($atencion_doctor <= 2.5 && $atencion_doctor > 2  ){
$grafico_atencion = 	"25.png";
}

if ($atencion_doctor <= 3 && $atencion_doctor > 2.5  ){
$grafico_atencion = 	"3.png";
}
if ($atencion_doctor <= 3.5 && $atencion_doctor > 3  ){
$grafico_atencion = 	"35.png";
}

if ($atencion_doctor <= 4 && $atencion_doctor > 3.5  ){
$grafico_atencion = 	"4.png";
}
if ($atencion_doctor <= 4.5 && $atencion_doctor > 4  ){
$grafico_atencion = 	"45.png";
}

if ($atencion_doctor <= 5 && $atencion_doctor > 4.5  ){
$grafico_atencion = 	"5.png";
}



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



if ($imagen_doctor == "" && $sexo == 1){
$imagen_doctor =  "doctora.png";
}
if ($imagen_doctor == "" && $sexo == 2){
$imagen_doctor =  "doctor.png";
}
else 
{
	$imagen_doctor =  $imagen_doctor;
}



}
?>
<!DOCTYPE html>
<html lang="en"><head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hera, la mayor comunidad sobre salud</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
       <!-- <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> -->
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

		
		
        <!-- Template js -->

        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>
        
        

       
        <!-- recursos datatable-->
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">



        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
    
  

        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1>
                            <?php 
							if ($sexo_doctor == "1")
							{
								echo "Dra. ".$nombre_doctor." ".$apellido1_doctor." ".$apellido2_doctor;
							}
							else {
								echo "Dr. ".$nombre_doctor." ".$apellido1_doctor." ".$apellido2_doctor;
							}
							
							?>
                            
                            
                            </h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <!-- TRES PRIMEROS BOTONES -->
        <div class="mainbody-section text-center">
            <div class="container">
            	<div class="row"><!-- ROW 001-->
               <div class="col-md-2">
                        <!--  COL MD 6 001-->

                        <div class="menu-item color-home"> <!-- DIV CLASS MENU ITEM BLUE--DOCTORES -->

                            <a href="index.html" >
                                <i class="fa fa-home"></i>
                                <h3>Portada</h3>
                            </a>
                        </div> 
                        <!-- FIN DIV CLASS MENU ITEM  BLUE--DOCTORES -->
                  </div>
                     <div class="col-md-2">
                        <!--  COL MD 6 001-->

                        <div class="menu-item color-doctor"> <!-- DIV CLASS MENU ITEM BLUE--DOCTORES -->

                            <a href="doctores.html" >
                                <i class="fa fa-user-md"></i>
                                <h3>Doctores</h3>
                            </a>
                        </div> 
                        <!-- FIN DIV CLASS MENU ITEM  BLUE--DOCTORES -->
                  </div>
                  </div>
                <div class="row"><!-- ROW 001-->
                     <div class="col-md-12">
                  
                        <div class="container">
      <div class="" >
       
       
      </div>

    </div>

     <div class="row" >
    
       
<div class="container" style="background-color:rgba(255, 255, 255, 0.7);">
<br>

<div class="col-md-3">
  <img src="imagenes/<?php echo $imagen_doctor?>" width="100%" height="">
  </div>
<div class="col-md-3">
  <div align="left"><img src="imagenes/<?php echo $icono_especialidad?>" width="80" height=""><br>
    
<?php 
echo "<h3>".$especialidad_doctor."</h3><br><br><img src='imagenes/Home_Icon.png' width='30' height='30' align='left' ><br><br>".$calle_doctor."<br>".$colonia_doctor."<br>".$ciudad_doctor." / ".$estado_doctor." / ".$pais_doctor."<br><br>"?>

<?php 
echo "<img src='imagenes/phone-icon.png' width='30' height='30' align='left' ><br><br>".$numero_doctor."<br>".$telefono_doctor."<br><br>"?>    
    
    <?php 
echo "<img src='imagenes/email.png' width='30' height='30' align='left' ><br><br>".$email_doctor."<br><br>"?>    
    
  </div>
</div>


<div class="col-md-3">

  <div align="left">
    <?php 
echo $bio_doctor."<br>"?>
    
    
  </div>
  
</div>

<div class="col-md-3">

  <div align="left">
    <h3>Puntualidad <img src="imagenes/<?php echo "puntualidad.png"?>" width="45" height="45"> 
      <img src="imagenes/<?php echo $grafico_puntualidad?>" width="100%" height=""></h3>
      <h3>Instalaciones <img src="imagenes/<?php echo "instalaciones.png"?>" width="45" height="45"> 
      <img src="imagenes/<?php echo $grafico_instalaciones?>" width="100%" height=""></h3>
      <h3>Precio <img src="imagenes/<?php echo "precio.png"?>" width="45" height="45"> 
      <img src="imagenes/<?php echo $grafico_precio?>" width="100%" height=""></h3>
      <h3>Atención <img src="imagenes/<?php echo "atencion.png"?>" width="45" height="45"> 
      <img src="imagenes/<?php echo $grafico_atencion?>" width="100%" height=""></h3>
      <h3>Lo recomendarías?<img src="imagenes/<?php echo "recomendar.png"?>" width="45" height="45"> 
      <img src="imagenes/<?php echo $grafico_recomendarias?>" width="100%" height=""></h3>
  </div>
  
</div>



<div class="row"><!-- ROW 001-->
                     <div class="col-md-6">
        
        
       
 <?php       while( $row2=mysqli_fetch_array($query2) ) {  

$puntualidad_doctor2 =  $row2['puntualidad'];
$instalaciones_doctor2 =  $row2['instalaciones'];
$precio_doctor2 =  $row2['precio'];
$atencion_doctor2 =  $row2['atencion'];
$recomendarias_doctor =  $row2['lo_recomendarias'];

if ($puntualidad_doctor2 ==""  ){
$grafico_puntualidad2 = 	"0.png";
}
if ($puntualidad_doctor2 <= 0.5 ){
$grafico_puntualidad2 = 	"05.png";
}
if ($puntualidad_doctor2 <= 1 && $puntualidad_doctor2 > 0.5  ){
$grafico_puntualidad2 = 	"1.png";
}
if ($puntualidad_doctor2 <= 1.5 && $puntualidad_doctor2 > 1  ){
$grafico_puntualidad2 = 	"15.png";
}
if ($puntualidad_doctor2 <= 2 && $puntualidad_doctor2 > 1.5  ){
$grafico_puntualidad2 = 	"2.png";
}
if ($puntualidad_doctor2 <= 2.5 && $puntualidad_doctor2 > 2  ){
$grafico_puntualidad2 = 	"25.png";
}

if ($puntualidad_doctor2 <= 3 && $puntualidad_doctor2 > 2.5  ){
$grafico_puntualidad2 = 	"3.png";
}
if ($puntualidad_doctor2 <= 3.5 && $puntualidad_doctor2 > 3  ){
$grafico_puntualidad2 = 	"35.png";
}

if ($puntualidad_doctor2 <= 4 && $puntualidad_doctor2 > 3.5  ){
$grafico_puntualidad2 = 	"4.png";
}
if ($puntualidad_doctor2 <= 4.5 && $puntualidad_doctor2 > 4  ){
$grafico_puntualidad2 = 	"45.png";
}

if ($puntualidad_doctor2 <= 5 && $puntualidad_doctor2 > 4.5  ){
$grafico_puntualidad2 = 	"5.png";
}



if ($instalaciones_doctor2 ==""  ){
$grafico_instalaciones2 = 	"0.png";
}
if ($instalaciones_doctor2 <= 0.5 ){
$grafico_instalaciones2 = 	"05.png";
}
if ($instalaciones_doctor2 <= 1 && $instalaciones_doctor2 > 0.5  ){
$grafico_instalaciones2 = 	"1.png";
}
if ($instalaciones_doctor2 <= 1.5 && $instalaciones_doctor2 > 1  ){
$grafico_instalaciones2 = 	"15.png";
}
if ($instalaciones_doctor2 <= 2 && $instalaciones_doctor2 > 1.5  ){
$grafico_instalaciones2 = 	"2.png";
}
if ($instalaciones_doctor2 <= 2.5 && $instalaciones_doctor2 > 2  ){
$grafico_instalaciones2 = 	"25.png";
}

if ($instalaciones_doctor2 <= 3 && $instalaciones_doctor2 > 2.5  ){
$grafico_instalaciones2 = 	"3.png";
}
if ($instalaciones_doctor2 <= 3.5 && $instalaciones_doctor2 > 3  ){
$grafico_instalaciones2 = 	"35.png";
}

if ($instalaciones_doctor2 <= 4 && $instalaciones_doctor2 > 3.5  ){
$grafico_instalaciones2 = 	"4.png";
}
if ($instalaciones_doctor2 <= 4.5 && $instalaciones_doctor2 > 4  ){
$grafico_instalaciones2 = 	"45.png";
}

if ($instalaciones_doctor2 <= 5 && $instalaciones_doctor2 > 4.5  ){
$grafico_instalaciones2 = 	"5.png";
}



if ($precio_doctor2 ==""  ){
$grafico_precio2 = 	"0.png";
}
if ($precio_doctor2 <= 0.5 ){
$grafico_precio2 = 	"05.png";
}
if ($precio_doctor2 <= 1 && $precio_doctor2 > 0.5  ){
$grafico_precio2 = 	"1.png";
}
if ($precio_doctor2 <= 1.5 && $precio_doctor2 > 1  ){
$grafico_precio2 = 	"15.png";
}
if ($precio_doctor2 <= 2 && $precio_doctor2 > 1.5  ){
$grafico_precio2 = 	"2.png";
}
if ($precio_doctor2 <= 2.5 && $precio_doctor2 > 2  ){
$grafico_precio2 = 	"25.png";
}

if ($precio_doctor2 <= 3 && $precio_doctor2 > 2.5  ){
$grafico_precio2 = 	"3.png";
}
if ($precio_doctor2 <= 3.5 && $precio_doctor2 > 3  ){
$grafico_precio2 = 	"35.png";
}

if ($precio_doctor2 <= 4 && $precio_doctor2 > 3.5  ){
$grafico_precio2 = 	"4.png";
}
if ($precio_doctor2 <= 4.5 && $precio_doctor2 > 4  ){
$grafico_precio2 = 	"45.png";
}

if ($precio_doctor2 <= 5 && $precio_doctor2 > 4.5  ){
$grafico_precio2 = 	"5.png";
}




if ($atencion_doctor2 ==""  ){
$grafico_atencion2 = 	"0.png";
}
if ($atencion_doctor2 <= 0.5 ){
$grafico_atencion2 = 	"05.png";
}
if ($atencion_doctor2 <= 1 && $atencion_doctor2 > 0.5  ){
$grafico_atencion2 = 	"1.png";
}
if ($atencion_doctor2 <= 1.5 && $atencion_doctor2 > 1  ){
$grafico_atencion2 = 	"15.png";
}
if ($atencion_doctor2 <= 2 && $atencion_doctor2 > 1.5  ){
$grafico_atencion2 = 	"2.png";
}
if ($atencion_doctor2 <= 2.5 && $atencion_doctor2 > 2  ){
$grafico_atencion2 = 	"25.png";
}

if ($atencion_doctor2 <= 3 && $atencion_doctor2 > 2.5  ){
$grafico_atencion2 = 	"3.png";
}
if ($atencion_doctor2 <= 3.5 && $atencion_doctor2 > 3  ){
$grafico_atencion2 = 	"35.png";
}

if ($atencion_doctor2 <= 4 && $atencion_doctor2 > 3.5  ){
$grafico_atencion2 = 	"4.png";
}
if ($atencion_doctor2 <= 4.5 && $atencion_doctor2 > 4  ){
$grafico_atencion2 = 	"45.png";
}

if ($atencion_doctor2 <= 5 && $atencion_doctor2 > 4.5  ){
$grafico_atencion2 = 	"5.png";
}



if ($recomendarias_doctor2 ==""  ){
$grafico_recomendarias2 = 	"0.png";
}
if ($recomendarias_doctor2 <= 0.5 ){
$grafico_recomendarias2 = 	"05.png";
}
if ($recomendarias_doctor2 <= 1 && $recomendarias_doctor2 > 0.5  ){
$grafico_recomendarias2 = 	"1.png";
}
if ($recomendarias_doctor2 <= 1.5 && $recomendarias_doctor2 > 1  ){
$grafico_recomendarias2 = 	"15.png";
}
if ($recomendarias_doctor2 <= 2 && $recomendarias_doctor2 > 1.5  ){
$grafico_recomendarias2 = 	"2.png";
}
if ($recomendarias_doctor2 <= 2.5 && $recomendarias_doctor2 > 2  ){
$grafico_recomendarias2 = 	"25.png";
}

if ($recomendarias_doctor2 <= 3 && $recomendarias_doctor2 > 2.5  ){
$grafico_recomendarias2 = 	"3.png";
}
if ($recomendarias_doctor2 <= 3.5 && $recomendarias_doctor2 > 3  ){
$grafico_recomendarias2 = 	"35.png";
}

if ($recomendarias_doctor2 <= 4 && $recomendarias_doctor2 > 3.5  ){
$grafico_recomendarias2 = 	"4.png";
}
if ($recomendarias_doctor2 <= 4.5 && $recomendarias_doctor2 > 4  ){
$grafico_recomendarias2 = 	"45.png";
}

if ($recomendarias_doctor2 <= 5 && $recomendarias_doctor2 > 4.5  ){
$grafico_recomendarias2 = 	"5.png";
}
?>
<div class="row">
 <div class="col-md-6">
 <div align="left">
 <?php
  
 echo "<strong>".$row2['usuario']."</strong><br><h6>".$row2['fecha_hora']."</h6><br><br>".$row2['comentarios'];
 
 
 ?>
 
 </div>
 </div>
 
 
 
 <div class="col-md-6">

<div align="right">
  <h5>Puntualidad <img src="imagenes/<?php echo "puntualidad.png"?>" width="30" height="30"> 
      <img src="imagenes/<?php echo $grafico_puntualidad2?>" width="20%" height=""></h5>
      <h5>Instalaciones <img src="imagenes/<?php echo "instalaciones.png"?>" width="30" height="30"> 
      <img src="imagenes/<?php echo $grafico_instalaciones2?>" width="20%" height=""></h5>
      <h5>Precio <img src="imagenes/<?php echo "precio.png"?>" width="30" height="30"> 
      <img src="imagenes/<?php echo $grafico_precio2?>" width="20%" height=""></h5>
      <h5>Atención <img src="imagenes/<?php echo "atencion.png"?>" width="30" height="30"> 
      <img src="imagenes/<?php echo $grafico_atencion2?>" width="20%" height=""></h5>
      <h5>Lo recomendarías?<img src="imagenes/<?php echo "recomendar.png"?>" width="30" height="30"> 
      <img src="imagenes/<?php echo $grafico_recomendarias2?>" width="20%" height=""></h5>
      </div>
      </div>
 </div>
 <hr>
<?php
}?>
       
       
       
                </div>
              <div class="col-md-6">
        
    
<script src="http://maps.googleapis.com/maps/api/js"></script>

      
<div id="googleMap" style="width:500px;height:380px;"></div>
       </div>
                </div>
  </div>



		</div>



                    </div>
                        
                        
                   
                    </div>
					
                    <!-- FIN COL MD 6 001-->
                    </div> <!-- FIN ROW 001--> 
                     
                    <br><br> 
                    <div class="row"><!-- ROW 001-->
                    
                    <div class="col-md-3">
                        <!--  COL MD 6 001-->

                        <div class="menu-item color-hera"> <!-- DIV CLASS MENU ITEM BLUE--DOCTORES -->

                            <a href="doctores.html" >
                                <i class="fa fa-users"></i>
                                <h3>Quienes somos?</h3>
                            </a>
                        </div> 
                        <!-- FIN DIV CLASS MENU ITEM  BLUE--DOCTORES -->
                  </div>
                         <div class="col-md-3">
                        <!--  COL MD 6 001-->

                        <div class="menu-item color-legal"> <!-- DIV CLASS MENU ITEM BLUE--DOCTORES -->

                            <a href="doctores.html" >
                                <i class="fa fa-info-circle"></i>
                                <h3>Aviso Legal</h3>
                            </a>
                        </div> 
                        <!-- FIN DIV CLASS MENU ITEM  BLUE--DOCTORES -->
                  </div>
                    <div class="col-md-3">
                        <!--  COL MD 6 001-->

                        <div class="menu-item color-usuario"> <!-- DIV CLASS MENU ITEM BLUE--DOCTORES -->

                            <a href="doctores.html" >
                                <i class="fa fa-user"></i>
                                <h3>Contactar</h3>
                            </a>
                        </div> 
                        <!-- FIN DIV CLASS MENU ITEM  BLUE--DOCTORES -->
                  </div> 
                  
                    <div class="col-md-3">
                        <!--  COL MD 6 001-->

                        <div class="menu-item color-usuario"> <!-- DIV CLASS MENU ITEM BLUE--DOCTORES -->

                            <a href="doctores.html" >
                                <i class="fa fa-user"></i>
                                <h3>Mi Perfil</h3>
                            </a>
                        </div> 
                        <!-- FIN DIV CLASS MENU ITEM  BLUE--DOCTORES -->
                  </div> 
                    <!-- FIN COL MD 6 001-->
                    </div> <!-- FIN ROW 001-->
               
            </div>
        </div>
        
        <!-- End Main Body Section -->
        
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
            
                <div class="row">
                    <div class="col-md-12">
                        <div>Diseno y Desarrollo por <a href="http://www.webjuarez.com" target="_blank">Web Juarez</a> para <a href="http://herasalu.com">JHera</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        
        <!-- Start Feature Section -->
        <div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Awesome Feature</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-magic"></i>
                                <div class="feature-content">
                                    <h4>Web Design</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-gift"></i>
                                <div class="feature-content">
                                    <h4>Graphics Design</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-wordpress"></i>
                                <div class="feature-content">
                                    <h4>Wordpress Theme</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-plug"></i>
                                <div class="feature-content">
                                    <h4>Wordpress Plugin</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-joomla"></i>
                                <div class="feature-content">
                                    <h4>Joomla Template</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-cube"></i>
                                <div class="feature-content">
                                    <h4>Joomla Extension</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-css3"></i>
                                <div class="feature-content">
                                    <h4>HTML 5 & CSS3</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-android"></i>
                                <div class="feature-content">
                                    <h4>Android Apps</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Feature Section -->
        
        
        
        <!-- Start Portfolio Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Portfolio</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/1.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/2.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/3.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/4.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/5.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/6.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/7.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/8.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/9.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/10.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/11.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/12.png" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Project Name</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Portfolio Section -->
        
        
        <!-- Start About Us Section -->
        <div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>About Us</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. It has roots in a piece of classical Latin literature from 45 BC</p>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus</li>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                            <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                            <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square"></i>Nor again is there anyone who loves</li>
                                            <li><i class="fa fa-check-square-o"></i>Et harum quidem rerum facilis</li>
                                            <li><i class="fa fa-check-square-o"></i>At vero eos et accusamus et iusto odio</li>
                                        </ul>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="skill-shortcode">
                        
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Web Design</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="60">
                                            <span class="progress-bar-span" >60%</span>
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>HTML & CSS</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="95">
                                            <span class="progress-bar-span" >95%</span>
                                            <span class="sr-only">95% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Wordpress</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="80">
                                            <span class="progress-bar-span" >80%</span>
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Joomla</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="100">
                                            <span class="progress-bar-span" >100%</span>
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Extension</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="70">
                                            <span class="progress-bar-span" >70%</span>
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-tab">
                        
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Our Mission</a></li>
                                    <li><a href="#tab-2" role="tab" data-toggle="tab">Our Vission</a></li>
                                    <li><a href="#tab-3" role="tab" data-toggle="tab">Company History</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-1">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                     </div>


                                    <div class="tab-pane" id="tab-2">
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                    </div>


                                    <div class="tab-pane" id="tab-3">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                    </div>

                                </div><!-- /.tab-content -->

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End About Us Section -->
        
        
        <!-- Start Service Section -->
        <div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Services</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-magic pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Web Design</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-css3 pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">HTML5 & CSS3</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-wordpress pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Wordpress Theme</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-plug pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Wordpress Plugin</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-joomla pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joomla Template</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-cube pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joomla Extension</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        
                    </div><!-- /.row -->
                </div>
                
                <div class="pricing-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Free</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Standard</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Premium</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Professional</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">$49<span>.00</span></div>
                                        <div class="interval">per month</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>40 GB Storage</li>
                                            <li>40GB Transfer</li>
                                            <li>10 Domains</li>
                                            <li>20 Projects</li>
                                            <li>Free installation</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Service Section -->
        
        
        <!-- Start Team Member Section -->
        <div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Expert Team</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/manage-1.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/manage-2.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/manage-3.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/manage-4.png" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/team-1.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/team-2.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/team-3.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/team-4.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>John Doe</h4>
                                    <div class="designation">Senior Web Developer</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Team Member Section -->
        
        
        <!-- Start Latest News Section -->
        <div class="section-modal modal fade" id="news-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Exclusive News</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-01.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-02.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-03.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/blog-04.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Standard Post with Image</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-user"></i> Auther : iThemesLab</li>
                                        <li><i class="fa fa-calendar"></i> 07 Aug, 2014</li>
                                        <li><i class="fa fa-tag"></i> Music</li>
                                    </ul>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Latest News Section -->
        
        
        
        <!-- Start Contact Section -->
        <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Contact With Us</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Contact info</h4>
                                <ul>
                                    <li><strong>E-mail :</strong> your-email@mail.com</li>
                                    <li><strong>Phone :</strong> +8801-6778776</li>
                                    <li><strong>Mobile :</strong> +8801-45565378</li>
                                    <li><strong>Web :</strong> yourdomain.com</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Working Hours</h4>
                                <ul>
                                    <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                                    <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                                    <li><strong>Sat :</strong> 9 am to 3 pm</li>
                                    <li><strong>Sunday :</strong> Closed</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Contact Section -->
        
        
         <!-- Start Testimonial Section -->
        <div class="section-modal modal fade contact" id="testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Client's Speech About Us</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-1.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-2.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-3.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-4.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    
                </div>
                
            </div>
        </div>
        <!-- End Testimonial Section -->
        
    </body>
    
</html>