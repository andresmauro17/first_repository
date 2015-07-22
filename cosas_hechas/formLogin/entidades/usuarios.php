<?php 

//esta clase tiene metodos para get y setear los parametros de los usuarios 
// se hace un mapero de las propiedades de la tabla usuarios

class usuarios{
	
	public $id;
	public $usuario;
	public $contrasena;

	function get_id(){
		return $this->id;/*siempre los atributos se llaman sin el caracter $ */
	}
	function set_id($id){/*asigna un valor al atributo*/
		$this->id=$id;
	}
	function get_usuario(){/*obtiene el valor del atributo*/
		return $this->usuario;
	}
	function set_usuario($usuario){/*asigna un valor al atributo*/
		$this->usuario = $usuario;
	}	
	function get_contrasena(){/*obtiene el valor al atributo*/
		return $this->contrasena;
	}
	function set_contrasena($contrasena){/*asigna un valor al atributo*/
		$this->contrasena=$contrasena;
	}
}

?>