<?php 
	
	//este script es llamado por ajax para insertar los usuarios

	include "../controlador/usuariosControlador.php";

	
	//------------validacion de los datos ingresados ------------

	//si cualquiera de los dos campos exiten retorna falso
	if (isset($_GET["usuario"])||isset($_GET["pass"])) {//isset:siexiste

		//si cualquiera de los campos estan en blanco retorna falso
		if (trim($_GET["usuario"])==""||trim($_GET["pass"])=="") {//trim borra espacios en blanco

			echo "Diligencie ambos campos";
			
		}else{
			$usuariosCon=new usuariosControlador();//se instancia el objeto con la clase que tiene metodos de insertar usuarios
			
			//ejecuta el metodo  insertar usuarios, si esta accion es correcta retorna true entonces echo true
			
			if(!empty($usuariosCon->validar_usuario($_GET["usuario"]))){// se valida si ya existe el usuario
				echo "El usuario ya existe";
			}
			else{//si el usuario no existe se puede realizar el registro
				if($usuariosCon->insertarUsuarios($_GET["usuario"],md5($_GET["pass"]))){
				echo "true";
				/*echo $_GET["usuario"]."<br>";
				echo $_GET["pass"]."<br>";*/
				}else{
					echo "no se pudo completar el registro";
				}
			}

			
			
		}			
	}else{
			echo "Diligencie ambos campos";
	}

	/*$usuariosCon=new usuariosControlador();
	$respuesta=$usuariosCon->validar_usuario('maleja019@gmail.com');
	echo "<pre>";
	print_r($respuesta);
	echo "</pre>";*/

?>

 