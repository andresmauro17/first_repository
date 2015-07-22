if (resultado == "listo"){
					$('.error').addClass('alert alert-success').html("<span class='glyphicon glyphicon-ok'></span> Registro exitoso");
				}else{
					$('.error').addClass('alert alert-danger').html("<span class='glyphicon glyphicon-remove'></span> Registro no valido");
				}




				//funcion ajax para enviar los datos del usuario registrado
function enviarDatos(){
	var usuario = $("#usuario-registrado").val();//se almacena el usuario digitado
	var pass = $("#pass-registrado").val();//se almacena el pass digitado
	var dato ="";
	
	$.ajax({//objeto ajax
			url:"php/login/insertar.php",
			success:function(result){//el success se conecta una ves establesca ajax
			 	alert(result);
			},
			data:{
				usuario:usuario,
				pass:pass
			},
			type:"GET"
	});  
}