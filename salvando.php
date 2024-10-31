<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salva</title>
	<?php 

	session_start();


	$_SESSION["nome2"] = $_POST["nomee"];
	$_SESSION['idade2'] = $_POST['idadee'];
	$_SESSION['peso2'] = $_POST['pesoo'];
	$_SESSION['altura2'] = $_POST['alturaa'];
 

	 ?>
</head>
<body>
	<h1>Dados pessoa 1</h1>
<b>nome: </b> <?php echo $_SESSION["nome1"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["idade1"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["peso1"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["altura1"]; ?>, logado com sucesso. </br>
	<h1>Dados peesoa 2</h1>
<b>nome: </b> <?php echo $_SESSION["nome2"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["idade2"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["peso2"]; ?>, logado com sucesso. </br>
<b>nome: </b> <?php echo $_SESSION["altura2"]; ?>, logado com sucesso. </br>

	<h1>|Comparando dados|</h1>
	<?php 


	if ($_POST) {
		$_SESSION["altura1"] >= $_SESSION["altura2"];
		echo "a maior pessoa é a Primeira com" . "" . $_SESSION["altura1"];;
	}elseif ($_POST) {
		$_SESSION["altura2"] >= $_SESSION["altura1"];
		echo "a maior pessoa é a Primeira com" . "" . $_SESSION["altura2"];;
	};
	if ($_POST) {
		$_SESSION["idade1"] >= $_SESSION["idade2"];
		echo "a pessoa mais velha é a Primeira com" . "" . $_SESSION["idade1"]; "anos";
	}elseif ($_POST) {
		$_SESSION["idade2"] >= $_SESSION["idade1"];
		echo "a pessoa mais velha é a segunda com" . "" . $_SESSION["idade2"]; "anos";
	};
	if ($_POST) {
		$_SESSION["peso1"] >= $_SESSION["peso2"];
		echo "a maior pessoa é a Primeira com" . "" . $_SESSION["peso1"];;
	}elseif ($_POST) {
		$_SESSION["peso2"] >= $_SESSION["peso1"];
		echo "a maior pessoa é a Primeira com" . "" . $_SESSION["peso2"];;
	};


	 ?>
</body>
</html>