<?php
	//esta clase controla el acesso a las clases para crear un usuario,es un retorno que llama el metodo para insertar usuarios
	include "../datos/usuariosDatos.php";
	
	class usuariosControlador{
		//---metodo insertar usuarios el cual llama el objeto de la otra clase---
		function insertarUsuarios($usuario,$pass){
			$obj =new usuariosDatos;
			return $obj->insertarUsuarios($usuario,$pass);
		}
		function validar($usuario,$pass){
			$obj =new usuariosDatos;
			return $obj->validar($usuario,$pass);
		}

		function validar_usuario($usuario){
			$obj =new usuariosDatos;
			return $obj->validar_usuario($usuario);
		}
	
		function getId($usuario,$pass){
			$obj =new usuariosDatos;
			return $obj->getId($usuario,$pass);
		}
		
	}

/*	$objeto= new usuariosControlador();
	$respuesta= $objeto->insertarUsuarios('olas','mundos');
	echo $respuesta;
*/

/*	$objeto= new usuariosControlador();
	$respuesta= $objeto->validar_usuario('maleja019@gmail.com');
	echo "<pre>";
	print_r($respuesta);
	echo "</pre>";*/



	
?>

