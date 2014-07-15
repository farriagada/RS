<?php
echo "Prediccion<br>";
include("DBconnection/connection.php");
ini_set('max_execution_time', 3600);

$query1 = pg_query($dbconn, "SELECT id FROM usuario");

 $sum = 0;
            $sum1 = 0;
           

while ($row1 = pg_fetch_assoc($query1)){ // Para cada usuario.

	$query2 = pg_query($dbconn,"SELECT id FROM pelicula");

	
	while ($row2 = pg_fetch_assoc($query2)){ // Para  cada pelicula i

		
		$tmp = pg_query($dbconn,"SELECT nota from califica WHERE idu =".$row1['id']." AND idp = ".$row2['id']);
		if(pg_num_rows($tmp)== 0){ //Solo si el usuario no ha calificado la pelicula i. 
			// echo $row1['id']. " y " .$row2['id']. "<br>";	

			$query3 = pg_query($dbconn, "SELECT idp FROM califica WHERE idu=".$row1['id']);
			
			while ($row3 = pg_fetch_assoc($query3)){ // Para cada película j
				//echo "calificado por " .$row1['id']. " = ".$row3['idp']. "<br>";
				$nota_user = pg_query($dbconn, "SELECT nota from califica WHERE idu =".$row1['id']." AND idp = ".$row3['idp']); // Obtiene nota de usuario a j.

				//if(pg_num_rows($nota_user)>0){ // Solo si existe la nota de usuario a j.
					
					$corr = pg_query($dbconn, "SELECT correl FROM corr WHERE pela =" .$row2['id']. "AND pelb=".$row3['idp']); //Obtiene correlacion entre i y j
				    //echo $row2['id']. " y " .$row3['id']. "<br>";	
					if(pg_num_rows($query3)==1) {
						echo "HOLANDA";
						$Ruj = 0;
						$Sij = pg_fetch_assoc($corr);

						$sum = $sum + ($Sij['correl'] * $Ruj); // Numerador.
						$sum1 = $sum1 + abs($Sij['correl']); // Denominador.
					}
					else {
						$Ruj = pg_fetch_assoc($nota_user);
						$Sij = pg_fetch_assoc($corr);

						$sum = $sum + ($Sij['correl'] * $Ruj['nota']); // Numerador.
						$sum1 = $sum1 + abs($Sij['correl']); // Denominador.
					}
					
				//} 
			
			}	// Fin del ciclo de peliculas j
			if($sum1 != 0) $pred = $sum/$sum1;
			else $pred = 0;
			
			echo "Prediccion entre usuario " .$row1['id']. " y pelicula ".$row2['id'].": ".$pred."<br>";
			if($pred > 0){
			$ins = pg_query($dbconn, "INSERT INTO se_recomienda_a (idu, idp, nota) VALUES ('".$row1['id'] ."','".$row2['id']."','" .round($pred,1)."')");
			}
			 $sum = 0;
             $sum1 = 0;
           
		}
	} // Fin del ciclo de peliculas i

} // Fin del ciclo de usuarios.
?>