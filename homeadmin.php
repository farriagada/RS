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
          <h1><a href="homeadmin.php">Reco<span class="logo_colour">Movie</span></a></h1>

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
          <li><a href="homeadminelus.php">Eliminar Usuario</a></li>
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
     	<h3>Agregar Pelicula</h3>
		<div class="form_settings">
		<form name="addpeli" action="addpel.php" method="post" accept-charset="utf-8" onsubmit="return minimum();">
			<p>
			<label for="titulo">T&iacute;tulo: </label>
			<input type="text" name="titulo" placeholder="Ej. Titanic" required><br>
			</p>
			<p>
			<label for="descr">Descripci&oacute;n: </label>
			<input type="text" name="descripcion" placeholder="Ej. Titanic es una pelicula estadounidense..." required><br>
			</p>
			<p>
			<label for="sitio">Sitio: </label>
			<input type="sitio" name="sitio" placeholder="Ej. www.titanic.com" required><br>
			</p>
			<p>
			<label for="ano">A&ntilde;o: </label>
			<input type="ano" name="ano" placeholder="Ej. 1995" required>
			</p> 
            <label for='Agregar'> </label>       	
            <input type='submit' name='Agregar' value='Agregar'><br><br>  
     	        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    	RecoMovies es una Web dise&ntilde;ada para Ingenieria de Software, Universidad de Concepcion
    </div>
  </div>
</body>
</html>