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

 function ValidarSelec(valor){
    var respuesta;
	switch ( valor ) {
		case 1:
			 respuesta = Arte;
			 break;
		case 2:
		     respuesta = Artesanias;
			 break;
		case 3:
		     respuesta = Cinevideos;
			 break;
		case 4:
		     respuesta = comics;
			 break;
		case 5:
	         respuesta = comida;
			 break;
		case 6:
	         respuesta = diseño;
			 break;
		case 7:
			 respuesta = juegos;
			 break; 
		case 8:
			 respuesta = modas;
			 break;
		case 9:
			 respuesta = musica;
			 break;
		case 10:
			 respuesta = periodismo;
			 break;
		case 11:
			 respuesta = publicaciones;
			 break;
		case 12:
		    respuesta = teatro;
			 break;
		case 13:
		    respuesta = tecnologia;
			 break;
	 return respuesta;
 }
 
}
 $("#categoria").click(function(){

	var valor = $("#slc-categoria").val();
	var categoria = ValidarSelec(valor);		
	var parametros =  'slc-categoria='+ categoria;
	alert(valor);
	alert(categoria);

	$.ajax({ 
		method: 'POST',
		data: parametros, //URLEncoded
		success: function (respuesta) {
			//Instrucciones a ejecutar cuando responda el servidor
		  //  $("#respuesta").html(respuesta);
 
		}
	})	

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


 $("#tex").click(function(){
	
    var parametros = 'texa='+ $("#texa").val();                 
	alert(parametros);

	$.ajax({ 
		method: 'POST',
		data: parametros, //URLEncoded
		success: function (respuesta) {
			//Instrucciones a ejecutar cuando responda el servidor
		  //  $("#respuesta").html(respuesta);
 
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