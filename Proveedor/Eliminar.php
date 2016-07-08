<?php
include_once '/clases/conexion.php';

if(isset($_POST['btn-del']))
{
	$Idprovee = $_GET['Idprovedor'];
	$Provee->delete($Idprovee);
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
    <h2>ELIMINAR PROVEEDORr</h2>
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
	 if(isset($_GET['Idprovedor']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
         <th>#</th>
         <th>PROVEEDOR</th>
          <th>TELEFONO</th>
           <th>DIRECCIÓN</th>
            <th>PAÍS</th>
             <th>CORREO</th>
         
         </tr>
         <?php
         $stmt = $DB_con->prepare("SELECT * FROM proveedor WHERE Idprovedor=:Idprovedor");
         $stmt->execute(array(":Idprovedor"=>$_GET['Idprovedor']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['Idprovedor']); ?></td>
             <td><?php print($row['nomprovee']); ?></td>
               <td><?php print($row['telefono']); ?></td>
          <td><?php print($row['direccion']); ?></td>
            <td><?php print($row['Idpais']); ?></td>
            <td><?php print($row['email']); ?></td>
        
        
    
        
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="Idprovedor">
<p>
<?php
if(isset($_GET['Idprovedor']))
{
	?>
  	<form method="post">
    <input type="hidden" name="Idprovedor" value="<?php echo $row['Idprovedor']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp;Si</button>
    <a href="proveedor.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
    </form>   
	<?php
}
else
{
	?>
    <a href="proveedor.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Regresar</a>
    <?php
}
?>
</p>
</div>	
</body>
</html>