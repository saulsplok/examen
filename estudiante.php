<?php 
session_start();
//si la variable existe o contiene algo...
if($_SESSION['admin']==false){

	if($_SESSION['admin']!=0){

	header('location:index.html');
	}
}else{
	header('location:index.html');	
	}


echo "estudiante";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index.php</title>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="estilo.css" >
</head>
<body>
<li>Cerrar sesion</li>
<section class="examen">
		<h1>EXAMEN</h1>
		<button class="comienzaexamen">comenzar examen</button>
	</section>


<section class="preguntas">
	<article>
		
<?php

include ('conecta.php');
$Con=new conexion();

$Con->preguntas();




?>
	</article>

	
	<article class="calificacion">
	<button class="califica">Califica</button>
	<h2 class="calificacion"></h2>
</article>
</section>
	
	

	<script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="codigo.js"></script>
</body>
</html>