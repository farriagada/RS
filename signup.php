<!DOCTYPE HTML>
<html>

<head>
  <title>RecomSite</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Reco<span class="logo_colour">Movie</span></a></h1>
          <h2>La Web de pelis</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
        </ul>
      </div>
    </div>
    <div id="site_content">
   <div id="content">
    <?php
        $mail = $_POST["usermail"];
        $pass = $_POST["password"]; 
        $name = $_POST["nombre"];
        $lastname = $_POST["apellido"];
        
        $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
        $result = pg_query($dbconn,"SELECT count(*) as total from usuario");
        $numofusers = pg_fetch_assoc($result);
        $id = $numofusers['total'] + 1;
        $query = pg_query($dbconn, "INSERT INTO usuario (id, email, pass, nombre, apellido) VALUES ('$id', '$mail','$pass','$name','$lastname')");
        
        //Se crean los arreglos de los checkboxes.
        $likegen = $_POST['Genero'];
        $dislikegen = $_POST['nGenero'];
        $langs = $_POST['Idioma'];
        
      
        $n = count($likegen);
        echo $likegen[0];
        for ($i = 0; $i <$n; $i++){
            $genre = pg_query($dbconn, "INSERT INTO gusta (idu, nombre) VALUES ('$id','$likegen[$i]') ");
        }
        $m = count($dislikegen);
        for ($j = 0; $j < $m; $j++){
            $nogenre = pg_query($dbconn, "INSERT INTO no_gusta(idu, nombre) VALUES ('$id','$dislikegen[$j]')");           
        }
        
        $o = count($langs);
        for ($k=0; $k < $o; $k++){
            $idioma = pg_query($dbconn, "INSERT INTO elige (idu, nombre) VALUES ('$id','$langs[$k]')");
        }
        
        if($query && $idioma && $nogenre && $genre) {
            echo "<script>
                 alert('Gracias por registrarte! Haz login cuando quieras!');
                 window.location.href='index.html';
                 </script>";
        }         
    ?>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    RecoMovie es una Web dise&ntilde;ada para Ingenieria de Software, Universidad de Concepcion
    </div>
  </div>
</body>
</html>