var parametrosGlobalesProyecto;
 
$(document).ready(function(){
//	alert("el dom se ha cargado");
	$.ajax({
			url:"ajax/mostrar-categorias.php",
			dataType:'json',
			success: function (respuesta) {
			console.log(respuesta);
			//alert(respuesta);
          for (var i=0; i<respuesta.length ; i++){
		  $("#slc-categoria").append('<option class="elementoLista" value="'+respuesta[i].codigoCategoria+'">'+respuesta[i].nombre+'</option>');
			}
	}
     });
});



function validar(){

	validarCampoVacio("txt-nombre");
	validarCampoCorreo("txt-correo");
	validarContrasena("txt-contraseña");
	ValidarCategoria("slc-categoria");



}


var validarCampoVacio = function(id){
	//alert("entra validar campos");
	if (document.getElementById(id).value == " "){
		document.getElementById(id).classList.remove('is-valid');
		document.getElementById(id).classList.add('is-invalid');
	}
	else{
		document.getElementById(id).classList.remove('is-invalid');
		document.getElementById(id).classList.add('is-valid');
	}
};



function validarCorreo(email) {

    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (patron.test(String(email.value).toLowerCase())){
    	email.classList.remove("is-invalid");
		email.classList.add("is-valid");


    }
    else{
    	email.classList.remove("is-valid");
    	email.classList.add("is-invalid");
    }
}

function validarContrasena(etiqueta){
	if (etiqueta.value.length<6) {
		etiqueta.classList.remove("is-valid");
		etiqueta.classList.add("is-invalid");
	}
	else{
		etiqueta.classList.remove("is-invalid");
		etiqueta.classList.add("is-valid");
	}
}

$("#cuenta").click(function(){


	var parametros = 'txt-nombre=' + $("#txt-nombre").val() + "&" +
					 'txt-correo ='+ $("#txt-correo").val() + "&" +
					 'txt-contraseña='+ $("#txt-contraseña").val();
alert(parametros);
   $.ajax({
	   url: 'guardarUsuario.php',
	   method: 'POST',
	   data: parametros, //URLEncoded
	   success: function (respuesta) {
		   //Instrucciones a ejecutar cuando responda el servidor
		 //  $("#respuesta").html(respuesta);

	   }
   })

});

/*function ValidarCategoria (id){
     if (document.getElementById(id).value == ""){
		document.getElementById(id).classList.remove('is-valid');
		document.getElementById(id).classList.add('is-invalid');
	}
	else{

		document.getElementById(id).classList.remove('is-invalid');
		document.getElementById(id).classList.add('is-valid');
		document.getElementById("btn-idea").removeAttribute("disabled");
	}

}*/


function validarProyecto(etiqueta){
	if (etiqueta.value.length<20) {
		etiqueta.classList.remove("is-valid");
		etiqueta.classList.add("is-invalid");
		document.getElementById("btn-ubicacion").setAttribute("disabled", "disabled");
	}
	else{

		etiqueta.classList.remove("is-invalid");
		etiqueta.classList.add("is-valid");
		document.getElementById("btn-ubicacion").removeAttribute("disabled");
	}
}


function validarChecks(id){
	var cadena = document.getElementById(id).getAttribute("src");

	if(cadena=="img/success.svg"){
		document.getElementById(id).setAttribute("src", "img/success2.svg");

	}
	else{
		document.getElementById(id).setAttribute("src", "img/success.svg");

    }
}

$("#iniciar").click(function(){


	 var parametros = 'txt-correo='+ $("#txt-correo").val() + "&" +
					  'txt-contraseña='+ $("#txt-contraseña").val();

	alert(parametros);

	$.ajax({
		url: 'ajax/leer-usuario.php',
		method: 'GET',
		data: parametros, //URLEncoded
		success: function (respuesta) {
			//Instrucciones a ejecutar cuando responda el servidor
		    $("#respuesta").html(respuesta);

		}
	})
 });

$("#slc-categoria").change(function(){
    if($("#slc-categoria").val() != 0)
     document.getElementById("btn-categoria").removeAttribute("disabled");
    else{
    	if($("#slc-categoria").val() == 0)
      document.getElementById("btn-categoria").setAttribute("disabled", "disabled");
    } 

});

$("#btn-categoria").click(function(){
      
      
	
 });

$("#texa").change(function(){//OB: se activa y se desactiva al hacer click
    if($("#texa").val() != "")
     document.getElementById("btn-descripcion").removeAttribute("disabled");
    else{
    	if($("#slc-categoria").val() == null)
      document.getElementById("btn-descripcion").setAttribute("disabled", "disabled");
    } 

});

$("#btn-descripcion").click(function(){
      concatenar("descripcion="+$("#texa").val()+"&") ;
	
 });


















 $("#cuenta").click(function(){

	var parametros = 'txt-nombre ='+ $("#txt-nombre").val() + "&" +
	                 'txt-correo ='+ $("#txt-correo").val() + "&" +
	                 'txt-contraseña ='+ $("#txt-contraseña").val();

	$.ajax({
		url: 'ajax/guardarUsuario.php',
		method: 'POST',
		data: parametros, //URLEncoded
		success: function (respuesta) {
			//Instrucciones a ejecutar cuando responda el servidor
		    $("#respuesta2").html(respuesta);

		}
	})
 });



 $("#texpais").click(function(){

	var parametros = 'texp='+ $("#texp").val();
	alert($("#texp").val());

	$.ajax({
		method: 'POST',
		data: parametros, //URLEncoded
		success: function (respuesta) {
			//Instrucciones a ejecutar cuando responda el servidor
		  //  $("#respuesta").html(respuesta);

		}
	})

 });


 $("#mas").click(function(){

	 $.ajax({
	 url:"ajax/mostrar-categorias.php",
	 dataType:'json',
	 success: function (respuesta) {
	console.log(respuesta);
	 /*	 for (var i=0; i<respuesta.length ; i++){
		 $("#slc-categoria").append(
											'<option value="'+respuesta[i].codigoCategoria+'">'+respuesta[i].nombre+'</option>'

					 );
			 }*/
	 }
 });
});

function concatenar(dato){
	var datos =new Array();
	while(dato){
	 datos=dato;
	}
	for(var i=0; i< datos.length; i++)
    parametrosGlobalesProyecto+=datos[i];


}