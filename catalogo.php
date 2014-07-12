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
            $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
            $catquery2=pg_query($dbconn, "SELECT * FROM pelicula WHERE titulo LIKE '%$titulo%' ");
            
            $calu = pg_fetch_assoc($catquery2);
            $n = pg_num_rows($catquery2);
        
            
            $lista = array();
            
            while ($res2 = pg_fetch_assoc($catquery2)){
                     $peli2 = new pelicula();
                 $peli2->setTitulo($res2['titulo']);
                 $peli2->setId($res2['id']);
                 $peli2->setDescr($res2['descr']);
                 $peli2->setSitio($res2['sitio']);
                 $peli2->setAno($res2['ano']);
                 $peli2->setPromedio($res2['promedio']);  
                 
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