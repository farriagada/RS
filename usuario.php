<?php
class Usuario{
	private $id;
	private $nombre;
	private $email;
	
	public function setId($idvalue){
		return $this->$id=$idvalue;
	}
	
	public function setNomber(,$nombrevalue){
		return $this->$nombre=$nombrevalue;
	}
	public function setEmail($emailvalue){
		return $this->$email=$emailvalue;
	}
	
	public function getId($id){
		return $this->$id;
	}
	
	public function getNombre($nombre){
		return $this->$nombre;
	}
	public function getEmail($email){
		return $this->$email;
	}	
	
	public function encontrarUsuario($usuario){
		$dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
		$query=pg_query($dbconn, "SELECT * FROM usuario WHERE nombre='$usuario' ");
		$res=pg_fetch_row($query);
		$user = new usuario();
		$user->$id=res[0];
		$user->$nombre=res[1];
		$user->$email=res[2];
		return $user;
	}	
}
?>
