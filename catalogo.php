<?php
    include("pelicula.php");
  
    class catalogo{
        
        function buscarPelicula($nombre){
            $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
            $catquery=pg_query($dbconn, "SELECT * FROM pelicula WHERE titulo='$nombre' ");
            $res=pg_fetch_row($catquery);
            $peli = new pelicula();
            $peli->setTitulo($res[1]);
            $peli->setId($res[0]);
            $peli->setDescr($res[2]);
            $peli->setSitio($res[3]);
            $peli->setAno($res[4]);
            $peli->setPromedio($res[5]);
            
            return $peli;           
        }
        
        function buscarPeliculas($titulo){
            $catquery2=pg_query($dbconn, "SELECT * FROM pelicula WHERE titulo LIKE %$nombre% ");
            
            $calu = pg_fetch_all_columns($catquery2);
            $n = pg_num_rows($catquery2);
            
            $lista = array();
            for ($i=0;$i<$n;$i++){
                 $res2=pg_fetch_row($calu[$i]);
                 $peli2 = new pelicula();
                 $peli2->setTitulo($res2[1]);
                 $peli2->setId($res2[0]);
                 $peli2->setDescr($res2[2]);
                 $peli2->setSitio($res2[3]);
                 $peli2->setAno($res2[4]);
                 $peli2->setPromedio($res2[5]);  
                 
                 array_push($lista, $peli2);      
            }
           
            
            return $lista; 
        }
        
        function mostrarLista($pelicula){
            foreach($pelicula as $p){
                $p->mostrarTitulo();
            }
        }
    }

?>