<?php 
session_start();
if(isset($_SESSION["idUsuarios"]) && isset($_SESSION["empresa_id"]) && isset($_SESSION["nombre"]) && isset($_SESSION["login"]) && isset($_SESSION["tipo"])){//
	echo "usuario_completo";	
}elseif(isset($_SESSION["login"])){//
	echo "usuario_incompleto";	
}else{
	//echo"<meta http-equiv='refresh' content='0;url=index.php'>";//si la contraseña es erronea, envie a inicio
	echo "false";
}
?>