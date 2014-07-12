<?php
class Calificacion{
	private $calificacion;
	
	public function __set($calificacion,$calificacionvalue){
		return $this->$calificacion=$calificacionvalue;
	}
	
	public function __get($calificacion){
		return $this->$calificacion;
	}	
}
?>