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
    <h2>MODIFICAR PROVEEDOR</h2>

    <?php include_once '/Clases/Modificar.php'; ?>
<div class="clearfix"></div><br />

<div class="container">

 	
	 <form class="form-inline" method='post'>
	 <div class="form-group">
    <label for="usuario"  class="col-lg-3 control-label">Nombre</label>
    <div class="col-lg-3">
      <input type="text" class="form-control"  name="nomprovee" id="proveedor"onkeyup = "this.value=this.value.toUpperCase()"
             placeholder="Nombre del proveedor"  onkeypress="return sololetras(event)" onpaste="return false" value="<?php echo $nomprovee; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="usuario" class="col-lg-4 control-label">Telefono</label>
    <div class="col-lg-3">
      <input type="text" class="form-control"  name="telefono" id="proveedor" onkeyup = "this.value=this.value.toUpperCase()"
             placeholder=" Telefono"size="8" maxlength="8" onkeypress="return aceptNum(event)" onpaste="return false;"  class="remote"  value="<?php echo $telefono; ?>" required>
    </div>
  </div> <br><br>
<div class="form-group">
    <label for="usuario"  class="col-lg-3 control-label">Dirección</label>
    <div class="col-lg-4">
      <input type="text" class="form-control"  name="direccion" id="proveedor"onkeyup = "this.value=this.value.toUpperCase()"
             placeholder="Dirección del proveedor"  onpaste="return false" class="remote" value="<?php echo $direccion; ?>" required>
    </div>
    </div>
    <div class="form-group">
    <label for="usuario"  class="col-lg-3 control-label">Pais</label>
    <div class="col-lg-4">
      <select name='Idpais' class="required form-control"   >
                        <option value="<?php echo $Idpais; ?>">
                        <?php 
                        $sql2="select nompais from pais where Idpais='".$Idpais."'";
                                          
                        print $Idpais;
                        ?>
                        <?php 
                
                            $sql = "SELECT * FROM pais";
                                 $rec=mysql_query($sql);
                                 while($row=mysql_fetch_array($rec)) {
                                  print "<option value='";
                                print $row['nompais'];
                                print "'>";
                                print  $row['nompais'];
                                print "</option>";
                                 }       
                        ?>
                    </select>
    </div>
 

    </div> <br><br>
    <div class="form-group">
    <label for="usuario"  class="col-lg-3 control-label">E-mail</label>
    <div class="col-lg-4">
      <input type="text" class="form-control"  name="email" id="proveedor"  onpaste="return false"
             placeholder="E-mail" class="remote"  value="<?php echo $email; ?>" required>
    </div>
    </div>
  <br><br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button type="submit" class="btn btn-primary" name="btn-update">
    		<span class="glyphicon glyphicon-edit"></span> Modificar
			</button>  <br><br>
			 <a href="proveedor.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
    </div>
  </div>
          
</form>
     
     
</div>
</body>
</html>