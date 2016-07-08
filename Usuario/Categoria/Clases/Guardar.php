<?php
include_once 'conexion.php';
if(isset($_POST['btn-save']))
{
	$nomcategoria = $_POST['nomcategoria'];

	
	if($Cate->create($nomcategoria))
	{
		header("Location: registro.php?inserted");
	}
	else
	{
		header("Location: registro.php?failure");
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
    <strong>Exelente!</strong> Registro fue insertado con éxito <a href="categoria.php">Regresar</a>!
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