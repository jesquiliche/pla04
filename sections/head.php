<?php

$idioma = "es";
$idiomaNavegador = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$idiomasPermitidos = array("ca", "es");

if (isset($_COOKIE["idioma"])) {
    global $idioma;
    $idioma = $_COOKIE['idioma'];
    if (in_array($idioma, $idiomasPermitidos)) {
        $idioma = $_COOKIE["idioma"];
    } else {
        $idioma = "es";
    }

} else {
    if (in_array($idiomaNavegador, $idiomasPermitidos)) {
        setcookie("idioma", $idiomaNavegador, time() + 60 * 60 * 24 * 30, "/");
    } else {
        setcookie("idioma", "es", time() + 60 * 60 * 24 * 30, "/");
        $idioma = "es";
    }
}

include "./idiomas/content_$idioma.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>IEM</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/page.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/page.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/page.css" type="text/css" />
	<link rel="stylesheet" href="css/App.css" type="text/css" />
	<script type="text/javascript" src='js/variables_<?=$idioma?>.js'></script>
	<script type="text/javascript" src='js/form.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" />
</head>
<body>
	<div class="container-fluid bg-dark py-1">
		<div class="row">
			<div class="col-lg-1">
			<img src="./img/IEM_logo.png" width="50" height="50" >
			</div>
		<div class="col-lg-11 mt-1"><h2><?=$titulo?></h2></div>
		</div>

	</div>
</body>