<?php 

//esta clase tiene metodos para get y setear los parametros de los Datos 
// se hace un mapeo de las propiedades de la tabla Datos

class datos_nevera{
	public $idDatos;   
	public $nevera_idNevera;         
	public $hora;                   
	public $fecha;                   
	public $temperatura;      
	public $humedad;                
	public $energia;             

	function get_idDatos(){return $this->idDatos;}   
	function get_nevera_idNevera(){return $this->nevera_idNevera;}         
	function get_hora(){return $this->hora;}                   
	function get_fecha(){return $this->fecha;}                   
	function get_temperatura(){return $this->temperatura;}      
	function get_humedad(){return $this->humedad;}                
	function get_energia(){return $this->energia;}   

	function set_idDatos($idDatos){$this->idDatos=$idDatos;}   
	function set_nevera_idNevera($nevera_idNevera){$this->nevera_idNevera=$nevera_idNevera;}         
	function set_hora($hora){$this->hora=$hora;}                   
	function set_fecha(){$this->fecha=$fecha;}                   
	function set_temperatura($temperatura){$this->temperatura=$temperatura;}      
	function set_humedad($humedad){$this->humedad=$humedad;}                
	function set_energia($energia){$this->energia=$energia;} 
}

?>