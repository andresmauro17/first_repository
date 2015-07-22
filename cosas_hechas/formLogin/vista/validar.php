<?php 
	
	//este script es llamado por ajax para validar los usuarios

	include "../controlador/usuariosControlador.php";

	
	//------------validacion de los datos ingresados ------------

	//si cualquiera de los dos campos exiten retorna falso
	if (isset($_POST["usuario"])||isset($_POST["pass"])) {//isset:siexiste

		//si cualquiera de los campos estan en blanco retorna also
		if (trim($_POST["usuario"])==""||trim($_POST["pass"])=="") {//trim borra espacios en blanco

			echo "false";
			
		}else{
			$usuariosCon=new usuariosControlador();//se instancia el objeto con la clase que tiene metodos de insertar usuarios
			
			//ejecuta el metodo  insertar usuarios, si esta accion es correcta retorna true entonces echo true
			if($usuariosCon->validar($_POST["usuario"],$_POST["pass"])){
				session_start();
				$_SESSION["usuario"]=$_POST["usuario"];
				$_SESSION["pass"]=$_POST["pass"];
				echo "true";
			}else{
				echo "false";
			}
		}			
	}else{
			echo "false";
	}






?>