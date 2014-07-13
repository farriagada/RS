<?php
$fila = 1;
include("DBconnection/connection.php");
if (($gestor = fopen("item.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, "|")) !== FALSE) {
        $arreglo = array();
        $numero = count($datos);
        echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
        $fila++;
        for ($c=5; $c < $numero; $c++) {
            echo $datos[$c] . "<br />\n";
            //array_push($arreglo,$datos[$c]);
        }
       $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES "); 
      // print_r ($arreglo);
    }
    fclose($gestor);
}
?>