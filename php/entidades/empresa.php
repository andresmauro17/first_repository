<?php 

//esta clase tiene metodos para get y setear los parametros de los usuarios 
// se hace un mapeo de las propiedades de la tabla empresa

class empresa{
	
	public $id;              
	public $nombre;

	function get_id(){
		return $this->id;/*siempre los atributos se llaman sin el caracter $ */
	}
	function set_id($id){/*asigna un valor al atributo*/
		$this->id=$id;
	}
	function get_nombre(){/*obtiene el valor del atributo*/
		return $this->nombre;
	}
	function set_nombre($nombre){/*asigna un valor al atributo*/
		$this->nombre = $nombre;
	}	
}

?>