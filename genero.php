<?php
class Genero{
	private $nombre;
	
	function setNombre($nombrevalue){
		return $this->nombre=$nombrevalue;
	}

	function getNombre(){
		return $this->$nombre;
	}
    
    function retGenres($idpeli){
        $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
        $query = pg_query($dbconn, "SELECT nombre FROM tiene3 WHERE id=$idpeli");
        echo "G&eacute;neros:";
        while ($row = pg_fetch_assoc($query)){
            echo " ". $row['nombre'] . " "; 
        }
        echo "<br>";
    }
}
?>