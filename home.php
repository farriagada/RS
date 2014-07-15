<!DOCTYPE HTML>
<html>
<?php
session_start();
?>
<head>
  <title>RecoMovies - Home</title>
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
          <li class="selected"><a href="home.php">Home</a></li>
          <li><a href="listamovies.php">Cat&aacute;logo</a></li>
          <li><a href="recomendaciones.php">Recomendaciones</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
      	<h3>Search</h3>
        <form method="post" action="search.php" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="" />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
        <!-- insert your sidebar items here -->
        <h3>WishList</h3>
        <?php
        $usuario = $_SESSION['Id'];
            $result = pg_query($dbconn, "SELECT p.titulo, p.promedio FROM pelicula as p, incluye as i, usuario as u WHERE
                                        $usuario=u.id AND
                                        u.id=i.id AND
                                        i.idpeli = p.id");
 
            while ($x = pg_fetch_assoc($result)) {
                echo"<a href='detallepelicula.php?titulo=".$x['titulo']."'><h4>". $x['titulo']."</h4></a><br>" ;
                echo"<h5>Calificacion: " .$x['promedio']. "</h5>";
                echo "<a href='delfromWL.php?movie=".$x['titulo']."'>Eliminar de la WishList</a><br><br>";
                echo "________________________";
            }
          
        ?>
        
    
        
      </div>
      <div id="content">
        <h1> Bienvenido, estas son las ultimas 10 peliculas del catalogo </h1>
        <?php
            $lasts = pg_query($dbconn, "SELECT id, titulo FROM pelicula ORDER BY id DESC");
            $count = 0;
            while ($row = pg_fetch_assoc($lasts)){

                  $lum = pg_query($dbconn, "SELECT nota FROM se_recomienda_a WHERE idu=".$_SESSION['Id']."AND idp=".$row['id']."");
                  if (pg_num_rows($lum)>0){
                    $mark = pg_fetch_assoc($lum);
                    echo "<a href='detallepelicula.php?titulo=".$row['titulo']."'><h4>".$row['titulo']." - ".$mark['nota']."</h4></a>";
                    $count++; 
                  }
                  if ($count == 10) {
                    $count = 0;
                    break;
                  }

            }

           // $query = pg_query($dbconn, "SELECT p.titulo, r.nota FROM se_recomienda_a as r, pelicula as p, usuario as u
                                       // WHERE p.id > $num2 AND p.id = r.idp AND r.idu = u.id");


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
