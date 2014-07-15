<!DOCTYPE HTML>
<html>

<head>
  <title>RecoMovies</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
<script type="text/javascript">
function redirect() {
	window.location = "index.php"
}
</script>  
  
</head>

<body>

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Reco<span class="logo_colour">Movies</span></a></h1>
          <h2>La Web no oficial de Pelis</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
        	<div class="loginform">
 			<form name="login" action="login.php" method="post" accept-charset="utf-8">
	
					<label for="usermail"> </label>
					<input type="email" name="usermail" placeholder="Email" required>
			
					<label for="password"> </label>
					<input type="password" name="password" placeholder="Password" required>
				
					<input type="submit" value="Login">							
		</form>
		</div>
        </ul>
      </div>
    </div>
    <div id="site_content">
   <div id="content">
	<h1>RecoMovies es la Base de Datos no oficial del s&eacute;ptimo vicio. Reg&iacute;strate ahora!</h1>
	<div class="form_settings">
	<form name="signup" action="signup.php" method="post" accept-charset="utf-8" onsubmit="return minimum();">
		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre" required><br>
		<label for="apellido">Apellido: </label>
		<input type="text" name="apellido" required><br>
		<label for="password">Password: </label>
		<input type="password" name="password" required><br>
		<label for="usermail">Email: </label>
		<input type="email" name="usermail" placeholder="youremail@host.com" required><br><br>
		<!-- Generos que gusten -->
		<label for="Genres">G&eacute;neros que te gustan: </label>
		<label>Action</label><input type="checkbox" name="Genero[]" value="Action" id="1">
		<label for="Genres"> </label>
		<label>Comedy</label><input type="checkbox" name="Genero[]" value="Comedy" id="2">
		<label for="Genres"> </label>
		<label>Horror</label><input type="checkbox" name="Genero[]" value="Horror" id="3"><br>
		<label for="Genres"> </label>
		<label>Thriller</label><input type="checkbox" name="Genero[]" value="Thriller" id="4"><br>
		<label for="Genres"> </label>
		<label>Animation</label><input type="checkbox" name="Genero[]" value="Animation" id="5"><br>
		<label for="Genres"> </label>
		<label>Drama</label><input type="checkbox" name="Genero[]" value="Drama" id="6"><br>
		<label for="Genres"> </label>
		<label>Romance</label><input type="checkbox" name="Genero[]" value="Romance" id="7"><br>
		<label for="Genres"> </label>
		<label>Mystery</label><input type="checkbox" name="Genero[]" value="Mystery" id="8"><br>
		<label for="Genres"> </label>
		<label>Sci-fi</label><input type="checkbox" name="Genero[]" value="Sci-fi" id="9"><br>
		<label for="Genres"> </label>
		<label>Crime</label><input type="checkbox" name="Genero[]" value="Crime" id="10"><br>
		<label for="Genres"> </label>
		<label>War</label><input type="checkbox" name="Genero[]" value="War" id="11"><br>
		<label for="Genres"> </label>
		<label>Children</label><input type="checkbox" name="Genero[]" value="Children" id="12"><br><br><br>
		<!-- Películas que no gusten -->
		<label for="Genres">G&eacute;neros que no te gustan: </label>
		<label>Action</label><input type="checkbox" name="nGenero[]" value="Action" id="13">
		<label for="Genres"> </label>
		<label>Comedy</label><input type="checkbox" name="nGenero[]" value="Comedy" id="14">
		<label for="Genres"> </label>
		<label>Horror</label><input type="checkbox" name="nGenero[]" value="Horror" id="15"><br>
		<label for="Genres"> </label>
		<label>Thriller</label><input type="checkbox" name="nGenero[]" value="Thriller" id="16"><br>
		<label for="Genres"> </label>
		<label>Animation</label><input type="checkbox" name="nGenero[]" value="Animation" id="17"><br>
		<label for="Genres"> </label>
		<label>Drama</label><input type="checkbox" name="nGenero[]" value="Drama" id="18"><br>
		<label for="Genres"> </label>
		<label>Romance</label><input type="checkbox" name="nGenero[]" value="Romance" id="19"><br>
		<label for="Genres"> </label>
		<label>Mystery</label><input type="checkbox" name="nGenero[]" value="Mystery" id="20"><br>
		<label for="Genres"> </label>
		<label>Sci-fi</label><input type="checkbox" name="nGenero[]" value="Sci-fi" id="21"><br>
		<label for="Genres"> </label>
		<label>Crime</label><input type="checkbox" name="nGenero[]" value="Crime" id="22"><br>
		<label for="Genres"> </label>
		<label>War</label><input type="checkbox" name="nGenero[]" value="War" id="23"><br>
		<label for="Genres"> </label>
		<label>Children</label><input type="checkbox" name="nGenero[]" value="Children" id="24"><br><br><br>
		<!-- Idiomas que gusten -->
		<label for="Genres">Idiomas que prefieres: </label>
		<label>English</label><input type="checkbox" name="Idioma[]" value="English" id="25">
		<label for="Genres"> </label>
		<label>Spanish</label><input type="checkbox" name="Idioma[]" value="Spanish" id="26">
		<label for="Genres"> </label>
		<label>German</label><input type="checkbox" name="Idioma[]" value="German" id="27"><br>
		<label for="Genres"> </label>
		<label>Portuguese</label><input type="checkbox" name="Idioma[]" value="Portuguese" id="28"><br>
		<label for="Genres"> </label>
		<label>Dutch</label><input type="checkbox" name="Idioma[]" value="Dutch" id="29"><br>
		<label for="Genres"> </label>
		<label>French</label><input type="checkbox" name="Idioma[]" value="French" id="30"><br>
		<label for="Genres"> </label>
		<label>Chinese</label><input type="checkbox" name="Idioma[]" value="Chinese" id="31"><br>
		<label for="Genres"> </label>
		<label>Japanese</label><input type="checkbox" name="Idioma[]" value="Japanese" id="32"><br>
		<label for="Genres"> </label>
		<label>Bulgarian</label><input type="checkbox" name="Idioma[]" value="Bulgarian" id="33"><br>
		<label for="Genres"> </label>
		<label>Turkish</label><input type="checkbox" name="Idioma[]" value="Turkish" id="34"><br>
		<label for="Genres"> </label>
		<label>Finnish</label><input type="checkbox" name="Idioma[]" value="Finnish" id="35"><br>
		<label for="Genres"> </label>
		<label>Indian</label><input type="checkbox" name="Idioma[]" value="Indian" id="36"><br>
		<label for="Genres"> </label>
		<label>Russian</label><input type="checkbox" name="Idioma[]" value="Russian" id="37"><br><br><br>
		
		<label for="Debes calificar 10 películas: "> </label>
		
		<div class='form_settings'>  		
		<?php
		
		include("DBconnection/connection.php");
		include("todos.php");
		//$p1 = rand(0,50);
		$min=0;
		$max=50;
		$quantity=10;
		
		function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    	$numbers = range($min, $max);
    	shuffle($numbers);
    	return array_slice($numbers, 0, $quantity);
		}		
		$arr=UniqueRandomNumbersWithinRange($min,$max,$quantity);
	
		$query=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[0]' ");
		$query1=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[1]' ");
		$query2=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[2]' ");
		$query3=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[3]' ");
		$query4=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[4]' ");
		$query5=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[5]' ");
		$query6=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[6]' ");
		$query7=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[7]' ");
		$query8=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[8]' ");
		$query9=pg_query($dbconn, "SELECT * FROM pelicula WHERE id='$arr[9]' ");
		$res=pg_fetch_row($query);
		$res1=pg_fetch_row($query1);
		$res2=pg_fetch_row($query2);
		$res3=pg_fetch_row($query3);
		$res4=pg_fetch_row($query4);
		$res5=pg_fetch_row($query5);
		$res6=pg_fetch_row($query6);
		$res7=pg_fetch_row($query7);
		$res8=pg_fetch_row($query8);
		$res9=pg_fetch_row($query9);
		$peli1 = new Pelicula();
		$peli1->setTitulo($res[1]);
        $peli1->setId($res[0]);
        $peli1->setDescr($res[2]);
        $peli1->setSitio($res[3]);
        $peli1->setAno($res[4]);
        $peli1->setPromedio($res[5]);
		
		$peli2 = new Pelicula();
		$peli2->setTitulo($res1[1]);
        $peli2->setId($res1[0]);
        $peli2->setDescr($res1[2]);
        $peli2->setSitio($res1[3]);
        $peli2->setAno($res1[4]);
        $peli2->setPromedio($res1[5]);
		
		$peli3 = new Pelicula();
		$peli3->setTitulo($res2[1]);
        $peli3->setId($res2[0]);
        $peli3->setDescr($res2[2]);
        $peli3->setSitio($res2[3]);
        $peli3->setAno($res2[4]);
        $peli3->setPromedio($res2[5]);
		
		$peli4 = new Pelicula();
		$peli4->setTitulo($res3[1]);
        $peli4->setId($res3[0]);
        $peli4->setDescr($res3[2]);
        $peli4->setSitio($res3[3]);
        $peli4->setAno($res3[4]);
        $peli4->setPromedio($res3[5]);
		
		$peli5 = new Pelicula();
		$peli5->setTitulo($res4[1]);
        $peli5->setId($res4[0]);
        $peli5->setDescr($res4[2]);
        $peli5->setSitio($res4[3]);
        $peli5->setAno($res4[4]);
        $peli5->setPromedio($res4[5]);
		
		$peli6 = new Pelicula();
		$peli6->setTitulo($res5[1]);
        $peli6->setId($res5[0]);
        $peli6->setDescr($res5[2]);
        $peli6->setSitio($res5[3]);
        $peli6->setAno($res5[4]);
        $peli6->setPromedio($res5[5]);
		
		$peli7 = new Pelicula();
		$peli7->setTitulo($res6[1]);
        $peli7->setId($res6[0]);
        $peli7->setDescr($res6[2]);
        $peli7->setSitio($res6[3]);
        $peli7->setAno($res6[4]);
        $peli7->setPromedio($res6[5]);
		
		$peli8 = new Pelicula();
		$peli8->setTitulo($res7[1]);
        $peli8->setId($res7[0]);
        $peli8->setDescr($res7[2]);
        $peli8->setSitio($res7[3]);
        $peli8->setAno($res7[4]);
        $peli8->setPromedio($res7[5]);
		
		$peli9 = new Pelicula();
		$peli9->setTitulo($res8[1]);
        $peli9->setId($res8[0]);
        $peli9->setDescr($res8[2]);
        $peli9->setSitio($res8[3]);
        $peli9->setAno($res8[4]);
        $peli9->setPromedio($res8[5]);
		
		$peli10 = new Pelicula();
		$peli10->setTitulo($res9[1]);
        $peli10->setId($res9[0]);
        $peli10->setDescr($res9[2]);
        $peli10->setSitio($res9[3]);
        $peli10->setAno($res9[4]);
        $peli10->setPromedio($res9[5]);
		
	
		 echo "  
		 <label for='Calificaini'>Debes calificar 10 pel&iacute;culas que hayas visto (en caso contrario, recargar pel&iacute;culas): </label><br><br>
          <p>
          <label for='A'></label>  	
            <input type='text' name='pelicula1' value='".$peli1->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota1'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
           <p>  	
           <label for='A'></label>  
            <input type='text' name='pelicula2' value='".$peli2->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota2'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula3' value='".$peli3->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota3'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula4' value='".$peli4->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota4'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula5' value='".$peli5->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota5'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula6' value='".$peli6->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota6'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula7' value='".$peli7->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota7'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula8' value='".$peli8->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota8'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula9' value='".$peli9->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota9'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>
          <p>  	
          	<label for='A'></label>  
            <input type='text' name='pelicula10' value='".$peli10->getTitulo()."' readonly><br>
            <label for='B'> 		 </label> 
            <select name='nota10'>
            		<option value=''></option>
            		<option value='1.0'>1.0</option>
					<option value='1.5'>1.5</option>
					<option value='2.0'>2.0</option>
					<option value='2.5'>2.5</option>
					<option value='3.0'>3.0</option>
					<option value='3.5'>3.5</option>
					<option value='4.0'>4.0</option>
					<option value='4.5'>4.5</option>
					<option value='5.0'>5.0</option>
			</select>
          </p>";	
		?>
		</div>
		<br>
		
		<label for="Recargar"></label>
		<input type="button" onclick="redirect()" value="Recargar Peliculas"><br><br>
		<label for="Registro">       </label>
		<input type="submit" name="Registrarse" value="Registrarse">
		
	
	<script>
	

	
	
		function minimum(){
			var count;
			count = 0;
			for (var i = 1; i<13; i++){
				if(document.getElementById(i).checked == true) count++;
			}
			if(count < 3) {
				alert("Debes seleccionar al menos 3 generos que te gusten");
				return false;
			}
			else{
				count = 0;
				for (var j=13; j<25;j++){
					if(document.getElementById(j).checked == true) count++;					
				}
				if(count < 3){
					alert("Debes seleccionar al menos 3 generos que no te gusten");
					return false;
				}
				else {
					count = 0;
					for (var k=25; k<38;k++){
					if(document.getElementById(k).checked == true) count++;					
				}
				if(count != 2){
					alert("Debes seleccionar solo 2 idiomas favoritos");
					return false;
				}
				else return true;
				}
			}
		}
	</script>
	
	
	</div>	
     </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    RecoMovie es una Web dise&ntilde;ada para Ingenieria de Software, Universidad de Concepcion
    </div>
  </div>
</body>
</html>
