<?php

class Cate {
	private $db;
	function __construct($DB_con){
		$this->db = $DB_con;
	}

	public function create($nombre){
		try{
			$stmt = $this->db->prepare("INSERT INTO categoria(nomcategoria) VALUES(:nombre) ");
			$stmt->bindparam(":nombre",$nombre);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}

	public function getIdcategoria($idcategoria)
	{
		$stmt = $this->db->prepare("SELECT * FROM categoria WHERE idcategoria=:idcategoria");
		$stmt->execute(array(":idcategoria"=>$idcategoria));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	public function update($idcategoria,$nombre){
		try{
			$stmt=$this->db->prepare("UPDATE categoria SET nomcategoria=:nombre WHERE idcategoria= :idcategoria");
			$stmt->bindparam(":nombre",$nombre);
			$stmt->bindparam(":idcategoria",$idcategoria);
			$stmt->execute();
			return true;
		}
	catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($idcategoria)
	{
		$stmt = $this->db->prepare("DELETE FROM categoria WHERE idcategoria=:idcategoria");
		$stmt->bindparam(":idcategoria",$idcategoria);
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
                <td><?php print($row['idcategoria']); ?></td>
                <td><?php print($row['nomcategoria']); ?></td>
                <td align="center">
                <a href="Editar.php?idcategoria=<?php print($row['idcategoria']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="Eliminar.php?idcategoria=<?php print($row['idcategoria']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
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
