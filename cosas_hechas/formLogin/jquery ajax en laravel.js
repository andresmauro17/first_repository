var form = $("el formulario id o clase");
form.bind("evento",function(){

	$.ajax({
		type: form.attr("method"),
		url: form.attr("action"),
		data: form.serialize(),

		beforeSend: function(){
			//que hacer mientras se envia
		}
		complete.function(data){
			//que hacer mientras se completo
		}
		success.function(data){
			//que hacer si se cumplio
		}
		error.function(data){
			//que hacer si se cumplio la peticion
		}

	});
	return false; //para que el formulario no se envie

});