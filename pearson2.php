<?php
  echo "Pearson<br>";
include("DBconnection/connection.php");
ini_set('max_execution_time', 3600);

$query1 = pg_query($dbconn, "SELECT id, promedio FROM pelicula ");

 $sum = 0;
            $sum1 = 0;
            $sum2 = 0;

while ($row1 = pg_fetch_assoc($query1)){ // para cada pelicula A 
    $query2 = pg_query($dbconn, "SELECT id FROM usuario");
    

    while($row2 = pg_fetch_assoc($query2)){ // para cada usuario u que evalua A
        $x = pg_query($dbconn, "SELECT nota FROM califica WHERE idp='" .$row1['id']. "' AND idu='".$row2['id']."'");
        if(pg_num_rows($x)>0){
         $ra = pg_fetch_row($x);  //nota de u - a 
        $query3 = pg_query($dbconn, "SELECT id, promedio FROM pelicula");
        
        
        while($row3 = pg_fetch_assoc($query3)){ // para cada pelicula b evaluada por u
           
            $b = pg_query($dbconn, "SELECT nota FROM califica WHERE idp='" .$row3['id']. "' AND idu='".$row2['id']."'");
            
             echo $row3['id'];
           
         if(pg_num_rows($b)>0){
             $rb = pg_fetch_row($b); // nota del usuario u - b.
                

                             $sum = $sum + (($ra[0] - $row1['promedio'])*($rb[0] - $row3['promedio']));  //Numerador          
                             $sum1 = $sum1 + (($ra[0] - $row1['promedio'])*($ra[0] - $row1['promedio']));              
                             $sum2 = $sum2 + (($ra[0] - $row3['promedio'])*($ra[0] - $row3['promedio'])); 
            }
         
            }
            if($sum1 != 0 && $sum2!=0){
            $corrab = ($sum)/(sqrt($sum1)*sqrt($sum2));
            //$insert = pg_query($dbconn, "INSERT INTO corr (pela, pelb, correl) VALUES ('".$row1['id']."','".$row2['id']."','".$corrab."')");
            echo "<br>Corr entre ".$row1['id']." y ".$row3['id']. ": ".$corrab."<br>";
            $sum = 0;
            $sum1 = 0;
            $sum2 = 0;
                }
        }
    }
}


?>