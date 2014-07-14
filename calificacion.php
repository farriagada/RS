<?php
class Calificacion{

	private $calificacion;
	
	public function setCalificacion($calificacionvalue){
		return $this->calificacion=$calificacionvalue;
	}
	
	public function getCalificacion(){
		return $this->calificacion;
	}
	
	function buscarCalificacion($usuario, $pelicula){
		$dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
		$query=pg_query($dbconn,"SELECT nota FROM califica WHERE idu=".$usuario->getId() ."and idp=".$pelicula->getId()." ");
		
		if(pg_num_rows($query)>0){
			$res=pg_fetch_row($query);
			$this->calificacion=$res[0];
			
			return $this->calificacion;
		}else{
			$this->calificacion=-1;
			
			return $this->calificacion;
		}
	}
	
	public function actualizar($usuario,$pelicula,$calificacionV){
	$dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
		$this->calificacion=$calificacionV;
		pg_query($dbconn, "UPDATE califica SET nota=".$this->calificacion." 
					   WHERE idu=".$usuario->getId()." and idp=".$pelicula->getId()." ");
	}
	
	public function crear($usuario,$pelicula,$calificacionV){
		$dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
		$this->calificacion=$calificacionV;
		$idu = $usuario->getId();
		$idp = $pelicula->getId();
		$insert=pg_query($dbconn, "INSERT INTO califica(idu, idp, nota) VALUES ('$idu','$idp','$this->calificacion' ); ");
	}
}
?>

