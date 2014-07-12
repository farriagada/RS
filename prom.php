<?php
include("DBconnection/connection.php");

$query=pg_query($dbconn,"SELECT id FROM pelicula");
$num = pg_num_rows($query);
$row = pg_fetch_row($query);
   echo "$row[1000]";
for($i=0;$i<$num;$i++){
  
    /*por cada fila se obtiene la id y se hace una búsqueda en califica de esa id 
     *  Se obtiene el promedio de las notas y se inserta en el value promedio.
     */
     $cons = pg_query($dbconn,"SELECT nota FROM califica as c WHERE c.idp=$row[$i]");
     $filas = pg_fetch_row($cons);
     $num2 = pg_num_rows($cons);
     $sum = 0;
     
     for ($j=0;$j<$num2;$j++){
         $sum = $sum + $filas[$j];
     }
     
     $prom = $sum/$num2['total2'];
     $ins = pg_query($dbconn,"UPDATE pelicula SET promedio=$prom WHERE id=$row[$i]");
     
}

?>