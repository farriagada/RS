<!DOCTYPE HTML>
<html>
<?php
session_start();
?>
<head>
  <title>ADMIN SECTOR</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
	<?php
    include("DBconnection/connection.php");
    ?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Reco<span class="logo_colour">Movie</span></a></h1>

          <h2><?php
   
    echo "<h2>Bienvenido, " . $_SESSION['Nombre'] . "</h2>";
    //echo "<br>";
    print( '<h2><a href="edituser.php">Editar</a>' );
    echo "- ";
 	print( '<a href="logout.php">Salir</a></br>' );
    ?></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="homeadmin.php">Modificar Cat&aacute;logo</a></li>
          <li><a href="recom.php">Actualizar Recomendaciones</a></li>
          <li><a href="page.html">Eliminar Usuario</a></li>
        </ul>
      </div>
    </div>
    
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
      	<h3>Buscar Pelicula</h3>
        <form method="post" action="busquedaadmin.php" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Ingresar T&iacute;tulo" 
            onfocus="if(this.value=='Ingresar T&iacute;tulo')this.value='';"
            onblur="if(this.value=='')this.value='Ingresar T&iacute;tulo';" />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>    
        
      </div>
      <div id="content">
     <?php
    include("DBconnection/connection.php");
    include("catalogo.php"); 
	$titulo = $_POST["titulo"];
	$descr = $_POST["descripcion"];
	$sitio = $_POST["sitio"];
	$ano = $_POST["ano"];
	$promedio = 0;
	$genero = $_POST['Genero'];
	$idioma = $_POST['Idioma'];
	
      	
  		$result = pg_query($dbconn, "SELECT id as num FROM pelicula order by id desc limit 1");
        $numofidmax = pg_fetch_assoc($result);
		$id = $numofidmax['num'] + 1;
        $query = pg_query($dbconn, "INSERT INTO pelicula (id, titulo, descr, sitio, ano, promedio) VALUES ('$id', '$titulo','$descr','$sitio','$ano','$promedio')");	
  		
		$n = count($genero);
        //echo $genero[0];
        for ($i = 0; $i <$n; $i++){
            $query2 = pg_query($dbconn, "INSERT INTO tiene3 (id, nombre) VALUES ('$id','$genero[$i]') ");
        }
		
		$m = count($idioma);
        //echo $idioma[0];
        for ($j = 0; $j <$m; $j++){
            $query3 = pg_query($dbconn, "INSERT INTO tiene2 (id, nombre) VALUES ('$id','$idioma[$j]') ");
        }
		
		
  		if($query && $query2 && $query3){
				
    		echo "<script>
    			 alert('Agregado Correctamente');
       			 window.location.href='homeadmin.php';
    			</script>";	
				
				
						
  		}
  		
       ?>
		
		
		
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        RecoMovies es una Web dise&ntilde;ada para Ingenieria de Software, Universidad de Concepcion
    </div>
  </div>
</body>
</html>