<?php

class Productos {
	private $db;
	function __construct($DB_con){
		$this->db = $DB_con;
	}

	public function create($nombre,$pre,$can,$marca,$categoria,$proveedor,$fecha){
		try{
			$stmt = $this->db->prepare("INSERT INTO producto(nombre,precio,cantidad,Idmarca,Idcategoria,Idproveedor,fechaven)VALUES(:nombre, :precio, :cantidad, :Idmarca, :Idcategoria, :Idproveedor, :fechaven)");
			$stmt->bindparam(":nombre",$nombre);
			$stmt->bindparam(":precio",$pre);
			$stmt->bindparam(":cantidad",$can);
			$stmt->bindparam(":Idmarca",$marca);
			$stmt->bindparam(":Idcategoria",$categoria);
			$stmt->bindparam(":Idproveedor",$proveedor);
			$stmt->bindparam(":fechaven",$fecha);
			$stmt->execute();
			return true;
			var_dump($producto);
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}

	public function getIdproducto($Idproducto)
	{
		$stmt = $this->db->prepare("SELECT * FROM producto WHERE Idproducto=:Idproducto");
		$stmt->execute(array(":Idproducto"=>$Idproducto));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	public function update($Idproducto,$nombre,$pre,$can,$marca,$categoria,$proveedor,$fecha){
		try{
			$stmt=$this->db->prepare("UPDATE producto SET nombre=:nombre, 
                                                         precio=:precio,
                                                         cantidad=:cantidad,
                                                         Idmarca=:Idmarca,
                                                         Idcategoria=:Idcategoria,
                                                          Idproveedor=:Idproveedor,
                                                         fechaven=:fechaven
				                                         WHERE Idproducto=:Idproducto");
			$stmt->bindparam(":nombre",$nombre);
			$stmt->bindparam(":precio",$pre);
			$stmt->bindparam(":cantidad",$can);
			$stmt->bindparam(":Idmarca",$marca);
			$stmt->bindparam(":Idcategoria",$categoria);
			$stmt->bindparam(":Idproveedor",$proveedor);
			$stmt->bindparam(":fechaven",$fecha);
	        $stmt->bindparam(":Idproducto",$Idproducto);
			$stmt->execute();
			return true;
		}
	catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($Idproducto)
	{
		$stmt = $this->db->prepare("DELETE FROM producto WHERE Idproducto=:Idproducto");
		$stmt->bindparam(":Idproducto",$Idproducto);
		$stmt->execute();
		return true;
	}
	
public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print($row['Idproducto']); ?></td>
                <td><?php print($row['nombre']); ?></td>
                 <td><?php print($row['precio']); ?></td>
                  <td><?php print($row['cantidad']); ?></td>
                   <td><?php print($row['Idmarca']); ?></td>
                    <td><?php print($row['Idcategoria']); ?></td>
                    <td><?php print($row['Idproveedor']); ?></td>
                     <td><?php print($row['fechaven']); ?></td>
                <td align="center">
                <a href="Editar.php?Idproducto=<?php print($row['Idproducto']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="Eliminar.php?Idproducto=<?php print($row['Idproducto']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>No hay registros...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */
	
}
