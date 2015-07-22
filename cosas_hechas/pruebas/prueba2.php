<!DOCTYPE html>
<html>
<body>

<?php
echo "hola6";

/*$link = mysql_connect('localhost', 'isotronica', '1s0tr0n1c4')or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('Amarey') or die('No se pudo seleccionar la base de datos');*/

// Conectando, seleccionando la base de datos
 $link = new mysqli('www.instru-online.com', 'isotronica','1s0tr0n1c4','Amarey');
echo 'Connected successfully';

?> 

</body>
</html>



