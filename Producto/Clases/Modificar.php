
<?php
include_once 'conexion.php';
if(isset($_POST['btn-update']))
{
	$Idproducto = $_GET['Idproducto'];
	$nombre = $_POST['nombre'];
	$pre = $_POST['precio'];
	$can = $_POST['Cantidad'];
	$marca = $_POST['Idmarca'];
	$categoria = $_POST['Idcategoria'];
	$proveedor = $_POST['Idproveedor'];
	$fecha = $_POST['fecha'];
	
	if($Productos->update($Idproducto,$nombre,$pre,$can,$marca,$categoria,$proveedor,$fecha))
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