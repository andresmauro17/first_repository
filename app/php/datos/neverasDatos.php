<?php 
//esta clase tiene el metodo para insertar los neveras en la base de datos
	include "../entidades/neveras.php";
	include "conexion.php";

	class neverasDatos{
		function insertarneveras($empresa_id, $cuidad, $nombreNevera, $sensor, $activa, $modificado, $temMax, $temMin, $humeMax, $humeMin, $telefonoMarcado, $telefonoMarcadoB, $telefonoMarcadoC, $telefonoMarcadoD, $direccion, $fechaCalificacion, $nombreTecnico, $notas, $marca, $modelo, $SERIAL, $capacidad, $ciudadCompra, $fechaCompra, $fases, $voltaje, $amperaje, $marcaUnidad, $refUnidad, $refrigerante, $periodicidad, $tipoDeControlador, $refControlador, $patronCalibracion, $ultimaCalibracion, $actualizando, $potencia, $numActivo, $tipoNevera, $compresor){

			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$neveras = new neveras();//creo un objeto del tipo clase neveras 

			$neveras->set_empresa_id($empresa_id);                                      
			$neveras->set_cuidad($cuidad);                              
			$neveras->set_nombreNevera($nombreNevera);                                          
			$neveras->set_sensor($sensor);                              
			$neveras->set_activa($activa);                              
			$neveras->set_modificado($modificado);                                      
			$neveras->set_temMax($temMax);                              
			$neveras->set_temMin($temMin);                              
			$neveras->set_humeMax($humeMax);                                
			$neveras->set_humeMin($humeMin);                                
			$neveras->set_telefonoMarcado($telefonoMarcado);                                                
			$neveras->set_telefonoMarcadoB($telefonoMarcadoB);                                                  
			$neveras->set_telefonoMarcadoC($telefonoMarcadoC);                                                  
			$neveras->set_telefonoMarcadoD($telefonoMarcadoD);                                                  
			$neveras->set_direccion($direccion);                                    
			$neveras->set_fechaCalificacion($fechaCalificacion);                                                    
			$neveras->set_nombreTecnico($nombreTecnico);                                            
			$neveras->set_notas($notas);                            
			$neveras->set_marca($marca);                            
			$neveras->set_modelo($modelo);                              
			$neveras->set_SERIAL($SERIAL);                              
			$neveras->set_capacidad($capacidad);                                    
			$neveras->set_ciudadCompra($ciudadCompra);                                          
			$neveras->set_fechaCompra($fechaCompra);                                        
			$neveras->set_fases($fases);                            
			$neveras->set_voltaje($voltaje);                                
			$neveras->set_amperaje($amperaje);                                  
			$neveras->set_marcaUnidad($marcaUnidad);                                        
			$neveras->set_refUnidad($refUnidad);                                    
			$neveras->set_refrigerante($refrigerante);                                          
			$neveras->set_periodicidad($periodicidad);                                          
			$neveras->set_tipoDeControlador($tipoDeControlador);                                                    
			$neveras->set_refControlador($refControlador);                                              
			$neveras->set_patronCalibracion($patronCalibracion);                                                    
			$neveras->set_ultimaCalibracion($ultimaCalibracion);                                                    
			$neveras->set_actualizando($actualizando);                                          
			$neveras->set_potencia($potencia);                                  
			$neveras->set_numActivo($numActivo);                                    
			$neveras->set_tipoNevera($tipoNevera);                                       
			$neveras->set_compresor($compresor);  

			$sql = "INSERT INTO nevera (empresa_id, cuidad, nombreNevera, sensor, activa, modificado, temMax, temMin, humeMax, humeMin, telefonoMarcado, telefonoMarcadoB, telefonoMarcadoC, telefonoMarcadoD, direccion, fechaCalificacion, nombreTecnico, notas, marca, modelo, SERIAL, capacidad, ciudadCompra, fechaCompra, fases, voltaje, amperaje, marcaUnidad, refUnidad, refrigerante, periodicidad, tipoDeControlador, refControlador, patronCalibracion, ultimaCalibracion, actualizando, potencia, numActivo, tipoNevera, compresor ) VALUES('".$neveras->empresa_id."', '".$neveras->cuidad."', '".$neveras->nombreNevera."', '".$neveras->sensor."', '".$neveras->activa."', '".$neveras->modificado."', '".$neveras->temMax."', '".$neveras->temMin."', '".$neveras->humeMax."', '".$neveras->humeMin."', '".$neveras->telefonoMarcado."', '".$neveras->telefonoMarcadoB."', '".$neveras->telefonoMarcadoC."', '".$neveras->telefonoMarcadoD."', '".$neveras->direccion."', '".$neveras->fechaCalificacion."', '".$neveras->nombreTecnico."', '".$neveras->notas."', '".$neveras->marca."', '".$neveras->modelo."', '".$neveras->SERIAL."', '".$neveras->capacidad."', '".$neveras->ciudadCompra."', '".$neveras->fechaCompra."', '".$neveras->fases."', '".$neveras->voltaje."', '".$neveras->amperaje."', '".$neveras->marcaUnidad."', '".$neveras->refUnidad."', '".$neveras->refrigerante."', '".$neveras->periodicidad."', '".$neveras->tipoDeControlador."', '".$neveras->refControlador."', '".$neveras->patronCalibracion."', '".$neveras->ultimaCalibracion."', '".$neveras->actualizando."', '".$neveras->potencia."', '".$neveras->numActivo."', '".$neveras->tipoNevera."', '".$neveras->compresor."')";//se crea la consulta  de la db


			$respuesta= $cnn->insertDataSQL($sql,"amarey");
			return $respuesta;

		}
		
			
	}
		
		


	//utilizando el metodo para insertar neveras
	$objeto= new neverasDatos();	          
	$empresa_id="11";                   
	$cuidad="cali";                       
	$nombreNevera="aleja";                 
	$sensor="000000000000";                       
	$activa="1";                       
	$modificado="1";                   
	$temMax="8";                       
	$temMin="2";                       
	$humeMax="60";                      
	$humeMin="30";                      
	$telefonoMarcado="3147996626";              
	$telefonoMarcadoB="3147996626";             
	$telefonoMarcadoC="3147996626";             
	$telefonoMarcadoD="3147996626";             
	$direccion="";                    
	$fechaCalificacion="";            
	$nombreTecnico="";                
	$notas="";                        
	$marca="";                        
	$modelo="";                       
	$SERIAL="";                       
	$capacidad="";                    
	$ciudadCompra="";                 
	$fechaCompra="";                  
	$fases="";                        
	$voltaje="";                      
	$amperaje="";                     
	$marcaUnidad="";                  
	$refUnidad="";                    
	$refrigerante="";                 
	$periodicidad="";                 
	$tipoDeControlador="";            
	$refControlador="";               
	$patronCalibracion="";            
	$ultimaCalibracion="";            
	$actualizando="";                 
	$potencia="";                     
	$numActivo="";                    
	$tipoNevera="";                   
	$compresor=""; 


	$respuesta=$objeto->insertarneveras($empresa_id, $cuidad, $nombreNevera, $sensor, $activa, $modificado, $temMax, $temMin, $humeMax, $humeMin, $telefonoMarcado, $telefonoMarcadoB, $telefonoMarcadoC, $telefonoMarcadoD, $direccion, $fechaCalificacion, $nombreTecnico, $notas, $marca, $modelo, $SERIAL, $capacidad, $ciudadCompra, $fechaCompra, $fases, $voltaje, $amperaje, $marcaUnidad, $refUnidad, $refrigerante, $periodicidad, $tipoDeControlador, $refControlador, $patronCalibracion, $ultimaCalibracion, $actualizando, $potencia, $numActivo, $tipoNevera, $compresor);
	echo $respuesta;

	


?>