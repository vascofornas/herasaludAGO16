$(document).ready(function(){
$("#submit").click(function(){
	
	
 //especialidad elegida
  var especialidad_elegida = $("#especialidad_elegida").val();
  
	
	//especialidad propuesta
   var especialidad_propuesta = $("#especialidad_propuesta").val();
   
   //si no selecciona ni especialidad elegida ni especialidad propuesta
   var value_especialidad =$.trim($("#especialidad_propuesta").val());
   
   if (!value_especialidad.length>0 && especialidad_elegida == 0){
	   alert ("Tienes que seleccionar una especialidad médica");
	   
	   return false; //no envia form si no hay valor para ninguna de las opciones
   }
   
    //nombre del doctor
   var nombre_doctor = $("#nombre_doctor").val();

   
    var value=$.trim($("#nombre_doctor").val());
	
if(value.length>0)
{
 var nombre_doctor = $("#nombre_doctor").val();

}
else {
alert ("El nombre del doctor/a es obligatorio");
return false;
}
//apellido1 del doctor
  
 var apellido1_doctor = $("#apellido1_doctor").val();

   
    var value=$.trim($("#apellido1_doctor").val());
	
if(value.length>0)
{
 var apellido1_doctor = $("#apellido1_doctor").val();
        
}
else {
alert ("El qpellido1 del doctor/a es obligatorio");
return false;
}
     //apellido2 del doctor
  
 var apellido2_doctor = $("#apellido2_doctor").val();

   
    var value=$.trim($("#apellido2_doctor").val());
	
if(value.length>0)
{
 var apellido2_doctor = $("#apellido2_doctor").val();
        
}
else {
alert ("El qpellido2 del doctor/a es obligatorio");
return false;
}
  
   //email del usuario
  


   
    var value=$.trim($("#email_usuario").val());
	
if(value.length>0)
{
	var x = $.trim($("#email_usuario").val());
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
 var email_usuario = $("#email_usuario").val();
        
}
else {
alert ("El email de usuario es obligatorio");
return false;
}
  
    
   //nombre del usuario
  


   
    var value=$.trim($("#nombre_usuario").val());
	
if(value.length>0)
{
 var nombre_usuario = $("#nombre_usuario").val();
        
}
else {
alert ("El nombre de usuario es obligatorio");
return false;
}
  
     //selector de locacion local
	 
	 var seleccion_local = $("#seleccion_local").bootstrapSwitch('state');
	
	 
	 //selector de locacion elegida
	 var seleccion_elegida = $("#seleccion_elegida").bootstrapSwitch('state');
	
	 
	
//pais local

  
 var pais_local = $("#pais_local").val();

	
	 //estado local

  
 var estado_local = $("#estado_local").val();

	
	 
	  //ciudad local

  
 var ciudad_local = $("#ciudad_local").val();

	
	 
	 //pais elegido

  
 var pais_elegido = $("#countryId").val();

	
	 
	  //pais elegido

  
 var estado_elegido = $("#stateId").val();

	 
	  //ciudad elegido

  
 var ciudad_elegida = $("#cityId").val();

	
	 
	 //direccion doctor

  
 var direccion_doctor = $("#direccion_doctor").val();

	
	 
	  //numero doctor

  
 var numero_doctor = $("#numero_doctor").val();
 var fraccionamiento_doctor = $("#fraccionamiento_doctor").val();

	 
	 
	 
	  //puntualidad

  
 var puntualidad = $("#input-5").val();

	
	 
	   //atencion

  
 var atencion = $("#input-6").val();

	
	 
	  //instalaciones

  
 var instalaciones = $("#input-7").val();

	 

  //precio

  
 var precio = $("#input-8").val();
   //precio

  
 var lo_recomiendas = $("#input-9").val();


	 
	   //comentarios

  
 var comentarios = $("#comentarios").val();
 var nombre_usuario = $("#nombre_usuario").val();

 var email_usuario = $("#email_usuario").val();

var now = new Date();
	 
	 
	
var name = $("#name").val();
var email = $("#email").val();
var password = $("#password").val();
var contact = $("#contact").val();
var titulo = $("#titulo").val();



// Returns successful data submission message when the entered information is stored in database.
var dataString = 'especialidad_elegida='+ especialidad_elegida + '&especialidad_propuesta='+ especialidad_propuesta + '&nombre_doctor='+ nombre_doctor + '&apellido1_doctor='+ apellido1_doctor + '&apellido2_doctor='+ apellido2_doctor  + '&seleccion_local='+ seleccion_local+ '&seleccion_elegida='+ seleccion_elegida + '&pais_local='+ pais_local + '&estado_local='+ estado_local + '&ciudad_local='+ ciudad_local + '&apellido1_doctor='+ apellido1_doctor+ '&pais_elegido='+ pais_elegido + '&estado_elegido='+ estado_elegido+ '&ciudad_elegida='+ ciudad_elegida+ '&direccion_doctor='+ direccion_doctor+ '&numero_doctor='+ numero_doctor+ '&puntualidad='+ puntualidad+ '&atencion='+ atencion+ '&instalaciones='+ instalaciones+ '&precio='+ precio+ '&comentarios='+ comentarios+ '&nombre_usuario='+ nombre_usuario+ '&email_usuario='+ email_usuario+ '&hora='+ now+ '&fraccionamiento_doctor='+ fraccionamiento_doctor+ '&lo_recomiendas='+ lo_recomiendas+ '&titulo='+ titulo;


function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}

if(name==''||email==''||password==''||contact=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "php/nueva_opinion_doctor.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
window.open("index.html","_self")
}
});
}
return false;
});
});// JavaScript Document