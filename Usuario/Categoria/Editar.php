
<!DOCTYPE HTML>
<html>
<head>
<title>Inventario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.gif" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
   
 <script src=".././libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href=".././libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src=".././libs/validacion/jquery.validate.min.js"></script>
    <script src=".././libs/validacion/messages.js"></script>
  <script src=".././libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript" src="../js/letarvalidar.js"></script>
<script type="text/javascript" src="js/swfobject/swfobject.js"></script>


</head>

<body>
  <div id="header">
  <div class="center">
    <div id="logo"><a href="/Inventario1/usuario/principal.php">Invetario</a></div>
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
<div id="toprowsub">
  <div class="center">
    <h2>MODIFICAR CATEGÓRIA</h2>

    <?php include_once '/Clases/Modificar.php'; ?>
<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'>
	 	<div class="form-group">
    <label for="usuario" class="col-lg-2 control-label">Nombre categoría</label>
    <div class="col-lg-3">
      <input type="text"  onkeyup = "this.value=this.value.toUpperCase()"onkeypress="return sololetras(event)" onpaste="return false" class="form-control"  name="nomcategoria" id="nombre"
             placeholder="Nombre de una categoría" class="remote" value="<?php echo $nomcategoria; ?>" required>
    </div>
  </div><br><br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-primary" name="btn-update">
    		<span class="glyphicon glyphicon-edit"></span> Modificar
			</button>  
			 <a href="Categoria.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
    </div>
  </div>
          
</form>
     
     
</div>
</body>
</html>