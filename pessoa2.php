<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bloqueando páginas por sessões</title>
		<?php 
		session_start();

		$_SESSION["nome1"] = $_POST["nome"];
		$_SESSION["idade1"] = $_POST["idade"];
		$_SESSION["peso1"] = $_POST["peso"];
		$_SESSION["altura1"] = $_POST["altura"]

		 ?>
	</head>
	<body>
		<form name="logar" method="post" action="salvando.php">
			Nome: 
			<input type="text" name="nomee"> <br>
			Idade 
			<input type="number" name="idadee"> <br>
			peso:
			<input type="float" name="pesoo"> <br>
			altura:
			<input type="float" name="alturaa"> <br>

			<input type="submit" name="enviarr" value="Enviar">
		</form>
	
	</body>
	</html>	