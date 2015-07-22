<?php 

	//esta clase sirve para conectarse a la database
	class conexion{
		function conectar(){
			return mysqli_connect("localhost","root","");//se conecta al server con user=root y pass=""
			// return mysqli_connect("www.instru-online.com","isotronica","1s0tr0n1c4");//se conecta al server con user=root y pass=""
		}
		function conectar_db(){
			return mysqli_select_db($this->conectar(),"mvc");//selecciono la base de datos			
		}
	}



	//-------utilizando la clase conexion y el metodo conectar-------
/*	$cnn=new conexion();//instancio o creo un nuevo objeto del tipo de clase conexion
	if($cnn->conectar()){//se llama el metodo conectar y si este retorna true entonces
		echo "conectado";
	}else{
		echo "desconectado";
	}

	if($cnn->conectar_db()){//se llama el metodo conectar y si este retorna true entonces
		echo "conectado db";
	}else{
		echo "desconectado db";
	}*/

?>