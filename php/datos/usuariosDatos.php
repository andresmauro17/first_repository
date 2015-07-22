<?php 

	//esta clase tiene el metodo para insertar los usuarios en la base de datos
	include "../entidades/usuarios.php";
	include "conexion.php";

	class usuariosDatos{

		//-----------metodo insertar usuarios-----------
		function insertarUsuarios($usuario,$pass){
			
			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$usuarios = new usuarios();//creo un objeto del tipo clase usuarios 
			$usuarios->login=$usuario;//le paso los parametros (setter) al atributo usuarios del objeto
			$usuarios->pass=$pass;//le paso los parametros (setter) al atributo pass del objeto
			$sql = "INSERT INTO usuarios (login,pass) VALUES('".$usuarios->login."','".$usuarios->pass."')";//se crea la consulta  de la db
			$respuesta= $cnn->insertDataSQL($sql,"amarey");
			return $respuesta;
			
		}
		
		function validar($usuario,$pass){
				
			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$usuarios = new usuarios();//creo un objeto del tipo clase usuarios 
			$usuarios->login=$usuario;//se almacena los parametros (setter) al atributo usuarios del objeto
			$usuarios->pass=$pass;//se almacenaarametros (setter) al atributo pass del objeto

			//$sql = "SELECT * FROM usuarios WHERE login='".$usuarios->login."'and pass='".$usuarios->pass."' ";//se crea la consulta  de la db
			$sql ="CALL validarLogin('".$usuarios->login."','".$usuarios->pass."');";
			$fila= $cnn->getRowSQL($sql,"amarey");
			/*echo $sql;*/
			if($fila>0){//si se encontro una fila con el usuario registrado
				// se validan los datos				
				//if($fila['login']==$usuarios->login && $fila['pass']==$usuarios->pass){
					return $fila;
				//}
			}

		}

		function validar_usuario($usuario){
				
			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$usuarios = new usuarios();//creo un objeto del tipo clase usuarios 
			$usuarios->login=$usuario;//se almacena los parametros (setter) al atributo usuarios del objeto
			
	
			$sql = "SELECT login FROM usuarios WHERE login='".$usuarios->login."'LIMIT 1;";
			$fila= $cnn->getRowSQL($sql,"amarey");
			
			if($fila>0){				
					return $fila;				
			}

		}



		function getId($usuario,$pass){
			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$usuarios = new usuarios();//creo un objeto del tipo clase usuarios 
			$usuarios->login=$usuario;//se almacena los parametros (setter) al atributo usuarios del objeto
			$usuarios->pass=$pass;//se almacenaarametros (setter) al atributo pass del objeto
	
			$sql = "SELECT * FROM usuarios WHERE login='".$usuarios->login."'and pass='".$usuarios->pass."' ";//se crea la consulta  de la db
			$fila= $cnn->getRowSQL($sql,"amarey");

			if($fila>0){//si se encontro una fila con el usuario registrado
				// se validan los datos				
				if($fila['login']==$usuarios->login && $fila['pass']==$usuarios->pass){
					return $fila["idUsuarios"];
				}
			}else{
				return 0;
			}

		}

	}
	


/*	//utilizando el metodo para usuarios
	$objeto= new usuariosDatos();
	$respuesta=$objeto->validar('cali',md5('thebest1'));
	echo "<pre>";
	print_r($respuesta);
	echo "</pre>";

*/
	//utilizando el metodo para insertar usuarios
	/*$objeto= new usuariosDatos();
	$respuesta= $objeto->insertarUsuarios('andres','aaaaa');
	echo $respuesta;*/

	/*//utilizando el metodo para leer el id usuarios
	$objeto= new usuariosDatos();
	$respuesta=$objeto->validar('ola','thebest1');
	echo "<pre>";
	print_r($respuesta);
	echo "</pre>";*/
	
	//utilizando el metodo para leer el id usuarios
	/*$objeto= new usuariosDatos();
	$respuesta=$objeto->getId('usuario1',md5('thebest1'));
	echo $respuesta;
*/

//utilizando el metodo para usuarios
/*	$objeto= new usuariosDatos();
	$respuesta=$objeto->validar_usuario('andres@uao.mx');
	echo "<pre>";
	print_r($respuesta);
	echo "</pre>";*/


?>