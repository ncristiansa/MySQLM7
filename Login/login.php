<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<meta charset="utf-8">
<body>
	<?php
	$server = "localhost";
	$user = "cristian";
	$pass = "cristian123";
	$bbdd = "datos";
	$conn = mysqli_connect($server, $user, $pass, $bbdd);
	
		echo"<h3>Login</h3>";
		echo"<form method='post' >";
			echo"<label>Usuario:</label><br>";
			echo"<input type='text' name='usuario'> <br>";
			echo"<label>Contraseña:</label><br>";
			echo"<input type='password' name='pass'><br>";
			echo"<input type='submit' value='Enviar' name='btn'>";
		echo"</form>";
	?>
	<!-- Obtengo los datos del formulario login. -->
	<?php
		$usr = $_POST["usuario"];
		$pw = $_POST["pass"];
		$consulta = mysql_query("SELECT Usuario, Passwd FROM Login WHERE Usuario = '$usr' AND Passwd='$pw';");
		print_r($consulta);
		
		if(empty($usr) && empty($pw)){
			echo"No has introducido nada";
		}else{
			if(mysql_num_rows($consulta)==0){
				echo"Hola";
			}else{
				echo"Adios";
			}
			
		}
	?>
</body>
</html>