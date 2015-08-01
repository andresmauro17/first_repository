<?php 

	/*esta clase tiene el metodo para insertar los usuarios en la base de datos*/
	include "../entidades/usuarios.php";
	include "conexion.php";

	class usuariosDatos{

		//-----------metodo insertar usuarios-----------
		function insertarUsuarios($usuario,$pass){
			
			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$con= $cnn->conectar();//se usa el metodo para conectar la base de datos

			$usuarios = new usuarios();//creo un objeto del tipo clase usuarios 
			$usuarios->usuario=$usuario;//le paso los parametros (setter) al atributo usuarios del objeto
			$usuarios->contrasena=$pass;//le paso los parametros (setter) al atributo pass del objeto

			mysqli_select_db($con,"formLogin");//selecciono la base de datos		
			$sql = "INSERT INTO usuarios (usuario,contrasena) VALUES('".$usuarios->usuario."','".$usuarios->contrasena."')";//se crea la consulta  de la db

			//se hace la consulta para insertar el usuario y si es correcta retorna true
			if (mysqli_query($con,$sql)) {
				return true;//retorna true
			}else{
				return false;//retorna false
			}
			mysqli_close($con);//cierro la conexion  de la linea anterior
		}
		//no todos los usuarios son registrables
		function validar($usuario,$pass){
			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$con= $cnn->conectar();//se usa el metodo para conectar la base de datos

			$usuarios = new usuarios();//creo un objeto del tipo clase usuarios 
			$usuarios->usuario=$usuario;//se almacena los parametros (setter) al atributo usuarios del objeto
			$usuarios->contrasena=$pass;//se almacenaarametros (setter) al atributo pass del objeto

			mysqli_select_db($con,"formLogin");//selecciono la base de datos
			//la consulta toma los valores ingresados en los text box y nira si ya existen en la base de datos		
			$sql = "SELECT * FROM usuarios WHERE usuario='".$usuarios->usuario."'and contrasena='".$usuarios->contrasena."' ";//se crea la consulta  de la db
			$consulta=mysqli_query($con,$sql);//ejecuto la consulta y la almaceno
			$fila=mysqli_fetch_array($consulta);//

			if($fila>0){//si se encontro una fila con el usuario registrado
				// se validan los datos				
				if($fila['usuario']==$usuarios->usuario && $fila['contrasena']==$usuarios->contrasena){
					return true;
				}
			}else{
				return false;
			}

		}
	}

	//utilizando el metodo para insertar usuarios
	/*$objeto= new usuariosDatos();
	$objeto->insertarUsuarios('andres','aaaaa');*/


?>