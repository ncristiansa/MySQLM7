<html>
 <head>
 	<title>Exemple de lectura de dades a MySQL</title>
 	<style>
 		body{
 		}
 		table,td {
 			border: 1px solid black;
 			border-spacing: 0px;
 		}
 	</style>
 </head>
 <meta charset="utf-8">
 <body>
 	<h1>Ejercicio</h1>
 
 	<?php
 		$server = "localhost";
 		$user = "cristian";
 		$pass = "cristian123";
 		$bbdd = "world";
 		$conn = mysqli_connect($server,$user,$pass,$bbdd);
 		
 		$valSelect = $_POST["paises"];
 		//Añado en la consulta "SELECT ci.Name cit" cit= Le estoy diciendo que será un alias
 		// para poder diferenciarlo en la tabla
 		$consulta = ("SELECT ci.Name city, co.Name country FROM city ci, country co WHERE ci.CountryCode=co.Code AND ci.CountryCode='$valSelect';");
 		$resultado = mysqli_query($conn, $consulta);
 		//$newValue = substr($valSelect, 0,-1);
 		echo"$valSelect"; echo"<br>";
 		echo"$newValue";
 		
 	?>	
 	<table border="1">
 		<td bgcolor="Aquamarine">Cities</td>
 		<td bgcolor="Aquamarine">Country</td>
 		<td bgcolor="Aquamarine">Flag</td>

 		<?php
 			while ($registro=mysqli_fetch_assoc($resultado)) {
 				echo"\t<tr>\n";
 					echo"\t\t<td>".$registro["city"]."</td>\n";
 					echo"\t\t<td>".$registro["country"]."</td>\n";

 				echo"\t</tr>\n";
 			}

 		?>

 	</table>
 </body>
</html>