<?php
class Usuario{
	private $id;
	private $nombre;
	private $email;
    private $apellido;
	
	function setId($idvalue){
		return $this->id=$idvalue;
	}
	
	function setNombre($nombrevalue){
		return $this->nombre=$nombrevalue;
	}
	function setEmail($emailvalue){
		return $this->email=$emailvalue;
	}
	
	function getId(){
		return $this->id;
	}
	
	function getNombre(){
		return $this->nombre;
	}
	function getEmail(){
		return $this->email;
	}	
    
    function setApellido ($name){
        $this->apellido=$name;
    }
    
    function getApellido(){
        return $this->apellido;
    }
	
	function encontrarUsuario($usuario){
		$dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
		$query=pg_query($dbconn, "SELECT id, email, nombre, apellido FROM usuario WHERE id='$usuario' ");
		$res=pg_fetch_row($query);
		$user = new usuario();
		$user->setId($res[0]);
        $user->setNombre($res[2]);
		$user->setEmail($res[1]);
        $user->setApellido($res[3]);
		return $user;
	}	
    
    function agregar($titulo){
        $cata = new catalogo();
        $peli = new pelicula();
        $peli = $cata->buscarPelicula($titulo);
        return $peli;
    }
    
    function agregarWL($peli){
        $idPeli = $peli->getId();
        $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
        $query=pg_query($dbconn, "INSERT INTO incluye (id,idPeli) VALUES ('$this->id','$idPeli')");
    }
    
    function eliminarWL($peli){
        $idPeli = $peli->getId();
        $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
        $query=pg_query($dbconn, "DELETE FROM incluye as i WHERE $this->id=i.id AND $idPeli = i.idpeli");
    }
    
}
?>
