<?php 

   

class usuarios{

	public $idUsuarios;  
	public $empresa_id;          
	public $nombre;             
	public $login;       
	public $pass;         
	public $tipo;  

	function getIdUsuarios() {
		return $idUsuarios;
	}
	function setIdUsuarios($idUsuarios) {
		$this->idUsuarios = $idUsuarios;
	}
	function getEmpresa_id() {
		return $empresa_id;
	}
	function setEmpresa_id($empresaId) {
		$this->empresa_id = $empresaId;
	}
	function getNombre() {
		return $nombre;
	}
	function setNombre($nombre) {
		$this->nombre = $nombre;
	}
	function getLogin() {
		return $login;
	}
	function setLogin($login) {
		$this->login = $login;
	}
	function getPass() {
		return $pass;
	}
	function setPass($pass) {
		$this->pass = $pass;
	}
	function getTipo() {
		return $tipo;
	}
	function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	
}


	//-------utilizando la clase-------
	/*$cnn = new usuarios();//instancio o creo un nuevo objeto del tipo de clase conexion*/
	/*if($cnn->conectar()){//se llama el metodo conectar y si este retorna true entonces
		echo "conectado";
	}else{
		echo "desconectado";
	}*/


?>