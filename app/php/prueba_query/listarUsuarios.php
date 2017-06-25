<?php 
	
	$server="localhost";
	$user="root";
	$pass="";
	$DB='amarey';
 	$conexion = mysqli_connect($server,$user,$pass);
 	mysqli_select_db($conexion,$DB);//selecciono la base de datos
 	$respuesta = mysqli_query($conexion,"call listarUsuarios()");
	/*$fila=mysqli_fetch_assoc($respuesta);//convierte el resultado que es un objeto, en un array asociativo
	print_r($fila);
	echo "<br>";
	echo $fila["login"];*/


	/*while($reg= $respuesta->fetch_object()){
		echo $reg->login;
		echo "<br>";
	};*/

	while($fila= $respuesta->fetch_assoc()){
		print_r($fila);
		echo "<br>";
	};


	/**************otra forma  ***************/
	
	/*$server="localhost";
	$user="root";
	$pass="";
	$DB='amarey';
	$mysqli = new mysqli($server,$user,$pass,$DB);
	if ($mysqli->connect_errno) {
	    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	
	if (!($resultado = $mysqli->query("call listarUsuarios()"))) {
	    echo "Falló SELECT: (" . $mysqli->errno . ") " . $mysqli->error;
	}

	
	$fila=$resultado->fetch_assoc();
	print_r($fila);*/
				

?>