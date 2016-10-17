<?php
include 'conecta.php';
//paraametros que va a recibir

$id_pregunta=$_GET['id_pregunta'];


 
$query="select id_pregunta,correcta from respuestas where id_pregunta=$id_pregunta;";
$resultado=mysql_query($query);


while ($campo=mysql_fetch_array($resultado)){
			
			$arreglo = array('pregunta' => $campo['id_pregunta'],'correcta' => $campo['correcta']);
		}
			

echo json_encode($arreglo);

?>