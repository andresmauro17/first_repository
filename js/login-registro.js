$(document).ready(ini);



function ini(){
	$('#enviar').attr('disabled',false);
	$('#btnregistrar').attr('disabled',false);
	/*$("#btnregistrar").click(enviarDatos);*/
	
}

/*-----------------------------------register event submit------------------------------------------*/

$("#form-register").submit(function(event) {
	event.preventDefault();/* stop form from submitting normally */
	registrar();
});


//funcion ajax para enviar los datos del usuario registrado
function registrar(){
	
	var form = $("#form-register");
	var alerta="";

	$.ajax({
			type: form.attr('method'),//captura el metodo del formulario
			url: form.attr('action'),
			data: form.serialize(),

			beforeSend: function(){
				//que hacer mientras se envia
				$('#btnregistrar').text('registrando...');
				$('#btnregistrar').attr('disabled',true);
			},
			complete: function(data){
				$('#btnregistrar').text('Registrarse');
				$('#btnregistrar').attr('disabled',false);
			},
			success: function(data){
				// result="true";
				//alert(data);
				if ($.trim(data) == "true"){// el trim es importante ya que los datos retornados tienen espacios
					//alert('listonessss');
					// $('.error').removeClass().html("");
					var chulo="<span class='glyphicon glyphicon-ok'></span> Registro exitoso";
					$('.error').addClass('alert alert-success').html(chulo);
				}
				else {
					
					alerta=data;
					$('.error').addClass('alert alert-danger').html(alerta);
					shakeModal(alerta);
				}
								
			},
			error:function(data){
				//que hacer si se hay un error
				$('.error').addClass('alert alert-danger').html("<span class='glyphicon glyphicon-remove'></span> Registro no valido");
				shakeModal();
			}
		});
		
}

/*-----------------------------------login event submit------------------------------------------*/

$("#form-login").submit(function(event) {
	event.preventDefault();/* stop form from submitting normally */
	validar();
});


function validar(){
	// formulario login validacion
	var form = $("#form-login");

		$.ajax({
			type: form.attr('method'),//captura el metodo del formulario
			url: form.attr('action'),
			data: form.serialize(),

			beforeSend: function(){
				//que hacer mientras se envia
				$('#enviar').text('enviando...');
				$('#enviar').attr('disabled',true);
			},
			complete: function(data){
				$('#enviar').text('ingresar');
				$('#enviar').attr('disabled',false);
			},
			success: function(data){
				//que hacer si se cumplio
				/*alert(data);*/
				//$.trim(result)
				
				if ($.trim(data) =="true"){
					/*alert(data);*/
					crearSession();
				}else{
					/*alert(data);*/
					var alerta="<span class='glyphicon glyphicon-remove'></span> Usuario y contraseña no coincide";
					$('.error').addClass('alert alert-danger').html(alerta);
					shakeModal(alerta);
				}
				
			},
			error:function(data){
				//que hacer si se hay un error
				alert('error');
			}
		});
		
}

function crearSession(){
    var usuario = $("#usuario").val();//se almacena el usuario digitado
	var pass = $("#pass").val();//se almacena el pass digitado	
	
	$.ajax({//objeto ajax
			url:"php/login/admin.php",
			success:function(result){//el success se conecta una ves establesca ajax
			//alert(result);
			if ($.trim(result) =="usuario_completo"){
					/*document.location.href="aplicativo_temporal.php";*/
					document.location.href="app.html";
				}else if($.trim(result) =="usuario_incompleto"){
					/*document.location.href="aplicativo_temporal.php";*/
					document.location.href="app.html";
				}else{
					shakeModal();
				}
			},
			data:{
				usuario:usuario,
				pass:pass
			},
			type:"POST"
	});
       
}


/*---------------------------------------------------------------------------------------------------*/


function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Registrarse con');
    });
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');
        });
        
        $('.modal-title').html('Inicia sesión con');
    });
     $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);
    
}
function openRegisterModal(){
	showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);
    
}


function shakeModal(mensaje_error){

	
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html(mensaje_error);
             $('input[type="password"]').val('');
             setTimeout( function(){
                $('#loginModal .modal-dialog').removeClass('shake');
	}, 1000 );
}