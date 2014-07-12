<?php
class Director{
	private $nombre;
	
	public function __set($nombre,$nombrevalue){
		return $this->$nombre=$nombrevalue;
	}
	
	public function __get($nombre){
		return $this->$nombre;
	}

}
?>