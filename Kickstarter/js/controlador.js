
$(document).ready(function(){
				 $.ajax({
			 			 url: "ajax/ProyectoDetalles.php",
			 			 method : "POST",
			 			 data : "txt-cat="+localStorage.getItem("CategoriaParaMostrar"),
			 			 dataType: "json",
			 			 success: function (respuesta) {
			 				 console.log(respuesta);
			 				 for (var i = 0; i < respuesta.length; i++) {
			 					 $("#proyectoscategorias").append(

			 							 '   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">'+
			 							 '	     <div class="card">'+
			 							 '          <img class="card-img-top" src="'+respuesta[i].urlImagen +'" alt="Card image cap">'+
			 							 '          <div class="card-body">'+
			 							 '            <h1>  <p class="card-text">'+respuesta[i].tituloProyecto+'.</p> </h1>'+
			 							 '              <h3 class="card-text tarjetitas">'+respuesta[i].descripcion+'.</h3>'+
			 							 '              <h3 class="card-text tarjetitas"> Propietario: '+respuesta[i].nombre+'</h3>'+
			 							 '              <h3 class="card-text tarjetitas"> Meta: $'+respuesta[i].meta+'.</h3>'+
			 							 '              <h3 class="card-text tarjetitas"> Plazo Financiamiento: '+respuesta[i].plazoFinanciamiento+'.</h3>'+
			 							 '          </div>'+
			 							 '       </div>'+
			 							 '   </div>'

			 					);

			 			 }
			 			 }
			 	});



	IdProyecto(15);
	$.ajax({
			url:"ajax/mostrar-categorias.php",
			dataType:'json',
			success: function (respuesta) {
			//console.log(respuesta);
            for (var i=0; i<respuesta.length ; i++){
		    $("#slc-categoria").append('<option  value="'+respuesta[i].codigoCategoria+'">'+respuesta[i].nombre+'</option>');
			}
	}
     });

		 cargarUrlsSegunCat(localStorage.getItem("CodigoCategoriaNumerico"));

		$.ajax({
				url:"ajax/mostrar-paises.php",
				dataType:'json',
				success: function (respuesta) {
				//console.log(respuesta);
							for (var i=0; i<respuesta.length ; i++){
								$("#texp").append('<option  value="'+respuesta[i].codigoPais+'">'+respuesta[i].nombre+'</option>');
						 }
				}
				});

	});


		 	
		function IdProyecto(valor){
				 var parametros = 'txt-cat='+valor;
		     			 $.ajax({
						url: "ajax/obtener-proyectos.php",
						method : "POST",
						data : parametros,
						dataType: "json",
						success: function (respuesta) {
							limpiarSeccion();
                       //console.log(respuesta);
                        for (var i =0; i<respuesta.length; i++) {
                        if(i==0){
                        $("#mostrarProyecto1").append('<img  class="imagendetabla img-fliud" src="'+respuesta[i].urlImagen+'" alt="foto1">');
                     		}
                        else{

                        $("#mostrarProyecto2").append(
                         						'<div  class="row">'+
                         						'<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">'+
                        						'<img class="img-fluid" src="'+respuesta[i].urlImagen+'">'+
                      							'</div>'+
                      							'<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">'+
                      							respuesta[i].tituloProyecto+' <br> 22 % financiado'+
                      							'</div>'+
                      							'<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">'+
                      							'<img class="img-fluid" src="img/heart.png">'+
                      							'</div>'+
                   							    '</div>'+
                   							    '<hr>'
                         		);
														if (i==4) {
                                $("#VerMas").html('<button class="btn btn-outline-dark" type="button" name="button"  onclick="guardarCategoriaM('+respuesta[i].codigoCategoria+');">Ver Todos</button>');
														}

                         		}

                        }

						}


					});
			 }

function guardarCategoriaM(codigo){
	var CategoriaParaMostrar = codigo;
	//alert(CategoriaParaMostrar);
	localStorage.setItem("CategoriaParaMostrar", CategoriaParaMostrar);
	 window.location.href = "proyectos.php";
}

function limpiar(){
	$("#proyectoscategorias").html(" ");
}

function limpiarSeccion(){
	 $("#mostrarProyecto1").html("");
	 $("#mostrarProyecto2").html("");
}

  function validar(){
	validarCampoVacio("txt-nombre");
	validarContrasena("txt-contrasena");
	validarContrasena("txt-contrasena2");
	ValidarCategoria("slc-categoria");

}


/*$(".btn-correo").colorbox({inline:true, width :"50%"});*/



/*var validarCampoVacio = function(id){
	//alert("entra validar campos");
	if (document.getElementById(id).value == " "){
		document.getElementById(id).classList.remove('is-valid');
		document.getElementById(id).classList.add('is-invalid');
	}
	else{
		document.getElementById(id).classList.remove('is-invalid');
		document.getElementById(id).classList.add('is-valid');
	}
};*/

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

		var correo1 = $("#txt-correo").val();
		var correo2 = $("#txt-correo2").val();

		if(correo1 == correo2){
				email.classList.add("is-valid");
		}else {
				email.classList.remove("is-invalid");
		}
}

function validarContrasena(etiqueta){
	var contra1 = $("#txt-contrasena").val();
	var contra2 = $("#txt-contrasena2").val();
	if (etiqueta.value.length<6 ) {
		  etiqueta.classList.remove("is-valid");
	  	etiqueta.classList.add("is-invalid");
	}	else{
		 etiqueta.classList.remove("is-invalid");
		 etiqueta.classList.add("is-valid");
	}


}

$("#cuenta").click(function(){

	var parametros = 'txt-nombre=' + $("#txt-nombre").val() + "&" +
					         'txt-correo='+ $("#txt-correo").val() + "&" +
					         'txt-contrasena='+ $("#txt-contrasena").val()+"&" +
					         'tipoUsuario='+ 2;
//alert(parametros);
   $.ajax({
	   url: 'ajax/guardarUsuario.php',
	   method: 'POST',
	   data: parametros,
     dataType:'json',
	   success: function (respuesta) {
		 //console.log(respuesta);
		 var codigoUsuario = "codigoUsuario="+respuesta[0].codigoUsuario+"&";
         localStorage.setItem("codigoUsuario", codigoUsuario);


	   }
   });

});

$("#cuentaAdm").click(function(){

	var parametros = 'txt-nombre=' + $("#txt-nombreA").val() + "&" +
					 'txt-correo='+ $("#txt-correoA").val() + "&" +
					 'txt-contrasena='+ $("#txt-contrasenaA").val()+"&" +
					 'tipoUsuario='+ 1;
//alert(parametros);
   $.ajax({
	   url: 'ajax/guardarUsuario.php',
	   method: 'POST',
	   data: parametros,
     dataType:'json',
	   success: function (respuesta) {
		   console.log(respuesta);
		   alert("Nuevo Administrador agregado con exito");
console.log("Nuevo Administrador agregado con exito");

	   }
   });

});


function ValidarCategoria (id){
     if (document.getElementById(id).value == ""){
		document.getElementById(id).classList.remove('is-valid');
		document.getElementById(id).classList.add('is-invalid');
	}
	else{

		document.getElementById(id).classList.remove('is-invalid');
		document.getElementById(id).classList.add('is-valid');
		document.getElementById("btn-idea").removeAttribute("disabled");
	}

}

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
				            'txt-contrasenia='+ $("#txt-contrasenia").val();
				            //alert($("#txt-contrasenia").val());
	$.ajax({
		method: 'POST',
		url: 'ajax/loginUsuario.php',
		data: parametros, //URLEncoded
		dataType:'json',
		success: function (respuesta) {
			//Instrucciones a ejecutar cuando responda el servidor
			console.log(respuesta);
			var codigoUsuario = "codigoUsuario="+respuesta.codigoUsuario;
			//alert(respuesta.codigoTipoUsuario);
			console.log(respuesta.codigoUsuario);
            localStorage.setItem("codigoUsuario", codigoUsuario);
            if(respuesta.codigoResultado == 1){
							$("#respuestasecion").html('<h3 class="mensaje2" >Correo o Usuario Incorrecto</h3>');
			}
			else{
					if (respuesta.codigoResultado == 0 && respuesta.codigoTipoUsuario == 2){
                		window.location.href = "creandoProyecto.php";//console.log("Usuario autorizado");
							//	alert("Usuario correcto");
            }else{
                   if (respuesta.codigoResultado== 0 && respuesta.codigoTipoUsuario == 1){
								 window.location.href = "administradores.php";//console.log("Usuario autorizado");
							 }
            }
}
						}
	});
 });





////////empieza tu proyecto 1///////////////////////////

$("#slc-categoria").change(function(){
    if($("#slc-categoria").val() != 0)
     document.getElementById("btn-categoria").removeAttribute("disabled");
    else{
    	if($("#slc-categoria").val() == 0)
      document.getElementById("btn-categoria").setAttribute("disabled", "disabled");
    }

});

$("#btn-categoria").click(function(){
     var categoria= "codigoCategoria="+$("#slc-categoria").val()+"&";
	 localStorage.setItem("categoria", categoria);
	 var CodigoCategoriaNumerico = $("#slc-categoria").val();
      localStorage.setItem("CodigoCategoriaNumerico", CodigoCategoriaNumerico);
 });
//////////////////////////////////////////////////////////

////////////////////empieza tu proyecto2//////////////////////

$("#texa").change(function(){//OB: se activa y se desactiva al hacer click en cualquir otra parte de la pagina
    if($("#texa").val() != "")
     document.getElementById("btn-descripcion").removeAttribute("disabled");
    else{
    	if($("#slc-categoria").val() == null)
      document.getElementById("btn-descripcion").setAttribute("disabled", "disabled");
    }

});

$("#btn-descripcion").click(function(){
	var descripcion = "descripcion="+$("#texa").val()+"&";
      localStorage.setItem("descripcion", descripcion);

 });
////////////////////////////////////////////////////////
///////////////////empiezatu proyecto3/////////////////////

$("#texp").change(function(){
    if($("#texp").val() != 0 )
     document.getElementById("btn-pais").removeAttribute("disabled");
    else{
    	if($("#texp").val() == 0)
      document.getElementById("btn-pais").setAttribute("disabled", "disabled");
    }

});

$("#btn-pais").click(function(){
	var codigoPais = "codigoPais="+$("#texp").val()+"&";
      localStorage.setItem("codigoPais", codigoPais);

 });
 /////////////////////////////////////////////

 $("#mas").click(function(){

	 $.ajax({
	 url:"ajax/mostrar-categorias.php",
	 dataType:'json',
	 success: function (respuesta) {
	//console.log(respuesta);
	 /*	 for (var i=0; i<respuesta.length ; i++){
		 $("#slc-categoria").append(
											'<option value="'+respuesta[i].codigoCategoria+'">'+respuesta[i].nombre+'</option>'

					 );
			 }*/
	 }
 });
});

function concatenar(){
	var parametros =localStorage.getItem("codigoUsuario")+"&"+
					localStorage.getItem("categoria")+
					localStorage.getItem("codigoPais")+
					localStorage.getItem("descripcion")+
                    "meta="+$("#txt-meta").val()+"&"+
                    "plazo="+$("#txt-fecha").val()+"&"+
                    "urlImagen="+ $("#slc-urlImagen").val()+"&"+
                    "tituloProyecto="+$("#txt-titulo").val()+"&"+
                    "Ubicacion="+$("#txta-ubicacion").val();

	return parametros;
//	$("#probando").html('<img src="'+$("#slc-urlImagen").val()+'" >');
}


function cargarUrlsSegunCat(codigoCategoria){
	//alert("entra a la funcion codigo:"+codigoCategoria);
		$.ajax({
			url:"ajax/mostrar-categorias.php",
			dataType:'json',
			success: function (respuesta) {
			//console.log(respuesta);
            for (var i=0; i<respuesta.length ; i++){
            	if(respuesta[i].codigoCategoria == codigoCategoria){
            		//alert("Categoria selecionada:"+respuesta[i].codigoCategoria);
            		//aqui ;es imprimir el slc los url de imagenes, y cuando seleccione obtener la seleccionada y gaurdarla en el local storage
            		for(var j=1; j<=5; j++){
		       $("#slc-urlImagen").append( '<option value="Proyectos/'+respuesta[i].nombre+'/'+respuesta[i].nombre+j+'">'+respuesta[i].nombre+j+'</option>');
		       //console.log('<option value="Proyectos/'+respuesta[i].nombre+'/'+respuesta[i].nombre+j+'">'+respuesta[i].nombre+j+'</option>');
		        }
                 }
			}
	}
     });

}

function GuardarProyecto(){
 var parametros = concatenar();
// console.log(parametros);
    $.ajax({
	   url: 'ajax/guardarProyecto.php',
	   method: 'GET',
	   data: parametros,
	  success: function (respuesta) {
         alert("proyecto Guardado con exito");
	   }
   });
}

$('.carousel').carousel({
  interval: 2000
});
//})
$('.boton').colorbox({inline:true, width:"75%"});
