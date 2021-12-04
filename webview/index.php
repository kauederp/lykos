<?php
	session_start(); // sessoes iniciam aqui
//include "config.php";

// função de carregamento automático
	spl_autoload_register(function ($class_name){
    	include "./classes/".$class_name.'.php';
	});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lykos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="container-fluid">
<?php
	$host = "10.0.0.107";
	$url="http://".$host.$_SERVER['PHP_SELF'];
	if(isset($_GET['p']))
	{
	    if($_GET['p']=="inicio")
			include("inicio.php");
	    else if($_GET['p']=="home")
			echo "";
	    else if($_GET['p']=="registro")
			include("registro.php");
		else if($_GET['p']=="editar")
			include("editar.php");
	    else if($_GET['p']=="entrar")
			include("entrar.php");
		else if($_GET['p']=="registerEO")
			include("registerEO.php");
	    else
			include("inicio.php");
	}else
	{
		include("inicio.php");
	}





?>
<script src="./script.js"></script>
</body>
</html>
