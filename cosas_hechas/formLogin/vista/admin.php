<?php 
session_start();
if(isset($_SESSION["usuario"])&&isset($_SESSION["pass"])){//
	echo "hola bienvenido";
	echo "<a href='cerrarsesion.php'> cerrar sesion</a>";
}else{
	echo"<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>