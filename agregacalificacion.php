<?php
include ('conecta.php');

//paraametros que va a recibir

$calificacion=$_POST['calificacion'];




$query="insert into calificaciones(calificacion) values($calificacion);";




mysql_query($query);
?>