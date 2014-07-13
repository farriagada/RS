<html>
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
	echo $_POST["titulo"];
	
	echo $_POST["nota"];
	
	$c = new catalogo();
	$usuario = new usuario();
	$calificacion = new calificacion();
	$calificacion->setCalificacion($_POST["nota"]); 
	$p = $c->buscarPelicula($_POST["titulo"]);	
	$u=$usuario->encontrarUsuario($_POST["usuario"]);
	//echo "antes".$u->getId();
	//echo "antes".$p->getId();
	$calif=$calificacion->buscarCalificacion($u,$p);
	echo 'OK<br>';
	if($calificacion->getCalificacion()>=0){
		echo "actualizo";
		$calificacion->actualizar($u,$p,$_POST["nota"]);
	}else{
		echo "creo";
		$calificacion->crear($u,$p,$_POST["nota"]);
	}
        $p->calcPromedio();
        
        $u->eliminarWL($p);
	echo "salio";
	echo '
            <script type="text/javascript">  alert("OK");</script>
	<script type="text/javascript">window.location.href="detallepelicula.php?titulo='.$_POST["titulo"].'"</script>
          
	hola pinwi
	</body>
	';
?>
</html>
