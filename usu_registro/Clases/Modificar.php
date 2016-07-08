<?php
include_once 'conexion.php';
if(isset($_POST['btn-update']))
{
	$idusuario = $_GET['idusuario'];
	$nombre =     $_POST['nombre'];
	$administrador =  $_POST['administrador'];
	$normal =     $_POST['normal'];
	
	
	if($Usu->update($idusuario,$nombre,$administrador,$normal))
	{
		$msg = "<div class='alert alert-info'>
				<strong>EXELENTE!</strong> Registro fue actualizado correctamente <a href='usuario.php'>REGRESAR</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>LO LAMENTO!</strong> Error al actualizar registro !
				</div>";
	}
}

if(isset($_GET['idusuario']))
{
	$idusuario = $_GET['idusuario'];
	extract($Usu->getIdusuario($idusuario));	
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