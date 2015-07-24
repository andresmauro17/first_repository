<?php 

if(isset($_POST['asunto']) && !empty($_POST['asunto']) && isset($_POST['mensaje']) && !empty($_POST['mensaje'])){

	$destino="andresmauro17@hotmail.com";
	$asunto=$_POST['asunto'];
	$mensaje=$_POST['mensaje'];
	$desde="From:"."codigofacilito";
	mail($destino,$asunto,$mensaje,$desde);
	echo "enviado";
}else{
	echo "problemas";
}


 ?>