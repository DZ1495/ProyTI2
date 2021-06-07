<?php
//validamos datos del servidor
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$servidor="localhost";
		$usuario="root";
		$password="";
		$baseDeDatos="prueba";

		$conexion = mysqli_connect($servidor, $usuario, "") or die ("Error con el servidor de la base de datos");

		$bd = mysql_select_db($conexion, $baseDeDatos) or die ("Error conexion al conectarse a la base de datos")


			$NomYApe=$_POST['name'];
			$email=$_POST['email'];
			$Asunto=$_POST['subject'];
			$Comentario=$_POST['message'];

			$sql="INSERT INTO datos VALUES('$NomYAPe',
											'$email',
											'$Asunto',
											'$Comentario')";

			$ejecutar= mysqli_query($conexion, $sql);

			if(!$ejecutar){
		  		echo"Error en la línea de sql";
		 	}else{
		 		echo"Datos Guardados Correctamente <br> <a href='Index.html'>volver</a>";
		 	}
		}
	}
	
?>