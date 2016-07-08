
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
			$sql="select * from proveedor order by Idprovedor";
			$rs=mysqli_query($this->conn,$sql);
			$i=0;

			$html=$html.'<div align="center">
			<center>
     <img src="../images/logo.png"><br>
     </center>
			Reporte de los Proveedores registrados en la Base de Datos.
			<br /><br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';	
			$html=$html.'<tr bgcolor="#1A1D35"><td><font color="#FFFFFF">C&oacute;digo</font>
			</td><td><font color="#FFFFFF">Nombre</font></td>
			<td><font color="#FFFFFF">Telefono</font></td>
			<td><font color="#FFFFFF">Dirección</font></td>
			<td><font color="#FFFFFF">País</font></td>
		    <td><font color="#FFFFFF">Correo</font></td>
			</tr>';
			while ($row = mysqli_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				$html = $html.'<td>';
				$html = $html. $row["Idprovedor"];
				$html = $html.'</td><td>';
				$html = $html. $row["nomprovee"];
				$html = $html.'</td><td>';	
				$html = $html. $row["telefono"];
					$html = $html.'</td><td>';	
				$html = $html. $row["direccion"];
					$html = $html.'</td><td>';	
				$html = $html. $row["Idpais"];
					$html = $html.'</td><td>';	
				$html = $html. $row["email"];
				$html = $html.'</td></tr>';		
				$i++;
			}			
			$html=$html.'</table></div>';			
     		 return ($html);
		}
		//-----------------------------------------------------------------------------------------------------------------------		
	}

?>

