<?php
class Actor{
	private $nombre;
	private $apellido;
	private $ano_nac;
	function setNombre($nombrevalue){
		return $this->nombre=$nombrevalue;
	}

	function setApellido($apellidovalue){
		return $this->apellido=$apellidovalue;
    }	

	function setAno_nac($ano_nacvalue){
		return $this->ano_nac=$ano_nacvalue;
    }	

	function getNombre(){
		return $this->nombre;
	}
	function getApellido(){
		return $this->apellido;
	}
	
	function getAno_nac(){
		return $this->ano_nac;
	}
    
    function retActores($idpeli){
        $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
        $query = pg_query($dbconn, "SELECT nombre FROM actua_en WHERE id=$idpeli");
        return $query;
    }

	
}
?>
