$(document).ready(main);/*cuando el documento este listo se ejecuta la funcion main*/




function main(){
	/*alert(' main');*/

		$.ajax({//objeto ajax
			url:"php/login/validar_sesion.php",
			success:function(result){//el success se conecta una ves establesca ajax
			//alert(result);
			}
	});



		$(".date-picker").datepicker();
		height();
		cargar_neveras();
	
}

function validar_session(){

	$.ajax({//objeto ajax
			url:"php/login/validar_sesion.php",
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

//handled click
$('#cargar_nevera').click(function(){
	
		var page = $(this).attr('href');
		$('#content').append().load('content/'+ page +'.php');
		return false;
	

});

/*+++++++++++++++++++++++++funciones+++++++++++++++++++++++++++++++++++++++*/


function height(){
		var winHeight = $(window).height();
		$(".contenedor_app").css("min-height",winHeight);
		$('.wrap').css("min-height",$('.contenedor_app').height());
		$('.login').css("min-height",$('.contenedor_app').height());
}


function fcn_paginacion(id_elemento){
		// alert(nombre);
		$('#content').children().addClass('hidden');
		$('#'+id_elemento).toggleClass('hidden');
}

function cargar_neveras(){
	var panelTemplate;
	$.get('template/nevera/panel.html',function(dom){
	panelTemplate = dom;
	//console.log(panelTemplate);
	//$('#content').append(panelTemplate);
		});


		$.ajax({
			type:'GET',
			url:'datos/nevera/nevera.json',
			success:function(datos){
				//console.log(datos.length);
				for(var i=0;i<datos.length;i++){
					var panel = $(panelTemplate);
					var datos_nevera=datos[i];
					panel.find('#ciudad').append(datos_nevera.ciudad);
					panel.find('#nombre_nevera').append(datos_nevera.nombre_nevera);
					panel.find('#fecha').append(datos_nevera.fecha);
					panel.find('#hora').append(datos_nevera.hora);
					panel.find('#temperatura_entero').append(parseInt(datos_nevera.temperatura));
					//panel.find('#temperatura_decimal').append(parseInt(datos_nevera.temperatura));*/				
					$('#dashboard_fila').append(panel);
				}
			},
			error:function(){
				console.log('Algun error ha ocurrido');
			}
		});



}

function openRegisterModal(){
	showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);
    
}
function showRegisterForm(){
	//alert('paso');
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Registrarse con');
    });
    $('.error').removeClass('alert alert-danger').html('');
       
}