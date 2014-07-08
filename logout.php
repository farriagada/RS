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
        session_start();
        unset($_SESSION["Nombre"]);
        unset($_SESSION["Apellido"]);
        unset($_SESSION["Email"]);
        session_destroy();
   ?>
                 <script>
                 alert('Hasta luego!');
                 window.location.href='index.html';
                 </script>  
   
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    RecoMovie es una Web dise&ntilde;ada para Ingenieria de Software, Universidad de Concepcion
    </div>
  </div>
</body>
</html>
