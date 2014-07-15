<!DOCTYPE HTML>
<html>

<head>
  <title>RecomSite</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
    <?php
    include("DBconnection/connection.php");
	include("index.php");
    ?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Reco<span class="logo_colour">Movie</span></a></h1>
          <h2>La Web de pelis</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
        </ul>
      </div>
    </div>
    <div id="site_content">
   <div id="content">
    <?php
        $mail = $_POST["usermail"];
        $pass = $_POST["password"]; 
        $name = $_POST["nombre"];
        $lastname = $_POST["apellido"];
		$nota1 = $_POST["nota1"];
		$nota2 = $_POST["nota2"];
		$nota3 = $_POST["nota3"];
		$nota4 = $_POST["nota4"];
		$nota5 = $_POST["nota5"];
		$nota6 = $_POST["nota6"];
		$nota7 = $_POST["nota7"];
		$nota8 = $_POST["nota8"];
		$nota9 = $_POST["nota9"];
		$nota10 = $_POST["nota10"];
		
		$n1 = strlen($nota1);
		$n2 = strlen($nota2);
		$n3 = strlen($nota3);
		$n4 = strlen($nota4);
		$n5 = strlen($nota5);
		$n6 = strlen($nota6);
		$n7 = strlen($nota7);
		$n8 = strlen($nota8);
		$n9 = strlen($nota9);
		$n10 = strlen($nota10);
		
		
		
		
	
		if(strlen($nota1)==0 || strlen($nota2)==0 || strlen($nota3)==0 || strlen($nota4)==0 || strlen($nota5)==0 || strlen($nota6)==0 || strlen($nota7)==0 || strlen($nota8)==0
		   || strlen($nota9)==0 || strlen($nota10)==0){
		   	
			echo "<script>
                 alert('Debes necesariamente calificar 10 peliculas.');
                 window.location.href='index.php';
                 </script>";
				 
			break;
		   }
		
				
		$pelicula1 = $_POST["pelicula1"];
		$pelicula2 = $_POST["pelicula2"];
		$pelicula3 = $_POST["pelicula3"];
		$pelicula4 = $_POST["pelicula4"];
		$pelicula5 = $_POST["pelicula5"];
		$pelicula6 = $_POST["pelicula6"];
		$pelicula7 = $_POST["pelicula7"];
		$pelicula8 = $_POST["pelicula8"];
		$pelicula9 = $_POST["pelicula9"];
		$pelicula10 = $_POST["pelicula10"];
        
       /* $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20"); */
        $result = pg_query($dbconn,"SELECT id as num FROM usuario order by id desc limit 1");
        $numofusers = pg_fetch_assoc($result);
        $id = $numofusers['num'] + 1;
        $query = pg_query($dbconn, "INSERT INTO usuario (id, email, pass, nombre, apellido) VALUES ('$id', '$mail','$pass','$name','$lastname')");
        $query2 = pg_query($dbconn, "INSERT INTO wishlist (iduser,id) VALUES ('$id','$id')");
		
		$id1 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula1'");
		$id11 = pg_fetch_assoc($id1);
		$id111 =  $id11['id'];
		$cal1 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id111','$id','$nota1')");
		
		$id2 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula2'");
		$id22 = pg_fetch_assoc($id2);
		$id222 =  $id22['id'];
		$cal2 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id222','$id','$nota2')");
		
		$id3 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula3'");
		$id33 = pg_fetch_assoc($id3);
		$id333 =  $id33['id'];
		$cal3 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id333','$id','$nota3')");
		
		$id4 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula4'");
		$id44 = pg_fetch_assoc($id4);
		$id444 =  $id44['id'];
		$cal4 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id444','$id','$nota4')");
		
		$id5 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula5'");
		$id55 = pg_fetch_assoc($id5);
		$id555 =  $id55['id'];
		$cal5 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id555','$id','$nota5')");
		
		$id6 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula6'");
		$id66 = pg_fetch_assoc($id6);
		$id666 =  $id66['id'];
		$cal6 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id666','$id','$nota6')");
		
		$id7 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula7'");
		$id77 = pg_fetch_assoc($id7);
		$id777 =  $id77['id'];
		$cal7 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id777','$id','$nota7')");
		
		$id8 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula8'");
		$id88 = pg_fetch_assoc($id8);
		$id888 =  $id88['id'];
		$cal8 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id888','$id','$nota8')");
		
		$id9 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula9'");
		$id99 = pg_fetch_assoc($id9);
		$id999 =  $id99['id'];
		$cal9 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id999','$id','$nota9')");
		
		$id0 = pg_query($dbconn,"SELECT id FROM pelicula WHERE titulo='$pelicula10'");
		$id00 = pg_fetch_assoc($id0);
		$id000 =  $id00['id'];
		$cal10 = pg_query($dbconn, "INSERT INTO califica (idp,idu,nota) VALUES ('$id000','$id','$nota10')");
		
		
		
		
		
        //Se crean los arreglos de los checkboxes.
        $likegen = $_POST['Genero'];
        $dislikegen = $_POST['nGenero'];
        $langs = $_POST['Idioma'];
        
      
        $n = count($likegen);
        echo $likegen[0];
        for ($i = 0; $i <$n; $i++){
            $genre = pg_query($dbconn, "INSERT INTO gusta (idu, nombre) VALUES ('$id','$likegen[$i]') ");
        }
        $m = count($dislikegen);
        for ($j = 0; $j < $m; $j++){
            $nogenre = pg_query($dbconn, "INSERT INTO no_gusta(idu, nombre) VALUES ('$id','$dislikegen[$j]')");           
        }
        
        $o = count($langs);
        for ($k=0; $k < $o; $k++){
            $idioma = pg_query($dbconn, "INSERT INTO elige (idu, nombre) VALUES ('$id','$langs[$k]')");
        }
        
        if($query && $idioma && $nogenre && $genre) {
            echo "<script>
                 alert('Gracias por registrarte! Haz login cuando quieras!');
                 window.location.href='index.php';
                 </script>";
        }         
    ?>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    RecoMovie es una Web dise&ntilde;ada para Ingenieria de Software, Universidad de Concepcion
    </div>
  </div>
</body>
</html>