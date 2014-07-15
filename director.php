<?php
class Director{
	
	private $nombre;
	private $ano_nac;

	public function setNombre($nombre){
		return $this->nombre=$nombre;
	}

	public function setAnonac($ano_nac){
		return $this->ano_nac=$ano_nac;
	}	

	public function getNombre(){
		return $this->nombre;
	}
	
	
	public function getAnoNac($ano_nac){
		return $this->$ano_nac;
	}
	
	function retornarDirector($idpeli){
        	$dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
        	$query = pg_query($dbconn, "SELECT nombre FROM dirije WHERE id=$idpeli");
        	return $query;
	}
}
?>
