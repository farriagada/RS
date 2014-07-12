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
    <?php
    include("DBconnection/connection.php");
    ?>
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
        /*$dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20"); */
        $query = pg_query($dbconn, "SELECT * FROM usuario AS u WHERE u.email = '$mail' AND u.pass='$pass'");
        $num = pg_num_rows($query);
        if($num > 0) {
            
            session_start();
            $row = pg_fetch_row($query);
            $_SESSION['Nombre']=$row[3];
            $_SESSION['Apellido']=$row[4];
            $_SESSION['Email']=$row[1];
         
            header('Location: http://localhost/RS/home.php');
        }
        else echo "<script>
                 alert('Error de Login, intenta de nuevo');
                 window.location.href='index.html';
                 </script>";        
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
