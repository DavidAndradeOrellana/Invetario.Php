
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
			$sql="select * from producto order by Idproducto";
			$rs=mysqli_query($this->conn,$sql);
			$i=0;

			$html=$html.'<div align="center">
			Reporte de Producto registrados en la Base de Datos.
			<br /><br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';	
			$html=$html.'<tr bgcolor="#FF0000"><td><font color="#FFFFFF">C&oacute;digo</font>
			</td><td><font color="#FFFFFF">Nombre</font></td>
			<td><font color="#FFFFFF">Precio</font></td>
			<td><font color="#FFFFFF">Cantidad</font></td>
			<td><font color="#FFFFFF">Marca</font></td>
		    <td><font color="#FFFFFF">Categória</font></td>
			<td><font color="#FFFFFF">Proveedores</font></td>
		    <td><font color="#FFFFFF">Vencimiento</font></td></tr>';
			while ($row = mysqli_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				$html = $html.'<td>';
				$html = $html. $row["Idproducto"];
				$html = $html.'</td><td>';
				$html = $html. $row["nombre"];
				$html = $html.'</td><td>';	
				$html = $html. $row["precio"];
					$html = $html.'</td><td>';	
				$html = $html. $row["cantidad"];
					$html = $html.'</td><td>';	
				$html = $html. $row["Idmarca"];
					$html = $html.'</td><td>';	
				$html = $html. $row["Idcategoria"];
					$html = $html.'</td><td>';	
				$html = $html. $row["Idproveedor"];
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

