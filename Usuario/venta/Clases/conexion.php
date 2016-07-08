<?php


$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "db_inventario";


try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

include_once 'class.productos.php';

include_once 'class.venta.php';
$Productos = new  Productos ($DB_con);
 $Venta = new  Venta ($DB_con);
 
       
?>