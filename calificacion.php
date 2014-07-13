<?php
class Calificacion{
	private $calificacion;
	
	public function setCalificacion($calificacionvalue){
		return $this->$calificacion=$calificacionvalue;
	}
	
	public function getCalificacion(){
		return $this->$calificacion;
	}
	
	public function buscarCalificacion($usuario, $pelicula){
		$query=pg_query($dbconn,"SELECT nota FROM califica WHERE idu=$usuario->getId() and idp=$pelicula->getId()");
		if(pg_num_rows($query)>0){
			$res=pg_fetch_row($query);
			$calificacion=$res[0];
			return $this->$calificacion;
		}else{
			$calificacion=-1;
			return $this->$calificacion;
		}
	}
	
	public function actualizar($usuario,$pelicula,$calificacionV){
		$this->$calificacion=$calificacionV;
		pg_query($dbconn, "UPDATE califica SET nota=$calificacion 
					   WHERE idu=$usuario->getId() and idp=$pelicula->getId()");
	}
	
	public function crear($usuario,$pelicula,$calificacionV){
		$this->$calificacion=$calificacionV;
		$insert=pg_query($dbconn, "INSERT INTO califica(idu, idp, nota) VALUES ($usuario->getId(),$pelicula->getId(),$calificacion); ");
	}
}
?>
