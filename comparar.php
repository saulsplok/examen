
<?php
class conexioncalif{



		function correctas(){
		$host="localhost";
		$user="root";
		$pw="";
		$db="examen";

		$con=mysql_connect($host, $user, $pw) or die("no se pudo conectar a la base de datos");
		mysql_select_db($db,$con) or die ("no se encontro con la base de datos");
		
		$query="SELECT preguntas.id,respuestas.correcta FROM respuestas,preguntas WHERE preguntas.id=respuestas.id_pregunta;";

		$resultado=mysql_query($query);

		while ($campo=mysql_fetch_array($resultado)){
			echo "<div class='funcioncalifica'><br>$campo[id].-$campo[correcta]<br>id</div>";
		}

}

}
 ?>

