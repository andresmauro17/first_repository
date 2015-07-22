<?php
/*
    $operacion = $_GET['lcOperacion'];
    $listo = $_GET['lcListo'];

    if($operacion=='buscar' && $listo==1){
        $lcCedula=$_GET['lcCedula'];
        $lcNombre=$_GET['lcNombre'];
        $lcApellido=$_GET['lcApellido'];
        $lcSexo=$_GET['lcSexo'];
        $lcDireccion=$_GET['lcDireccion'];
        $lcTelefono=$_GET['lcTelefono'];
        $lcEmail=$_GET['lcEmail'];
        $lcFechanacimiento=$_GET['lcFechanacimiento']; 
    }*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<link href="../css/datepickercontrol.css" rel="stylesheet" type="text/css" />
<title>Gestion Persona</title>
<script src='../js/validacionPersona.js'></script>
<script src='../js/datepickercontrol.js'></script>
<script>
function cargar()
{
	var operacion = '<?php print($operacion);?>';
	var listo = '<?php print($listo);?>';
	mensajes(operacion,listo);
}
window.onload = cargar;
</script>
</head>

<body>
	<div id="contenedorEst">
    	<div id="cintillo">
        </div>
        <div id="banner">
        </div>
        <div id="menu">
		</div>
        <div id="contenido">
        <div id="cuadro">
        <h1>Gestion de Personas</h1>
        <div id="texto">
       <form name='form1' method='post' action='../controladores/corPersona.php'>
            <table border='1' align='center'>
            <tr>
            <td align='right'>Cedula:</td>
    <td><input type='text' disabled name='txtcedula' onBlur="perderfocus();" value='<?php print($lcCedula);?>' /></td>
            </tr>
            <tr>
            <td align='right'>Nombre:</td>
            <td><input type='text' disabled name='txtnombre' value='<?php print($lcNombre);?>' /></td>
            </tr>
            <tr>
            <td align='right'>Apellido:</td>
            <td><input type='text' disabled name='txtapellido' value='<?php print($lcApellido);?>' /></td>
            </tr>
            <tr>
            <td align='right'>Sexo:</td>
            <td><input type='text' disabled name='txtsexo' value='<?php print($lcSexo);?>' /></td>
            </tr>
            <tr>
            <td align='right'>Fecha de Nacimiento:</td>
           <td><input type='text' disabled id="fechanaci" datepicker="true" name='txtfechanacimiento' value='<?php print($lcFechanacimiento);?>' /></td>
            </tr>
            <tr>
            <td align='right'>Direccion:</td>
            <td><input type='text' disabled name='txtdireccion' value='<?php print($lcDireccion);?>' /></td>
            </tr>
            <tr>
            <td align='right'>Telefono:</td>
            <td><input type='text' disabled name='txttelefono' value='<?php print($lcTelefono);?>' /></td>
            </tr>
            <tr>
            <td align='right'>Email:</td>
            <td><input type='text' disabled name='txtemail' value='<?php print($lcEmail);?>' /></td>
            </tr>
            <input type='hidden' name='txtoperacion' value='des'></td>
            </table>
            
            <table border='1' align='center'>
            <tr>
            <td><input type='button' name='btnincluir' onclick='Incluir();' value='Incluir' /></td>
            <td><input type='button' name='btnbuscar' onclick='Buscar();' value='Buscar' /></td>
            <td><input type='button' name='btnmodificar' onclick='Modificar();' disabled value='Modificar' /></td>
            <td><input type='button' name='btneliminar' onclick='Eliminar();' disabled value='Eliminar' /></td>
            <td><input type='button' name='btnguardar' onclick='Guardar();' disabled value='Guardar' /></td>
            <td><input type='button' name='btncancelar' onclick='Cancelar();' disabled value='Cancelar' /></td>
            </tr>
            </table>
            </form>
            
            </div>
            </div>
      </div>
    </div>
    <div id="pie">
</div>
</body>

</html>