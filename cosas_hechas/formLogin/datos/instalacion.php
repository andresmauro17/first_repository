<?php 

	//este script crea la base de datos de los usuarios


	include "conexion.php";//esta clase tiene un metodo conectar para la conexion 


	//---------funcion crear base de datos--------------
	function crearBd(){
		$cnn=new conexion();/*instancio cnn como de tipo conexion*/
		$con=$cnn->conectar();/*guardo lo que me arroja el metodo conectar (la peticion de conexion)*/
		$sql="CREATE DATABASE formLogin";

		if(mysqli_query($con,$sql)){/*creo la base de datos*/
			echo "base de datos creada";
			echo $sql;
		}
		mysqli_close($con);/*cierro la conexion  de la linea anterior*/
	}

	//---------funcion crear tabla de la database--------------
	function crearTabla(){
		$cnn=new conexion();//instancion cnn como de tipo conexion
		$con=$cnn->conectar();//guardo lo que me arroja el metodo conectar (la peticion de conexion)
		mysqli_select_db($con,"formLogin");/*selecciono la base de datos*/
		
		/*----- creo una tabla------*/
		$sql="CREATE TABLE usuarios(
			id INT(11) NOT NULL AUTO_INCREMENT, 
			usuario CHAR(50),
			contrasena CHAR(50),
			PRIMARY KEY(id)
		)";
		
		//creo la tabla y si es correcto imprime tabla creada
		if(mysqli_query($con,$sql)){
			echo "tabla creada";
			echo $sql;
		}
		mysqli_close($con);/*cierro la conexion  de la linea anterior*/
	}

/*crearTabla();//llamo la funcion para crear la tabla*/

 ?>