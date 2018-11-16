<!DOCTYPE html>
<html>
<head>
	<title>Formulario City</title>
</head>
<body>
	<form method="post" action="city.php">
		<?php
		$server = "localhost";
 		$user = "cristian";
 		$pass = "cristian123";
 		$bbdd = "world";
		$conn = mysqli_connect($server,$user,$pass,$bbdd);
		$consulta = ("SELECT * FROM country;");
		$resultat = mysqli_query($conn, $consulta);
		if (!$resultat) {
 			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
 			$message .= 'Consulta realitzada: ' . $consulta;
 			die($message);
 		}
 		$img = 294;

 		?>
 		<?php
 		echo"<div align='center'>";
 		while( $registre = mysqli_fetch_assoc($resultat) )
 		{
 			$nomImg = $registre["Name"].".png";
 			echo"<input type='radio' value='".$registre["Code"]."'>".$registre["Name"]."  ";echo"<img src='img/$nomImg'/>";
 		}
 		echo"</div>";
		?>
		<?php
			echo"<input type='submit' value='Enviar'/>";
		?>
	</form>

</body>
</html>