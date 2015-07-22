<?php 
	
	$server="localhost";
	$user="root";
	$pass="";
	$DB='amarey';
 	

 	$conexion = mysqli_connect($server,$user,$pass);
 	mysqli_select_db($conexion,$DB);//selecciono la base de datos
 	$respuesta = mysqli_query($conexion,"CALL validarLogin('cali','thebest1');");
	
	while($reg= $respuesta->fetch_object()){
		echo $reg->login;
		echo "<br>";
	};
				

?>