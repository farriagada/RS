<?php
    class Pelicula {
            
        private $id;
        private $titulo;
        private $descr;//ccccas
        private $sitio;
        private $ano;
        private $promedio;
        
        function setId ($id){
            $this->id=$id;
        }
        
        function getId(){
            return $this->id;
        }
        
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
        
        function setPromedio($p){
            $this->promedio=$p;
        }
        
        /*Función para calcular el promedio de una película
         * En base a los valores en la tabla califica
         */
        function calcPromedio(){
         /*  $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20"); */
           $query = pg_query($dbconn,"SELECT nota FROM califica WHERE idp=$id");
           $numofnotes = pg_num_rows($query);
           $row = pg_fetch_all_columns($query);
           $sum = 0;
           for ($i=0; $i<$numofnotes; $i++){
               $sum = $sum + $row[$i];
           }
           if ($numofnotes!=0){
              $prom = $sum/$numofnotes;
              $this->promedio=$prom;
           }
           else $this->promedio=0;
           
        }
        
        function mostrarTitulo(){
           print( '<a href="http://localhost/detallepelicula.php?titulo=$this->titulo">$this->titulo</a></br>' ); 
        }
    }

?>
