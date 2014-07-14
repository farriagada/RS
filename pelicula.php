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
           $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20"); 
           $query = pg_query($dbconn,"SELECT nota FROM califica WHERE idp=$this->id");
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
           print( '<a href="http://localhost/RS/detallepelicula.php?titulo=' . $this->titulo . '">' . $this->titulo . '</a></br>' ); 
        }
        
        function mostrarDetalle(){
                
            
            echo "<h1>" . $this->titulo . "</h1>";
            echo "<a href=" . $this->sitio . ">Enlace IMDB</a><br>";
            $gen = new genero();
            $g = $gen->retGenres($this->id);
              echo "G&eacute;neros:";
              while ($row = pg_fetch_assoc($g)){
               echo "<a href='listamov.php?genero=".$row['nombre']."'>". $row['nombre'] . "</a> "; 
               }
               echo "<br>";
            echo "" .  $this->descr . "<br><br>";
            echo "Promedio de Calificacion: " . $this->promedio ."<br><br>";
            echo "<h6>Elenco </h6>";
            $act = new actor();
            $a = $act->retActores($this->id);
               while ($row2 = pg_fetch_assoc($a)){
                     echo "<a href='listact.php?actor=".$row2['nombre']."'>". $row2['nombre'] . "</a><br> "; 
                }
               echo "<br>";      
        }
    }

?>
