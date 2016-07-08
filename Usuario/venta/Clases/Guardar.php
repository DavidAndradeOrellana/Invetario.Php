<?php
include_once 'conexion1.php';
if(isset($_POST['btn-save']))
{
	
	$producto = $_POST['nombre'];
	$marca = $_POST['Idmarca'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['Canti'];
	$iva = $_POST['iva'];
	$total = $_POST['total'];
	$fecha = $_POST['fecha'];
	
	if($Venta->create($producto, $marca, $precio, $cantidad, $iva,$total, $fecha))
	{
		header("Location: index.php?inserted");
	}
	else
	{
		header("Location: index.php?failure");
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
    <strong>Exelente!</strong> Registro fue insertado con éxito !<a href="index.php">Regresar</a>!
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

