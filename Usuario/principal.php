
<?php
session_start();
if(isset($_SESSION['nombre'])){


?>
<!DOCTYPE >

<html >
<head>
<title>Inventario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.gif" />
<link rel="stylesheet" type="text/css" href="css/style.css" />


<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
<script type="text/javascript">
var flashvars = {};
flashvars.xml = "config.xml";
flashvars.font = "font.swf";
var attributes = {};
attributes.wmode = "transparent";
attributes.id = "slider";
swfobject.embedSWF("cu3er.swf", "cu3er-container", "960", "270", "9", "expressInstall.swf", flashvars, attributes);
</script>

</head>
<body>
<!--Header Begin-->
<div id="header">
  <div class="center">
    <div id="logo"><a href="principal.php">Invetario</a></div>
    <!--Menu Begin-->
     <div id="menu">
      <ul>
        <li><a class="active" href="/inventario1/usuario/principal.php"><span>Inicio</span></a></li>
        <li><a href="/inventario1/usuario/Registro.php"><span>Registro</span></a></li>
         <li><a href="/inventario1/usuario/venta/index.php"><span>Venta</span></a></li>
        <li><a href="logout.php"><span>Salir</span></a></li>
      </ul>
    </div>
    <!--Menu END-->
  </div>
</div>
<div id="toprow">
  <div class="center">
    <div id="cubershadow">
      <div id="cu3er-container"> <a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="" /> </a> </div>
    </div>
  </div>
</div>
<div id="midrow">
 
</div>
<div id="bottomrow">
  <div class="textbox">
    <h1>
Ayuda para el mejor manejo del sistema 
</h1>
<h1>El sistema cuenta con:</h1>
    <a> 1-  Registro de categoría </a> <br>
 <a> 2- Registro de  las marcas.</a> <br>
  <a> 3-  Registrar el proveedor. </a> <br>
   <a> 4- Registro de producto. </a> <br>
    <a> 5-  Registro de empleados  </a> <br>


  </div>
  <div class="feed"> <a href="#"><img alt="" src="images/twitter.jpg" height="80" width="75" /></a> <a href="#"><img alt="" src="images/rss.jpg" height="80" width="67" /></a> </div>
</div>
  <div id="footer">
  <div class="foot"> <span>Desiñado por</span> David Andrade </a> </div>
</body>
</html>
<?php
}else{
  header("location: index.html");
}
?>