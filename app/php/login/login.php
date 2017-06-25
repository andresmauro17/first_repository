<?php 
	
	//este script es llamado por ajax para validar los usuarios

	include "../controlador/usuariosControlador.php";

	
	//------------validacion de los datos ingresados ------------

	//si cualquiera de los dos campos exiten fueron pasado en el post no retorna falso
	if (isset($_POST["usuario"])||isset($_POST["pass"])) {//isset:siexiste


		//si cualquiera de los campos estan en blanco retorna falso
		if (trim($_POST["usuario"])==""||trim($_POST["pass"])=="") {//trim borra espacios en blanco

			echo "false";
			
		}else{//si los espacios post no estan en blnaco continue validando
			$usuariosCon=new usuariosControlador();//se instancia el objeto con la clase que tiene metodos de insertar usuarios
			$usuario=$usuariosCon->validar($_POST["usuario"],$_POST["pass"]);//esta linea retorna el registro query asociado a dicho usuaio
			
			if(count($usuario)>0){

				//$idUsuarios = $usuariosCon->getId($_POST["usuario"],md5($_POST["pass"]));
				session_start();
				$_SESSION["idUsuarios"]=$usuario["idUsuarios"];
				$_SESSION["empresa_id"]=$usuario["empresa_id"];
				$_SESSION["nombre"]=$usuario["nombre"];
				$_SESSION["login"]=$usuario["login"];
				//$_SESSION["pass"]=$usuario["pass"];
				$_SESSION["tipo"]=$usuario["tipo"];
				
				echo "true";
			}else{
				echo "false";
			}
		}			
	}else{//si no existe nada de post en cualquiera de los dos campos retorna falso
			echo "false";
	}


//utilizando el metodo para leer el id usuarios
/*	$objeto= new usuariosDatos();
	$respuesta=$objeto->validar('cali','thebest1');
	echo "<pre>";
	print_r($respuesta);
	echo "</pre>";*/
/*
	$usuariosCon=new usuariosControlador();//se instancia el objeto con la clase que tiene metodos de insertar usuarios
	$idUsuarios = $usuariosCon->getId('cali',md5('thebest1'));
	$_SESSION["idUsuarios"]=$idUsuarios;				
	echo $idUsuarios;*/


?>