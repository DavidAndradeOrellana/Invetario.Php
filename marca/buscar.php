<?php
include 'config.php';
include_once '/Clases/conexion.php';
?>
<?php
session_start();
if(isset($_SESSION['nombre'])){


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
<script src="./js/jquery.js"></script>
<script src="./js/myjava.js"></script>
<script type="text/javascript" src="js/swfobject/swfobject.js"></script>



</style>
</head>

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
    <h2>BUSCAR MARCA</h2>

    

<div class="clearfix"></div>
<form action="buscar.php" method="get">
	Ingrese porfabor  un nombre:
<input type="text" name="palabra" onkeyup = "this.value=this.value.toUpperCase()" placeholder="Buscador" />
<input type="submit" class="btn btn-large btn-info" name="buscador" value="Buscar"  />

</form>

<?php
if (isset($_GET['buscador']))
{

$buscar = $_GET['palabra'];


if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{

$sql = "SELECT * FROM marca WHERE nommarca LIKE '%$buscar%'";
$result = mysql_query($sql,$connect);

$total = mysql_num_rows($result);

if ($row = mysql_fetch_array($result)) {


do {
?>
<br>
<br>

<div class="container">
<table  class="table table-striped table-condensed table-hover">
     <tr>
     <th >#</th>
      <th >MARCA</th>
     <th colspan="2" align="center">OPCIONES</th>
     </tr>
     
     <tr>
     <td ><?php echo $row['Idmarca']; ?></td>
       <td> <?php echo $row['nommarca']; ?></td>
         <td align="center">
                <a href="Editar.php?Idmarca=<?php print($row['Idmarca']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="Eliminar.php?Idmarca=<?php print($row['Idmarca']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
              
     </tr>
</table>
</div>
<?php
}
while ($row = mysql_fetch_array($result));
}
else
{
echo "No se encontraron resultados para: $buscar";
}
}
}
?>
<br><br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      
       <a href="marca.php" class="btn btn-large btn-info"></i> &nbsp; Regresar</a>
    </div>
  </div>
</body>

</html>
<?php
}else{
  header("location: /Inventario1/index.html");
}
?>