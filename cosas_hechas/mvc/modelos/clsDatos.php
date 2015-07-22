<?php

//esta clase tiene el metodo para insertar los usuarios en la base de datos
	include "conexion.php";

	class clsDatos{

		private $conexion;

		public function __construct(){

			$cnn = new conexion();//instancia objeto de conexion de base de datos
			$this->conexion = $cnn->conectar();//se usa el metodo para conectar la base de datos
			mysqli_select_db($this->conexion,"mvc");
			//$sql ="SELECT * FROM tpersona WHERE cedula='1130677766'";			
		/*	$sql = "select *, date_format(fechanacimiento, '%d/%m/%Y') as fechanacimiento from tpersona where(cedula='1130677766')";
			$consulta = mysqli_query($this->conexion,$sql);//ejecuto la consulta y la almaceno
			$fila = mysqli_fetch_array($consulta);
			echo $fila[0];
			echo $fila[1];
			echo $fila[2];
			echo $fila[3];
			echo $fila[4];
			echo $fila[5];
			echo $fila[6];
			echo $fila[7];
			echo $fila[8];*/
					

		}		
		
		public function __destruct(){//se destruye la clase creada
		
		}

		/*public function filtro($slq){
				$result = mysqli_query($slq, $this->conexion);
				return $result;
		}*/
		public function filtro($slq){
				$result = mysqli_query($this->conexion,$slq);
				return $result;
		}

		public function cerrarfiltro($datos){	
			mysqli_free_result($datos);//limpia la memoria		
		}

		public function proximo($datos){//convierte 	
			$arreglo = mysqli_fetch_array($datos);		
			return $arreglo;
		}

		public function ejecutar($sql){		
			mysqli_query($this->conexion,$sql);	
		}
		public function cerrarconexion(){	
			mysqli_close($this->conexion);	
		}

		function fechabd($pcFecha) {
	  	 $lcNow="now()";		 
	  	 if (strlen($pcFecha)==10)
	  	 {
	  	 	$lcDia=substr($pcFecha,0,2);
	  	 	$lcMes=substr($pcFecha,3,2);
	  	 	$lcAno=substr($pcFecha,6,4);			
	  	 	$lcNow=$lcAno."-".$lcMes."-".$lcDia;
	  	 }
	  	 return $lcNow;
	  }


	}

	$objDatos = new clsDatos();
	
		
?>