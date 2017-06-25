<?php 


class sesion {
	
	public $fecha;
	public $hora;	
	public $usuarioDTO;

	function getFecha() {
		return $fecha;
	}

	function setFecha($fecha) {
		$this->fecha = $fecha;
	}

	function getHora() {
		return $hora;
	}

	function setHora(Time $hora) {
		$this->hora = $hora;
	}

	function setUsuarioDTO(UsuarioDTO $usuarioDTO) {
		$this->usuarioDTO = $usuarioDTO;
	}

	function getUsuarioDTO() {
		return $usuarioDTO;
	}
	
	function getIdUsuarioDTO() {
		return $usuarioDTO;
	}
}


 ?>


 