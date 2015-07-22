<?php 
session_start();
if(isset($_SESSION["login"])){//
	echo "hola bienvenido";
	echo "<br/>";

	echo "su id:";
	echo $_SESSION["idUsuarios"];
	echo "<br/>";

	echo "su empresa_id:";		
	echo $_SESSION["empresa_id"];
	echo "<br/>";

	echo "su nombre:";
	echo $_SESSION["nombre"];
	echo "<br/>";

	echo "su login:";
	echo $_SESSION["login"];
	echo "<br/>";

	echo "su login:";
	echo $_SESSION["tipo"];
	echo "<br/>";

	echo "<a href='php/login/cerrarsesion.php'> cerrar sesion</a>";
}else{
	echo"<meta http-equiv='refresh' content='0;url=login.html'>";
}
?>