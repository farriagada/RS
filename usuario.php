<?php
class Usuario{
	private $id;
	private $nombre;
	private $email;
	
	public function __set($id,$idvalue){
		return $this->$id=$idvalue;
	}
	
	public function __set($nombre,$nombrevalue){
		return $this->$nombre=$nombrevalue;
	}
	public function __set($email,$emailvalue){
		return $this->$email=$emailvalue;
	}
	
	public function __get($id){
		return $this->$id;
	}
	
	public function __get($nombre){
		return $this->$nombre;
	}
	public function __get($email){
		return $this->$email;
	}	
}
?>