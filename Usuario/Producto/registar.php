<?php
mysql_connect("localhost","root","");
mysql_select_db("db_inventario")
?>
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
    <h2>REGISTRAR UN PRODUCTO</h2>
<?php include_once '/Clases/Guardar.php'; ?>


<div class="clearfix"></div><br />

<div class="container">

 	
	 <form class="form-inline" method='post'>
	 <div class="form-group">
    <label for="usuario"  class="col-lg-4 control-label">Nombre</label>
    <div class="col-lg-3">
      <input type="text" class="form-control"  name="nombre" id="proveedor"onkeyup = "this.value=this.value.toUpperCase()"
             placeholder="Nombre del Producto" class="remote" onkeypress="return sololetras(event)" onpaste="return false" required>
    </div>
  </div>
  <div class="form-group">
    <label for="usuario" class="col-lg-4 control-label">Precio</label>
    <div class="col-lg-3">
      <input type="text" class="form-control"  name="precio" id="proveedor"onkeyup = "this.value=this.value.toUpperCase()"
             placeholder=" Precio" class="remote"   onpaste="return false;" required>
    </div>
  </div> <br><br>
  <div class="form-group">
    <label for="usuario" class="col-lg-4 control-label">Cantidad</label>
    <div class="col-lg-3">
      <input type="text" class="form-control"  name="Cantidad" id="proveedor"onkeyup = "this.value=this.value.toUpperCase()"
             placeholder=" Cantidad" class="remote" onkeypress="return aceptNum(event)" onpaste="return false;" required>
    </div>
  </div>

    <div class="form-group">
    <label for="marca"  class="col-lg-4 control-label">Marca</label>
    <div class="col-lg-4">
     <select name='Idmarca' class="required form-control">
                        <?php 
                
                            $sql = "SELECT * FROM marca";
                                 $rec=mysql_query($sql);
                                 while($row=mysql_fetch_array($rec)) {
                                  print "<option value='";
                                print $row['nommarca'];
                                print "'>";
                                print  $row['nommarca'];
                                print "</option>";
                                 }       
                        ?>
                    </select>
    </div>
    </div> <br><br>

    <div class="form-group">
    <label for="marca"  class="col-lg-5 control-label">Categoria</label>
    <div class="col-lg-6">
     <select name='Idcategoria' class="required form-control">
                        <?php 
                
                            $sql = "SELECT * FROM categoria";
                                 $rec=mysql_query($sql);
                                 while($row=mysql_fetch_array($rec)) {
                                  print "<option value='";
                                print $row['nomcategoria'];
                                print "'>";
                                print  $row['nomcategoria'];
                                print "</option>";
                                 }       
                        ?>
                    </select>
    </div>
    </div> 
    <div class="form-group">
    <label for="marca"  class="col-lg-4 control-label">Proveedor</label>
    <div class="col-lg-4">
     <select name='Idproveedor' class="required form-control">
                        <?php 
                
                            $sql = "SELECT * FROM proveedor";
                                 $rec=mysql_query($sql);
                                 while($row=mysql_fetch_array($rec)) {
                                  print "<option value='";
                                print $row['nomprovee'];
                                print "'>";
                                print  $row['nomprovee'];
                                print "</option>";
                                 }       
                        ?>
                    </select>
    </div>
    </div><br><br>
 
 <div class="form-group">

    <label for="marca"  class="col-lg-4 control-label">Fecha de vencimiento</label>
     <div class="col-lg-4">
                
                    <div class="input-group">                    
                    <input type="text" name="fecha" id="fechac" class="required form-control" required >
            
   
     </div></div>
  <br><br><br><br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-primary" name="btn-save">
        <span class="glyphicon glyphicon-plus"></span> Registar
      </button>  <br> <br>
       <a href="producto.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Regresar</a>
    </div>
  </div>
          
</form>
     
     
</div>
