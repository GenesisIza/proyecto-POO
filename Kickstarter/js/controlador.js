function validar(){
	alert("entra");
	validarCampoVacio("txt-nombre");		
	validarCampoVacio("txt-correo");

}


var validarCampoVacio = function(id){
	alert("entra validar campos");
	if (document.getElementById(id).value == ""){
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
		alert("funciona");
    	
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

$("#crear_cuenta").click(function(){
   alert("funciona");
	   
	var parametros = 'txt-nombre=' + $("#txt-nombre").val() + "&" + 
					 'txt-correo ='+ $("#txt-correo").val() + "&" +
					 'txt-contraseña='+ $("#txt-contraseña").val();
alert("parametros");
   $.ajax({ 
	   url: 'guardarUsuario.php',
	   method: 'POST',
	   data: parametros, //URLEncoded
	   success: function (respuesta) {
		   //Instrucciones a ejecutar cuando responda el servidor
		   $("#respuesta").html(respuesta);

	   }
   })




   
});