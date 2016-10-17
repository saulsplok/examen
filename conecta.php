<?php

$link=mysql_connect('localhost','root','');
mysql_select_db('examen');

class conexion{
	function preguntas(){
		$host="localhost";
		$user="root";
		$pw="";
		$db="examen";

		$con=mysql_connect($host, $user, $pw) or die("no se pudo conectar a la base de datos");
		mysql_select_db($db,$con) or die ("no se encontro con la base de datos");
		$query="SELECT * FROM preguntas,respuestas WHERE respuestas.id_pregunta=preguntas.id;";

		$resultado=mysql_query($query);

		while ($campo=mysql_fetch_array($resultado)){
			echo "<div class='$campo[id]'><h2>Pregunta $campo[id]<br>$campo[pregunta]</h2><div class='divresp' data-pregunta=$campo[id]>

			<div class='botones'><p>$campo[opcA]</p><br><button class='botonesresp' data-resuser=a>respuesta a</button></div>

			<div class='botones'><p>$campo[opcB]</p><br><button class='botonesresp' data-resuser=b>respuesta b</button></div>
			

			<div class='botones'><p>$campo[opcC]</p><br><button class='botonesresp' data-resuser=c>respuesta c</button></div>
			

			<div class='botones'><p>$campo[opcD]</p><br><button class='botonesresp' data-resuser=d>respuesta d</button></div>
			
			</div>
			</div>";
		}

}





}

?>
