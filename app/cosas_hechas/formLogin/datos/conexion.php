<?php 

	//esta clase tiene un metodo para conectarse a la database
	class conexion{
		function conectar(){/*metodo conectar a la database*/
			return mysqli_connect("localhost","root","");//se conecta al server con user=root y pass=""
		}
	}

	//-------utilizando la clase conexion y el metodo conectar-------
	$cnn=new conexion();//instancio o creo un nuevo objeto del tipo de clase conexion
	if($cnn->conectar()){//se llama el metodo conectar y si este retorna true entonces
		/*echo "conectado";*/
	}else{
		/*echo "desconectado";*/
	}

?>