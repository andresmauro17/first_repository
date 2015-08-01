<?php 
	
	//este script es llamado por ajax para insertar los usuarios

	include "../controlador/usuariosControlador.php";

	
	//------------validacion de los datos ingresados ------------

	//si cualquiera de los dos campos exiten retorna falso
	if (isset($_GET["usuario"])||isset($_GET["pass"])) {//isset:siexiste

		//si cualquiera de los campos estan en blanco retorna also
		if (trim($_GET["usuario"])==""||trim($_GET["pass"])=="") {//trim borra espacios en blanco

			echo "false";
			
		}else{
			$usuariosCon=new usuariosControlador();//se instancia el objeto con la clase que tiene metodos de insertar usuarios
			
			//ejecuta el metodo  insertar usuarios, si esta accion es correcta retorna true entonces echo true
			if($usuariosCon->insertarUsuarios($_GET["usuario"],$_GET["pass"])){
				echo "true";
				/*echo $_GET["usuario"]."<br>";
				echo $_GET["pass"]."<br>";*/
			}else{
				echo "false";
			}
		}			
	}else{
			echo "false";
	}

?>

 