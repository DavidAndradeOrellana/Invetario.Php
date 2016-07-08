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
<script type="text/javascript" src="../js/letarvalidar.js"></script>
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
    <h2>REGISTRO DE UN ABMINISTRADOR</h2>
<?php include_once '/Clases/Guardar.php'; ?>

<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'>
	 	<div class="form-group">
    <label for="usuario" class="col-lg-2 control-label">Nombre </label>
    <div class="col-lg-3">
      <input type="text"  onkeypress="return sololetras(event)" onpaste="return false" class="form-control"  name="nombre" id="nombre"
             placeholder="Nombre de una marca" class="remote" required>
    </div><br><br>
      <div class="form-group">
    <label for="usuario" class="col-lg-2 control-label">Contraseña </label>
    <div class="col-lg-3">
      <input type="password" class="form-control"  name="administrador" id="nombre"
             placeholder="Ingrese una contraseña" class="remote" required>
    </div>
  </div><br><br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Registar
			</button>  
			 <a href="administrador.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Regresar</a>
    </div>
  </div>
          
</form>
     
     
</div>