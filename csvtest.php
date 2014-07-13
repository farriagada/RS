<?php
$fila = 1;
include("DBconnection/connection.php");
if (($gestor = fopen("item.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, "|")) !== FALSE) {
        $arreglo = array();
       // echo $datos[0];
        $numero = count($datos);
        echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
        $fila++;
        for ($c=5; $c < $numero; $c++) {
            echo $datos[5] . "<br />\n";
            if($c!=5 && $c!=7 && $c!=12 && $c!=14 && $c!=15 && $c!=17 && $c!=23 ){
                if($c==6 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Action') ");
                if($c==8 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Animation') ");
                if($c==9 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Children') ");
                if($c==10 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Comedy') ");
                if($c==11 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Crime') ");
                if($c==13 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Drama') ");
                if($c==16 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Horror') ");
                if($c==18 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Mystery') ");
                if($c==19 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Romance') ");
                if($c==20 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Sci-fi') ");
                if($c==21 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','Thriller') ");
                if($c==22 && $datos[$c]==1) $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','War') ");
            }
           //  $query = pg_query($dbconn, "INSERT INTO tiene3(id,nombre) VALUES ('$datos[0]','$datos[$c]') "); 
            //array_push($arreglo,$datos[$c]);
        }
       
      // print_r ($arreglo);
    }
    fclose($gestor);
}
?>