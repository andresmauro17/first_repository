$(document).ready(ini);

function ini(){
	$("#btnregistrar").click(enviarDatos);
	$("#singin").click(validar);
}

//funcion ajax para enviar los datos del usuario registrado
function enviarDatos(){
	var usuario = $("#usuario").val();//se almacena el usuario digitado
	var pass = $("#pass").val();//se almacena el pass digitado
	
	
	$.ajax({//objeto ajax
			url:"insertar.php",			
			success:function(result){//el success se conecta una ves establesca ajax
				alert(result);
				if (result =="true"){
					$('#resultado').html("se ha registrado el usuario correctamentente");
				}else{
					$('#resultado').html(result);	
				}
			},
			data:{
				usuario:usuario,
				pass:pass
			},
			type:"GET"
	});  
}

//funcion ajax para enviar los datos del usuario registrado
function validar(){
	var usuario = $("#usuario").val();//se almacena el usuario digitado
	var pass = $("#pass").val();//se almacena el pass digitado	
	
	$.ajax({//objeto ajax
			url:"validar.php",			
			success:function(result){//el success se conecta una ves establesca ajax
				/*alert(result);*/
				if (result =="true"){
					document.location.href="admin.php";
				}else{
					$('#resultado').html("<div class='alert alert-danger' role='alert'><b>Acceso denegado,</b> no se pudo comprobar el usuario</div>");	
				}
			},
			data:{
				usuario:usuario,
				pass:pass
			},
			type:"POST"
	});  
}	