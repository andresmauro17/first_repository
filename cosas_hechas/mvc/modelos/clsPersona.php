<?php

include "clsDatos.php";
class clsPersona{
	private $cedula;
	private $nombre;
	private $apellido;
	private $sexo;
	private $fecha_nacimiento;
	private $telefono;
	private $email;
	private $direccion;
	
	
	
	public function __construct($cedula,$nombre,$apellido,$sexo,$fecha_nacimiento,$telefono,$email,$direccion){
		$this->cedula = $cedula;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->sexo = $sexo;
		$this->fecha_nacimiento = $fecha_nacimiento;
		$this->telefono = $telefono;
		$this->email = $email;
		$this->direccion = $direccion;
	}
	
	public function __destruct(){
	
	}
	
	
	public function get_cedula(){
		return $this->cedula;
	}
	
	public function get_nombre(){
		return $this->nombre;
	}
	
	public function get_apellido(){
		return $this->apellido;
	}
	
	public function get_sexo(){
		return $this->sexo;
	}
	
	public function get_fecha_nacimiento(){
		return $this->fecha_nacimiento;
	}
	
	public function get_telefono(){
		return $this->telefono;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function get_direccion(){
		return $this->direccion;
	}
	
	
	public function buscar(){
	$encontro = false;
	$objDatos = new clsDatos();
	$sql = "select *, date_format(fechanacimiento, '%d/%m/%Y') as fechanacimiento from tpersona where(cedula='$this->cedula')";
	$datos_desordenados = $objDatos->filtro($sql);
	
			if($columna = $objDatos->proximo($datos_desordenados)){
			
				$this->cedula = $columna['cedula'];
				$this->nombre = $columna['nombre'];
				$this->apellido = $columna['apellido'];
				$this->sexo = $columna['sexo'];
				$this->fecha_nacimiento = $columna['fechanacimiento'];
				$this->telefono = $columna['telefono'];
				$this->email = $columna['email'];
				$this->direccion = $columna['direccion'];
				$encontro = true;
			}
			
			$objDatos->cerrarfiltro($datos_desordenados);
			$objDatos->cerrarconexion();
			
			return $encontro;
	}
	
	
	public function incluir(){
		$objDatos = new clsDatos();
		$this->fecha_nacimiento = $objDatos->fechabd($this->fecha_nacimiento);
		$sql = "insert into tpersona(cedula,nombre,apellido,sexo,fechanacimiento,telefono,email,direccion) values ('$this->cedula','$this->nombre','$this->apellido','$this->sexo','$this->fecha_nacimiento','$this->telefono','$this->email','$this->direccion')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	
	
	public function modificar(){
		$objDatos = new clsDatos();
		$sql = "update tpersona set nombre='$this->nombre', apellido='$this->apellido', sexo='$this->sexo', fechanacimiento='$this->fecha_nacimiento', telefono='$this->telefono', email='$this->email', direccion='$this->direccion' where(cedula='$this->cedula')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	
	
	public function eliminar(){
		$objDatos = new clsDatos();
		$sql = "delete from tpersona where(cedula='$this->cedula')";
		$objDatos->ejecutar($sql);
		$objDatos->cerrarconexion();
	}
	
	
}


	//utilizando el metodo para insertar usuarios
/*	$objeto= new clsPersona();*/
	/*$objeto->buscar();*/
	


?>