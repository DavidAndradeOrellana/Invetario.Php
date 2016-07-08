

<?php 

	require "/conexion/conexion.php";
	class consulta{
		var $conn;
		var $conexion;
		function consulta(){		
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
		}	
		//-----------------------------------------------------------------------------------------------------------------------
		
		//-----------------------------------------------------------------------------------------------------------------------
		function reportePdfUsuarios(){			
			$html="";
			$sql="select * from venta order by Idventa";
			$rs=mysqli_query($this->conn,$sql);
			$i=0;

			$html=$html.'<div align="center">
			<center>
     <img src="../images/logo.png"><br>
     </center>
			Reporte de Ventas registrados en la Base de Datos.

			<br /><br />			
			<table border="0" bordercolor="#344E9C" bordercolordark="#344E9Cs">';	
			$html=$html.'<tr bgcolor="#1A1D35"><td><font color="#FFFFFF">C&oacute;digo</font>
			</td><td><font color="#FFFFFF">Nombre</font></td>
			<td><font color="#FFFFFF">Marca</font></td>
			<td><font color="#FFFFFF">Precio</font></td>
			<td><font color="#FFFFFF">Cantidad</font></td>
		    <td><font color="#FFFFFF">Iva</font></td>
			<td><font color="#FFFFFF">Total</font></td>
		    <td><font color="#FFFFFF">Vencimiento</font></td></tr>';
			while ($row = mysqli_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				$html = $html.'<td>';
				$html = $html. $row["Idventa"];
				$html = $html.'</td><td>';
				$html = $html. $row["Idproducto"];
				$html = $html.'</td><td>';	
				$html = $html. $row["Idmarca"];
					$html = $html.'</td><td>';	
				$html = $html. $row["precio"];
					$html = $html.'</td><td>';	
				$html = $html. $row["cantidad"];
					$html = $html.'</td><td>';	
				$html = $html. $row["iva"];
					$html = $html.'</td><td>';	
				$html = $html. $row["total"];
					$html = $html.'</td><td>';	
				$html = $html. $row["fechaven"];
				$html = $html.'</td></tr>';		
				$i++;
			}			
			$html=$html.'</table></div>';			
     		 return ($html);
		}
		//-----------------------------------------------------------------------------------------------------------------------		
	}

?>

