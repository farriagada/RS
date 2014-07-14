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
    include("todos.php");
     
	//include("busquedaadmin.php");   
    $pels = $_GET["titulo"];
	
	// $pels =
    $c = new catalogo();
    $p = $c->buscarPelicula($pels);
	$titulo = $p->getTitulo();
	$descr = $p->getDescr();
	$sitio = $p->getSitio();
	$ano = $p->getAno();
    $id = $p->getId();
	
   	echo '<h4>Editar Informacion Pelicula</h4>
    <div class="form_settings">
        <form name="update"  method=post accept-charset="utf-8">
         <p>
          	<label for="titulo">T&iacute;tulo: </label>
          	
            <input type="text" name="titulo" value="'. $titulo .'">';
     echo "    </p>     
          <p>
          	<label for=descripcion>Descripci&oacute;n: </label>
          	
            <input type='text' name='descripcion' value='".$descr."'>
          </p>
          
          <p>
          	<label for='sitio'>Sitio: </label>
          	 
            <input type='text' size='200' maxlength='200' name='sitio' value=".$sitio.">
         </p>
          
          <p>
          	<label for='ano'>A&ntilde;o: </label>
          	
            <input type='text' name='ano' value=".$ano.">
          </p>
          <p>
          	<label for='actualizar'> </label>
          	
            <input type='submit'   onclick = 'this.form.action = \"confirmact.php?id=".$id."\"' name='Actualizar' value='Actualizar'>
          </p>  
          <p>  
            <label for='eliminar'> </label>
          	
            <input type='submit'   onclick = 'this.form.action = \"confirmel.php?id=".$id."\"' name='Eliminar' value='Eliminar'>
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