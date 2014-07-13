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
   	$nombre = $_SESSION["Nombre"];
	$apellido = $_SESSION["Apellido"];
	$password = $_SESSION["Password"];
	$email = $_SESSION["Email"];
	$id = $_SESSION["Id"];
   	echo '<h4>Editar Informacion</h4>
    <div class="form_settings">
        <form name="update"  method=post accept-charset="utf-8">
         <p>
          	<label for="nombre">Nombre: </label>
          	
            <input type="text" name="nombre" value="'. $nombre .'">';
     echo "    </p>     
          <p>
          	<label for=apellido>Apellido: </label>
          	
            <input type='text' name='apellido' value='".$apellido."'>
          </p>
          
          <p>
          	<label for='password'>Password: </label>
          	 
            <input type='password' name='password' value='".$password."'>
         </p>
          
          <p>
          	<label for='email'>Email: </label>
          	
            <input type='text' name='email' value=".$email." readonly>
          </p>
          <p>
          	<label for='actualizar'> </label>
          	
            <input type='submit'   onclick = 'this.form.action = \"confirmuseredit.php?id=".$id."\"' name='Actualizar' value='Actualizar'>
          </p>         
        </form> 
		</div>";
		
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