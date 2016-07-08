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

include_once 'class.proveedor.php';

$Provee  = new  Provee($DB_con);
  function consultaD($conexion, $sql,$modo=2,$presentacion=FALSE)
    {
        $ejecutor = $coneccion;
        $manejador = trim($sql);
        $devolucion = "";
        try {       
            $datos = $ejecutor->query($manejador);
            $datos->setFetchMode($modo);
            if($presentacion == TRUE){
                $devolucion .="<table border=1>";
                foreach ($datos->fetchAll() as $registros) {
                    $devolucion.="<tr>";
                    foreach ($registros as $valor) {
                        $devolucion.="<td>".$valor."</td>";
                    }
                    $devolucion.="</tr>";
                }
                $devolucion .="</table>";
            }else{
                $contenedor = $datos->fetchAll(); 
                $devolucion=$contenedor;
                
                
            }
       
        } catch (Exception $exc) {
            return  "No se pudieron Consultar los Datos<br />".$exc->getMessage();  
        }        
        return $devolucion;
        
    }
        
       
?>