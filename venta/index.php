<?php
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

<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
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
    <h2>VENTA DE PRODUCTO</h2>

    

<div class="clearfix"></div>

<div class="container">
<a href="registar.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Nuevo registro</a>
<a href="buscar.php" class="btn btn-large btn-info">&nbsp; Buscador </a>
<a href="reporte.php" class="btn btn-large btn-info" target="_blank">&nbsp; Reporte </a>
</div>

<div class="clearfix"></div><br />
<?php include_once '/Clases/Guardar.php'; ?>
<div class="container">
   <table class='table table-bordered table-responsive'>
     <tr>
     <th>#</th>
     <th>NOMBRE</th>
     <th>PRECIO</th>
     <th>CANTIDAD</th>
     <th>MARCA</th>
     <th>CATEGÓRIA</th>
      <th>PROVEEDOR</th>
       <th>FECHA</th>
     <th colspan="2" align="center">VENDER</th>
     </tr>
     <?php
    $query = "SELECT * FROM producto";       
    $records_per_page=8;
    $newquery = $Productos->paging($query,$records_per_page);
    $Productos ->dataview($newquery);
   ?>
    <tr>
        <td colspan="7" align="center">
      <div class="pagination-wrap">
            <?php $Productos->paginglink($query,$records_per_page); ?>
          </div>
        </td>
    </tr>
 
</table>
   
       
</div>

</body>

</html>
<?php
}else{
  header("location: /Inventario1/index.html");
}
?>