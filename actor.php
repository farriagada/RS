<?php
class Actor{
	private $nombre;
	private $apellido;
	private $ano_nac;
	public function __set($nombre,$nombrevalue){
		return $this->$nombre=$nombrevalue;
	}

	public function __set($apellido,$apellidovalue){
		return $this->$apellido=$apellidovalue;
}	

	public function __set($ano_nac,$ano_nacvalue){
		return $this->$ano_nac=$ano_nacvalue;
}	

	public function __get($nombre){
		return $this->$nombre;
	}
	public function __get($apellido){
		return $this->$apellido;
	}
	
	public function __get($ano_nac){
		return $this->$ano_nac;
	}
	
}
?>
