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
          <li><a href="page.html">A Page</a></li>
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
	
	include("DBconnection/connection.php");
	include("todos.php");
   	echo '

	<head>
	<title>Calculando promedio...</title>
	<head>
	</head>
	</head>
	<body>';

	
	$c = new catalogo();
	$usuario = new usuario();
	$calificacion = new calificacion();
	$calificacion->setCalificacion($_POST["nota"]); 
	$p = $c->buscarPelicula($_POST["titulo"]);	
	$u=$usuario->encontrarUsuario($_POST["usuario"]);
	//echo "antes".$u->getId();
	//echo "antes".$p->getId();
	$calif=$calificacion->buscarCalificacion($u,$p);

	if($calificacion->getCalificacion()>=0){
	
		$calificacion->actualizar($u,$p,$_POST["nota"]);
	}else{
	
		$calificacion->crear($u,$p,$_POST["nota"]);
	}
        $p->calcPromedio();
        
        $u->eliminarWL($p);
	
	echo '
            <script type="text/javascript">  alert("Calificacion Guardada");</script>
	<script type="text/javascript">window.location.href="detallepelicula.php?titulo='.$_POST["titulo"].'"</script>
          
	</body>
	';
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

