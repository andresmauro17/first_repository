<?php 

	//esta clase sirve para conectarse a la database
	class conexion{
		public $server;
		public $user;
		public $pass;
		public $bd;

		public function __construct(){
			//.......base de datos servidor instru........
			/*$this->server="www.instru-online.com";
			$this->user="isotronica";
			$this->pass="1s0tr0n1c4";
			$bd="Amarey";*/
			//........base de datos servidor local..........
			$this->server="localhost";
			$this->user="root";
			$this->pass="";
			//$bd="amarey";
		}	


		function connectDB(){
			return mysqli_connect($this->server,$this->user,$this->pass);//se conecta al server con user=root y pass=""
			// return mysqli_connect("www.instru-online.com","isotronica","1s0tr0n1c4");//se conecta al server con user=root y pass=""
		}

		function disconnectDB($conexion){			
			$close=mysqli_close($conexion);

			if($close>0){
				echo "true";
			}else{
				echo "false";
			}
		}

		function getArraySQL($sql,$DB){
		    //Creamos la conexión con la función anterior
		    	$conexion = connectDB();
		    	mysqli_select_db($conexion,$DB);//selecciono la base de datos

		    //generamos la consulta
		        mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
			    if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa
			    $rawdata = array(); //creamos un array

		    //guardamos en un array multidimensional todos los datos de la consulta
			    $i=0;
			    while($row = mysqli_fetch_array($result))
			    {
			        $rawdata[$i] = $row;
			        $i++;
			    }
			    disconnectDB($conexion); //desconectamos la base de datos
		    return $rawdata; //devolvemos el array
		}

		function getRowSQL($sql,$DB){
		    //Creamos la conexión con la función anterior
		    	$conexion = $this->connectDB();
		    	mysqli_select_db($conexion,$DB);//selecciono la base de datos
		    //generamos la consulta
		        mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		        //echo "paso";
			    if(!$result = mysqli_query($conexion, $sql)){ 
				    //echo "die";
				    die();				    
			    } //si la conexión cancelar programa
			    

			    $row = mysqli_fetch_assoc($result);
			    return $row; //devolvemos el array
			    $this->disconnectDB($conexion); //desconectamos la base de datos

		    
		}

		function insertDataSQL($sql,$DB){
		    //Creamos la conexión con la función anterior
		    	$conexion = $this->connectDB();
		    	mysqli_select_db($conexion,$DB);//selecciono la base de datos
		    //generamos la consulta
		        mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
		        //echo "paso"; 
		        
		        if (mysqli_query($conexion,$sql)) {
		        	//echo "paso1"; 
					return true;//retorna true
				}else{
					return false;//retorna false
				}
			    $this->disconnectDB($conexion); //desconectamos la base de datos

		    
		}


	}

	//-------utilizando la clase conexion y el metodo conectar-------
/*	$cnn = new conexion();//instancio o creo un nuevo objeto del tipo de clase conexion
	if($cnn->connectDB()){//se llama el metodo conectar y si este retorna true entonces
		echo "conectado";
	}else{
		echo "desconectado";
	}
*/



		

?>