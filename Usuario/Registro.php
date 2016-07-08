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
<div id="toprowsub">
  <div class="center">
    <h2>REGISTROS</h2>

    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Registros</h3>
          <ul>
            <li><a href="/inventario1/usuario/Categoria/Categoria.php">Categoria</a></li>
            <li><a href="/Inventario1/usuario/Marca/marca.php">Marca</a></li>
            <li><a href="/Inventario1/usuario/Proveedor/proveedor.php">Proveedor</a></li>
           <li><a href="/Inventario1/usuario/Producto/producto.php">Producto</a></li>
             <li><a href="/Inventario1/usuario/venta/registro.php">Venta</a></li>
          </ul>
        </div>
        

    </div>
  </div>
</div>
  </div>
</div>

  </body>
</html>
<?php
}else{
  header("location: index.html");
}
?>