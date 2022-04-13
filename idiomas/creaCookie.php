<?php
$idiomaNavegador=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$idiomasPermitidos=array("ca","es");
if (isset($_GET['idioma']) && in_array($_GET['idioma'], $idiomasPermitidos) )
    setcookie("idioma",$_GET["idioma"],time()+60*60*24*30,"/");
else
setcookie("idioma","es",time()+60*60*24*30,"/");
    
header('Location: '.$_SERVER["HTTP_REFERER"]);
?>