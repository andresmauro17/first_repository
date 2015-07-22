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
	}
?>