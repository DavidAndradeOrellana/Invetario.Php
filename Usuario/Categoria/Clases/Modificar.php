<?php
include_once 'conexion.php';
if(isset($_POST['btn-update']))
{
	$idcategoria = $_GET['idcategoria'];
	$nombre =     $_POST['nomcategoria'];
	
	
	if($Cate->update($idcategoria,$nombre))
	{
		$msg = "<div class='alert alert-info'>
				<strong>EXELENTE!</strong> Registro fue actualizado correctamente <a href='categoria.php'>REGRESAR</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>LO LAMENTO!</strong> Error al actualizar registro !
				</div>";
	}
}

if(isset($_GET['idcategoria']))
{
	$idcategoria = $_GET['idcategoria'];
	extract($Cate->getIdcategoria($idcategoria));	
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