<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando páginas por sessão</title>

	<?php 
       date_default_timezone_set("America/Sao_Paulo");

	session_start();	

	$_SESSION["nome1"] = $_POST["nome"];
	$_SESSION["idade1"] = $_POST["idade"];
	$_SESSION["peso1"] = $_POST["peso"];
	$_SESSION["altura1"] = $_POST["altura"]

	 ?>
</head>
<body>
<b>nome: </b> <?php echo $_SESSION["nome1"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["idade1"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["peso1"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["alturaa"]; ?>, logado com sucesso. </br>


</body>
</html>