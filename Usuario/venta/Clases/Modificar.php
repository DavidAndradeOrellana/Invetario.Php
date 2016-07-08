
<?php
include_once 'conexion.php';
if(isset($_POST['btn-saves']))
{
  $Idproducto = $_GET['Idproducto'];
	$can = $_POST['actual'];

	$sSQL="Update producto Set cantidad='$Existencia' Where Idproducto='$Idproducto'";
mysql_query($sSQL);
	if($Productos->update($Idproducto,$can))
	{
		$msg = "<div class='alert alert-info'>
				<strong>EXELENTE!</strong> Registro fue actualizado correctamente <a href='producto.php'>REGRESAR</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>LO LAMENTO!</strong> Error al actualizar registro !
				</div>";
	}
}
if(isset($_GET['Idproducto']))
{
	$Idproducto= $_GET['Idproducto'];
	extract($Productos->getIdproducto($Idproducto));	
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