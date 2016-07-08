
<?php
include_once 'conexion.php';
if(isset($_POST['btn-update']))
{
	$Idprovedor = $_GET['Idprovedor'];
	$nombre =  $_POST['nomprovee'];
	$cel =  $_POST['telefono'];
	$lugar =  $_POST['direccion'];
	$pais =  $_POST['Idpais'];
	$correo =  $_POST['email'];
	
	
	if($Provee->update($Idprovedor,$nombre,$cel,$lugar,$pais,$correo))
	{
		$msg = "<div class='alert alert-info'>
				<strong>EXELENTE!</strong> Registro fue actualizado correctamente <a href='proveedor.php'>REGRESAR</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>LO LAMENTO!</strong> Error al actualizar registro !
				</div>";
	}
}
if(isset($_GET['Idprovedor']))
{
	$Idprovedor = $_GET['Idprovedor'];
	extract($Provee->getIdprovedor($Idprovedor));	
}


?>
<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>