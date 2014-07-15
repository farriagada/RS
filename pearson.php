<html>
    <head>
        <title>RecoMovies - Pelicula</title>
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
    </head>

    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <div id="logo_text">
                        <h1><a href="index.html">Reco<span class="logo_colour">Movie</span></a></h1>
                        <h2><?php
                            echo "<h2>Bienvenido, " . $_SESSION['Nombre'] . "</h2>";
                            print( '<h2><a href="edituser.php">Editar</a>');
                            echo "- ";
                            print( '<a href="logout.php">Salir</a></br>');
                            ?></h2>
                    </div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <li><a href="home.php">Home</a></li>
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
                    <h3>WishList</h3>
                </div>
                <div id="content">
                    <?php
                    include("todos.php");
                    ini_set('memory_limit','-1');
                    ini_set('max_execution_time', 300);
                    $c = new catalogo();
                    $vectorA = array();
                    $vectorB = array();
                    $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
                    
                    //Para cada pelicula A
                    $query1 = "SELECT id,promedio FROM pelicula";
                    $peliculasA = pg_query($dbconn, $query1);
                    while ($peliculaA = pg_fetch_row($peliculasA)) {
                        echo "idp: $peliculaA[0] <br>";
                        for ($i = 0; $i < pg_num_rows($peliculasA); $i++) {
                            array_push($vectorA, 0);
                        }
                        $promedioA = $peliculaA[1];
                        $numerador = 0;
                        $parteIzq = 0;
                        $parteDer = 0;
                        //Para cada usuario u que evaluó A
                        $query2 = "SELECT * FROM califica WHERE idp=$peliculaA[0] ";
                        $usuariosEvaluaA = pg_query($dbconn, $query2);
                        while ($usuario = pg_fetch_row($usuariosEvaluaA)) {
                            $vectorA = cargarVector($usuario[0], $peliculaA[0], $vectorA);
                            //Para cada pelicula B evaluada por u
                            $query3 = "SELECT idp,promedio FROM califica,pelicula WHERE idu=$usuario[0] and id=idp";
                            $peliculasB = pg_query($dbconn, $query3);
                            while ($peliculaB = pg_fetch_row($peliculasB)) {
                                for ($i = 0; $i < pg_num_rows($peliculasA); $i++) {
                                    array_push($vectorB, 0);
                                }
                                $vectorB = cargarVector($usuario[0], $peliculaB[0], $vectorB);
                                $promedioB = $peliculaB[1];
                                for ($i = 0; $i < pg_num_rows($peliculasA); $i++) {
                                    $numerador = $numerador + (($vectorA[$i] - $promedioA) * ($vectorB[$i] - $promedioB));
                                    $parteIzq = $parteIzq + (($vectorA[$i] - $promedioA) * ($vectorA[$i] - $promedioA));
                                    $parteDer = $parteDer + (($vectorB[$i] - $promedioB) * ($vectorB[$i] - $promedioB));
                                }
                                $denominador = sqrt($parteIzq) * sqrt($parteDer);
                                $corr = $numerador / $denominador;
                                echo "Correlacion($peliculaA[0],$peliculaB[0])=$corr <br>";
                            }
                        }
                    }

                    function cargarVector($usuario, $pelicula, $vector) {
                        $dbconn = pg_connect("host=localhost port=5432 dbname=Isw2 user=postgres password=lokoko20");
                        $notas = pg_query($dbconn, "select idp,nota from califica where idu=$usuario and idp=$pelicula");
                        while ($nota = pg_fetch_row($notas)) {
                            $vector[$nota[0]] = $nota[1];
                        }
                        return $vector;
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
