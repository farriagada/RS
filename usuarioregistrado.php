<?php
class Usuarioregistrado{
	private $apellido;

	public function __set($apellido,$apellidovalue){
		return $this->$apellido=$apellidovalue;
	}
	
	public function __get($apellido){
		return $this->$apellido;

}
?>