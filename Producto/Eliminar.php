<?php
include_once '/clases/conexion.php';

if(isset($_POST['btn-del']))
{
	$Idproducto = $_GET['Idproducto'];
	$Productos->delete($Idproducto);
	header("Location: eliminar.php?deleted");	
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Inventario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.gif" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
   
 <script src=".././libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href=".././libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src=".././libs/validacion/jquery.validate.min.js"></script>
    <script src=".././libs/validacion/messages.js"></script>
  <script src=".././libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>

<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
<body>
     <div id="header">
  <div class="center">
    <div id="logo"><a href="/Inventario1/principal.php">Invetario</a></div>
    <!--Menu Begin-->
  <div id="menu">
      <ul>
        <li><a class="active" href="/Inventario1/principal.php"><span>Inicio</span></a></li>
        <li><a href="/Inventario1/Registro.php"><span>Registro</span></a></li>
        <li><a href="/inventario1/venta/index.php"><span>Venta</span></a></li>
        <li><a href="/Inventario1/logout.php"><span>Salir</span></a></li>
      </ul>
    </div>
    <!--Menu END-->
 </div>
</div>
<div id="toprowsub">
  <div class="center">
    <h2>ELIMINAR PRODUCTO</h2>
<div class="clearfix"></div>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	<strong>¡Éxito!</strong> EL registro se ha eliminado ... 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	<strong>Te pregunto!</strong> Quieres eliminar este dato?
		</div>
        <?php
	}
	?>	
</div>

<div class="clearfix"></div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['Idproducto']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
         <th>#</th>
         <th>NOMBRE</th>
          <th>PRECIO</th>
           <th>CANTIDAD</th>
            <th>MARCA</th>
             <th>CATEGÓRIA</th>
                <th>PROVEEDOR</th>
                   <th>FECHA</th>
         
         </tr>
         <?php
         $stmt = $DB_con->prepare("SELECT * FROM producto WHERE Idproducto=:Idproducto");
         $stmt->execute(array(":Idproducto"=>$_GET['Idproducto']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['Idproducto']); ?></td>
             <td><?php print($row['nombre']); ?></td>
               <td><?php print($row['precio']); ?></td>
          <td><?php print($row['cantidad']); ?></td>
            <td><?php print($row['Idmarca']); ?></td>
            <td><?php print($row['Idcategoria']); ?></td>
         <td><?php print($row['Idproveedor']); ?></td>
          <td><?php print($row['fechaven']); ?></td>
    
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="Idproducto">
<p>
<?php
if(isset($_GET['Idproducto']))
{
	?>
  	<form method="post">
    <input type="hidden" name="Idproducto" value="<?php echo $row['Idproducto']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp;Si</button>
    <a href="producto.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
    </form>   
	<?php
}
else
{
	?>
    <a href="producto.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Regresar</a>
    <?php
}
?>

</div>	
</body>
</html>