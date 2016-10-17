<?php
include ('conecta.php');

//paraametros que va a recibir

$id=$_POST['id'];
$id_pregunta=$_POST['id_pregunta'];



$query="insert into respuestas_user(id_pregunta,respuesta) values($id_pregunta,'$id');";




mysql_query($query);
?>