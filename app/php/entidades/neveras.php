<?php 

//esta clase tiene metodos para get y setear los parametros de los usuarios 
// se hace un mapeo de las propiedades de la tabla mysql neveras

class neveras{
	
	public $idNevera;                    
	public $empresa_id;                   
	public $cuidad;                       
	public $nombreNevera;                 
	public $sensor;                       
	public $activa;                       
	public $modificado;                   
	public $temMax;                       
	public $temMin;                       
	public $humeMax;                      
	public $humeMin;                      
	public $telefonoMarcado;              
	public $telefonoMarcadoB;             
	public $telefonoMarcadoC;             
	public $telefonoMarcadoD;             
	public $direccion;                    
	public $fechaCalificacion;            
	public $nombreTecnico;                
	public $notas;                        
	public $marca;                        
	public $modelo;                       
	public $SERIAL;                       
	public $capacidad;                    
	public $ciudadCompra;                 
	public $fechaCompra;                  
	public $fases;                        
	public $voltaje;                      
	public $amperaje;                     
	public $marcaUnidad;                  
	public $refUnidad;                    
	public $refrigerante;                 
	public $periodicidad;                 
	public $tipoDeControlador;            
	public $refControlador;               
	public $patronCalibracion;            
	public $ultimaCalibracion;            
	public $actualizando;                 
	public $potencia;                     
	public $numActivo;                    
	public $tipoNevera;                   
	public $compresor; 


	function get_idNevera(){return $this->idNevera;}           
	function get_empresa_id(){return $this->empresa_id;}            
	function get_cuidad(){return $this->cuidad;}            
	function get_nombreNevera(){return $this->nombreNevera;}            
	function get_sensor(){return $this->sensor;}            
	function get_activa(){return $this->activa;}            
	function get_modificado(){return $this->modificado;}            
	function get_temMax(){return $this->temMax;}            
	function get_temMin(){return $this->temMin;}            
	function get_humeMax(){return $this->humeMax;}            
	function get_humeMin(){return $this->humeMin;}            
	function get_telefonoMarcado(){return $this->telefonoMarcado;}            
	function get_telefonoMarcadoB(){return $this->telefonoMarcadoB;}            
	function get_telefonoMarcadoC(){return $this->telefonoMarcadoC;}            
	function get_telefonoMarcadoD(){return $this->telefonoMarcadoD;}            
	function get_direccion(){return $this->direccion;}            
	function get_fechaCalificacion(){return $this->fechaCalificacion;}            
	function get_nombreTecnico(){return $this->nombreTecnico;}            
	function get_notas(){return $this->notas;}            
	function get_marca(){return $this->marca;}            
	function get_modelo(){return $this->modelo;}            
	function get_SERIAL(){return $this->SERIAL;}            
	function get_capacidad(){return $this->capacidad;}            
	function get_ciudadCompra(){return $this->ciudadCompra;}            
	function get_fechaCompra(){return $this->fechaCompra;}            
	function get_fases(){return $this->fases;}            
	function get_voltaje(){return $this->voltaje;}            
	function get_amperaje(){return $this->amperaje;}            
	function get_marcaUnidad(){return $this->marcaUnidad;}            
	function get_refUnidad(){return $this->refUnidad;}            
	function get_refrigerante(){return $this->refrigerante;}            
	function get_periodicidad(){return $this->periodicidad;}            
	function get_tipoDeControlador(){return $this->tipoDeControlador;}            
	function get_refControlador(){return $this->refControlador;}            
	function get_patronCalibracion(){return $this->patronCalibracion;}            
	function get_ultimaCalibracion(){return $this->ultimaCalibracion;}            
	function get_actualizando(){return $this->actualizando;}            
	function get_potencia(){return $this->potencia;}            
	function get_numActivo(){return $this->numActivo;}            
	function get_tipoNevera(){return $this->tipoNevera;}             
	function get_compresor(){return $this->compresor;} 



	function set_idNevera($idNevera){$this->idNevera=$idNevera;}           
	function set_empresa_id($empresa_id){$this->empresa_id=$empresa_id;}            
	function set_cuidad($cuidad){$this->cuidad=$cuidad;}            
	function set_nombreNevera($nombreNevera){$this->nombreNevera=$nombreNevera;}            
	function set_sensor($sensor){$this->sensor=$sensor;}            
	function set_activa($activa){$this->activa=$activa;}            
	function set_modificado($modificado){$this->modificado=$modificado;}            
	function set_temMax($temMax){$this->temMax=$temMax;}            
	function set_temMin($temMin){$this->temMin=$temMin;}            
	function set_humeMax($humeMax){$this->humeMax=$humeMax;}            
	function set_humeMin($humeMin){$this->humeMin=$humeMin;}            
	function set_telefonoMarcado($telefonoMarcado){$this->telefonoMarcado=$telefonoMarcado;}            
	function set_telefonoMarcadoB($telefonoMarcadoB){$this->telefonoMarcadoB=$telefonoMarcadoB;}            
	function set_telefonoMarcadoC($telefonoMarcadoC){$this->telefonoMarcadoC=$telefonoMarcadoC;}            
	function set_telefonoMarcadoD($telefonoMarcadoD){$this->telefonoMarcadoD=$telefonoMarcadoD;}            
	function set_direccion($direccion){$this->direccion=$direccion;}            
	function set_fechaCalificacion($fechaCalificacion){$this->fechaCalificacion=$fechaCalificacion;}            
	function set_nombreTecnico($nombreTecnico){$this->nombreTecnico=$nombreTecnico;}            
	function set_notas($notas){$this->notas=$notas;}            
	function set_marca($marca){$this->marca=$marca;}            
	function set_modelo($modelo){$this->modelo=$modelo;}            
	function set_SERIAL($SERIAL){$this->SERIAL=$SERIAL;}            
	function set_capacidad($capacidad){$this->capacidad=$capacidad;}            
	function set_ciudadCompra($ciudadCompra){$this->ciudadCompra=$ciudadCompra;}            
	function set_fechaCompra($fechaCompra){$this->fechaCompra=$fechaCompra;}            
	function set_fases($fases){$this->fases=$fases;}            
	function set_voltaje($voltaje){$this->voltaje=$voltaje;}            
	function set_amperaje($amperaje){$this->amperaje=$amperaje;}            
	function set_marcaUnidad($marcaUnidad){$this->marcaUnidad=$marcaUnidad;}            
	function set_refUnidad($refUnidad){$this->refUnidad=$refUnidad;}            
	function set_refrigerante($refrigerante){$this->refrigerante=$refrigerante;}            
	function set_periodicidad($periodicidad){$this->periodicidad=$periodicidad;}            
	function set_tipoDeControlador($tipoDeControlador){$this->tipoDeControlador=$tipoDeControlador;}            
	function set_refControlador($refControlador){$this->refControlador=$refControlador;}            
	function set_patronCalibracion($patronCalibracion){$this->patronCalibracion=$patronCalibracion;}            
	function set_ultimaCalibracion($ultimaCalibracion){$this->ultimaCalibracion=$ultimaCalibracion;}            
	function set_actualizando($actualizando){$this->actualizando=$actualizando;}            
	function set_potencia($potencia){$this->potencia=$potencia;}            
	function set_numActivo($numActivo){$this->numActivo=$numActivo;}            
	function set_tipoNevera($tipoNevera){$this->tipoNevera=$tipoNevera;}             
	function set_compresor($compresor){$this->compresor=$compresor;} 
	
}

?>