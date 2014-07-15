<?php
class Idioma{
	private $nombre;
	
	function setNombre($nombrevalue){
		return $this->nombre=$nombrevalue;
	}

	function getNombre(){
		return $this->nombre;
	}
    
    function retIdiomas($idpeli){
        $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
        $query = pg_query($dbconn, "SELECT distinct nombre FROM tiene2 WHERE id=$idpeli");
        return $query;
    }
}
?>