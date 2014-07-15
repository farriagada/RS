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
			<input type="ano" name="ano" placeholder="Ej. 1995" required><br><br>
			</p> 
            
            <label for="Genres">G&eacute;neros: </label>
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
		
		<label for="Genres">Idiomas: </label>
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