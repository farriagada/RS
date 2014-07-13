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
          <li><a href="home.php">Home</a></li>
          <li><a href="listamovies.php">Cat&aacute;logo</a></li>
          <li><a href="page.html">A Page</a></li>
        </ul>
      </div>
    </div>
    
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        
      </div>
      <div id="content">
            <?php
    include("DBconnection/connection.php");
    include("catalogo.php"); 
	//include("busquedaadmin.php");   
   	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$password = $_POST["password"];
	$id = $_GET["id"];
	
	echo "<script>
    			 alert('Datos Modificados Correctamente');
				 alert('Debera proporcionar los nuevos datos cuando inicie sesion nuevamente');
    		</script>";	
	
    $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
    $result = pg_query($dbconn,"UPDATE usuario SET nombre='$nombre', apellido='$apellido', pass='$password' WHERE id='$id'");
  		
  		if($result){
  							
  			//	echo "<script>
  			//	alert('$mensaje');
			//	window.location = "//localhost/RS/detallepeliculaadmin.php?titulo=".$titulo";
 			//	</script>"; 	
				
			
			
			echo "<script>
    			 alert('Datos Modificados Correctamente');
				 alert('Debera proporcionar los nuevos datos cuando inicie sesion nuevamente');
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