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
          <li><a href="homeadmin.php">Modificar Cat&aacute;logo</a></li>
          <li><a href="recom.php">Actualizar Recomendaciones</a></li>
          <li class="selected"><a href="homeadminelus.php">Eliminar Usuario</a></li>
        </ul>
      </div>
    </div>
    
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">    	        
      </div> 
      
     <div id="content">
     	<h3>Buscar Usuario</h3>
     	<div class="form_settings">
        <form method="post" action="busquedauser.php" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" placeholder="Buscar por nombre de usuario o parte de el"
            onfocus="if(this.value=='Buscar por nombre de usuario o parte de el')this.value='';"
            onblur="if(this.value=='')this.value='Buscar por nombre de usuario o parte de el';" />
         </div>   
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>  
       
     	        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    	RecoMovies es una Web dise&ntilde;ada para Ingenieria de Software, Universidad de Concepcion
    </div>
  </div>
</body>
</html>