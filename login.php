<!-- //lo que va a recibir las variables que nos manda el usuario -->

<?php
session_start();

include 'conecta.php';
// forma de recibir las variables, 'usuario' es la variable en donde se quedo guardada la contraseña del input password

$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$query="select tipo from usuarios where nombre='$usuario' and password='$contra'";

// ejecuntando el query
$resultado=mysql_query($query);


if($campo=mysql_fetch_array($resultado))
{
	
	if($campo['tipo']==0)
	{
		$_SESSION['admin']=0;
		header('location:admin.php');

		//de aqui que me mande a archivo que creare para que me de el id_alumno y los demas datos
	}elseif ($campo['tipo']==1)
	{
		$_SESSION['estudiante']=1;
		header('location:estudiante.php');
	}

}
else
{
	// cuando se logee mal o algo, vamos a redireccionar
	header('location:index.html');

}


?>