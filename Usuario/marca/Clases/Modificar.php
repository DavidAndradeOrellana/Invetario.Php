<?php
include_once 'conexion.php';
if(isset($_POST['btn-update']))
{
	$Idmarca = $_GET['Idmarca'];
	$nombre =     $_POST['nommarca'];
	
	
	if($MarcaA->update($Idmarca,$nombre))
	{
		$msg = "<div class='alert alert-info'>
				<strong>EXELENTE!</strong> Registro fue actualizado correctamente <a href='marca.php'>REGRESAR</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>LO LAMENTO!</strong> Error al actualizar registro !
				</div>";
	}
}

if(isset($_GET['Idmarca']))
{
	$Idmarca= $_GET['Idmarca'];
	extract($MarcaA->getIdmarca($Idmarca));	
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