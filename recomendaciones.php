<!DOCTYPE HTML>
<html>
<?php
session_start();
?>
<head>
  <title>RecoMovies - Catalogo</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
          <li class="selected"><a href="listamovies.php">Cat&aacute;logo</a></li>
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
           <?php
        $id = $_SESSION['Id'];
        $count = 0;
        $result = pg_query($dbconn,"SELECT DISTINCT on (p.titulo, p.id) p.titulo, p.id, r.nota FROM pelicula as p,
                                    se_recomienda_a as r, usuario as u
                                    WHERE u.id = $id AND
                                    u.id = r.idu AND
                                    p.id = r.idp 
                                    ORDER BY p.titulo,p.id,r.nota DESC");


         while ($row = pg_fetch_assoc($result)){

                   $query = pg_query($dbconn, "SELECT DISTINCT t.nombre FROM no_gusta as t, usuario as u 
                                               WHERE  u.id = t.idu AND
                                               u.id = $id ");
                    
                    $dislike = array();
                    while ($gen = pg_fetch_assoc($query)){
                          array_push($dislike, $gen['nombre']);  
                    }

                    $pid = $row['id'];
                    $query2 = pg_query($dbconn, "SELECT DISTINCT t.nombre FROM tiene3 as t, pelicula as p 
                                               WHERE  p.id = t.id AND
                                                      p.id = $pid ");
                    $genres = array();
                    while ($gen2 = pg_fetch_assoc($query2)){
                          array_push($genres, $gen2['nombre']);
                    }
                  
                    $res = array_intersect($dislike, $genres);
                    if(empty($res)){
                          echo "<a href='detallepelicula.php?titulo=".$row['titulo']."'><h4>".$row['titulo']."</h4></a>";
                    }
                           
              
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
