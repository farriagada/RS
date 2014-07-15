<?php
  echo "Pearson<br>";
include("DBconnection/connection.php");
ini_set('max_execution_time', 3600);

$query1 = pg_query($dbconn, "SELECT id, promedio FROM pelicula ");
$sum = 0;
$sum1 = 0;
$sum2 = 0;
while ($row1 = pg_fetch_assoc($query1)){
    $query3 = pg_query($dbconn, "SELECT id, promedio FROM pelicula");
    while($row2 = pg_fetch_assoc($query3)){
        $query2 = pg_query($dbconn, "SELECT id FROM usuario");
        while($row3 = pg_fetch_assoc($query2)){
             $a = pg_query($dbconn, "SELECT nota FROM califica WHERE idp='" .$row1['id']. "' AND idu='".$row3['id']."'");
             $b = pg_query($dbconn, "SELECT nota FROM califica WHERE idp='" .$row2['id']. "' AND idu='".$row3['id']."'");
             echo $row3['id'];
             $ra = pg_fetch_row($a);
             $rb = pg_fetch_row($b);
             if(pg_num_rows($a)>0 && pg_num_rows($b)>0){ //Si existe calificacion en ambas.
                             $sum = $sum + (($ra[0] - $row1['promedio'])*($rb[0] - $row2['promedio']));  //Numerador          
                             $sum1 = $sum1 + (($ra[0] - $row1['promedio'])*($ra[0] - $row1['promedio']));              
                             $sum2 = $sum2 + (($ra[0] - $row2['promedio'])*($ra[0] - $row2['promedio'])); 
             }
        }
        if($sum1 != 0 && $sum2!=0){
        $corrab = ($sum)/(sqrt($sum1)*sqrt($sum2));
        echo "<br>Corr entre ".$row1['id']." y ".$row2['id']. ": ".$corrab."<br>";
        $sum = 0;
        $sum1 = 0;
        $sum2 = 0;
        }
    }
}
?>
