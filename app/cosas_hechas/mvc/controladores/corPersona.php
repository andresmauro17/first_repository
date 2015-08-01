<?php
	include "../modelos/clsPersona.php";

/*	$lcCedula=$_POST['txtcedula'];
	$lcNombre=$_POST['txtnombre'];
	$lcApellido=$_POST['txtapellido'];
	$lcSexo=$_POST['txtsexo'];
	$lcDireccion=$_POST['txtdireccion'];
	$lcTelefono=$_POST['txttelefono'];
	$lcEmail=$_POST['txtemail'];
	$lcFechanacimiento=$_POST['txtfechanacimiento'];
	$lcOperacion=$_POST["txtoperacion"];*/

	/*$lcCedula='1130677766';
	$lcNombre='';
	$lcApellido='';
	$lcSexo='';
	$lcDireccion='';
	$lcTelefono='';
	$lcEmail='';
	$lcFechanacimiento='';*/
	/*$lcOperacion='buscar';*/

	$lcCedula='1144127888';
	$lcNombre='matiaas';
	$lcApellido='almeida';
	$lcSexo='m';
	$lcDireccion='cra34#13a11';
	$lcTelefono='3353789';
	$lcEmail='matias@uao.edu.co';
	$lcFechanacimiento='1997-13-25';
	$lcOperacion='incluir';

	$lobjPersona = new clsPersona($lcCedula,$lcNombre,$lcApellido,$lcSexo,$lcFechanacimiento,$lcTelefono,$lcEmail,$lcDireccion);

	 
	if($lcOperacion=="buscar"){
		if($lobjPersona->buscar()){
			$lcCedula=$lobjPersona->get_cedula();
			$lcNombre=$lobjPersona->get_nombre();
			$lcApellido=$lobjPersona->get_apellido();
			$lcSexo=$lobjPersona->get_sexo();
			$lcDireccion=$lobjPersona->get_direccion();
			$lcTelefono=$lobjPersona->get_telefono();
			$lcEmail=$lobjPersona->get_email();
			$lcFechanacimiento=$lobjPersona->get_Fecha_nacimiento(); 
			$lcListo = 1;
			/*echo "<script>
			location.href=\"../vistas/vistaPersona.php?lcCedula=$lcCedula&lcNombre=$lcNombre&lcApellido=$lcApellido&lcSexo=$lcSexo&lcDireccion=$lcDireccion&lcTelefono=$lcTelefono&lcEmail=$lcEmail&lcFechanacimiento=$lcFechanacimiento&lcOperacion=$lcOperacion&lcListo=$lcListo\";
			</script>";*/
			echo $lcCedula;
			echo $lcNombre;
			echo $lcApellido;
			echo $lcSexo;
			echo $lcDireccion;
			echo $lcTelefono;
			echo $lcEmail;
			echo $lcFechanacimiento;
			echo $lcOperacion;
			echo $lcListo;
			

		}else{
			$lcListo = 0;
			/*echo "<script>
			location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
			</script>";*/
			echo $lcOperacion;
			echo $lcListo;
		}
	}
	   
	   
	if($lcOperacion=="incluir")
	{
		if($lobjPersona->buscar()){
			$lcListo = 0;
			/*echo "<script>
			location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
			</script>";*/
			echo $lcOperacion;
			echo $lcListo;
		}
		else{
			$lcListo = 1;
			$lobjPersona->incluir();  
			echo "<script>
			location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
			</script>";
		}
	}
	   
	   
	   
	if($lcOperacion=="modificar"){
		$lobjPersona->modificar();
		$lcListo = 1;
		echo "<script>
		location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
		</script>";
	}
	   
	if($lcOperacion=="eliminar"){
		$lobjPersona->eliminar();   
		$lcListo = 1;
		echo "<script>
		location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
		</script>"; 
	}


?>