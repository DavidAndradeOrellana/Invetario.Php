<?php
include_once 'conexion.php';
if(isset($_POST['btn-save']))
{
	$nombre = $_POST['nombre'];
	$pre = $_POST['precio'];
	$can = $_POST['Cantidad'];
	$marca = $_POST['Idmarca'];
	$categoria = $_POST['Idcategoria'];
	$proveedor = $_POST['Idproveedor'];
	$fecha = $_POST['fecha'];

	if($Productos->create($nombre,$pre,$can,$marca,$categoria,$proveedor,$fecha))
	{
		header("Location: registar.php?inserted");
	}
	else
	{
		header("Location: registar.php?failure");
	}
}

?>

<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>Exelente!</strong> Registro fue insertado con éxito <a href="producto.php">Regresar</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>LO LAMENTO!</strong> Error al insertar registro !
	</div>
	</div>
    <?php
}
?>