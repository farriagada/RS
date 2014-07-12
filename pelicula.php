<?php
    class Pelicula {
            
        private $id;
        private $titulo;
        private $descr;
        private $sitio;
        private $ano;
        private $promedio;
        
        function setTitulo ($tit){
            $this->titulo = $tit;
        }
        
        function getTitulo(){
            return $this->titulo;
        }
        
        function setDescr($des){
            $this->descr = $des;
        }
        
        function getDescr(){
            return $this->descr;
        }
        
        function setSitio($sitio){
            $this->sitio = $sitio;
        }
        
        function getSitio(){
            return $this->sitio;
        }
        
        function setAno($ano){
            $this->ano=$ano;
        }
        
        function getAno(){
            return $this->ano;
        }
        
        function getPromedio(){
            return $this->promedio;
        }
        
        /*Función para calcular el promedio de una película
         * En base a los valores en la tabla califica
         */
        function calcPromedio(){
           $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
           $query = pg_query($dbconn,"SELECT nota FROM califica WHERE idp=$id");
           $result = pg_query($dbconn, "SELECT count(*) FROM califica WHERE idp=$id");
           $numofnotes = pg_fetch_assoc($result);
           $row = pg_fetch_row($query);
           $sum = 0;
           for ($i=0; $i<$numofnotes; $i++){
               $sum = $sum + $row[$i];
           }
           $prom = $sum/$numofnotes;
           $this->promedio=$prom;
        }
    }

?>