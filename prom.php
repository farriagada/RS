<?php
include("DBconnection/connection.php");

$query=pg_query($dbconn,"SELECT id FROM pelicula");
$result=pg_query($dbconn,"SELECT count(*) FROM pelicula");
$num = pg_fetch_assoc($result);
$row= pg_fetch_row($query);

for($i=0;$i<$num;$i++){
    /*por cada fila se obtiene la id y se hace una búsqueda en califica de esa id 
     *  Se obtiene el promedio de las notas y se inserta en el value promedio.
     */
     $cons = pg_query($dbconn,"SELECT nota FROM califica as c WHERE c.idp=$row[$i]");
     $filas = pg_fetch_row($cons);
     
}

?>