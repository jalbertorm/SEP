<?php
include("sources/funciones.php");
if($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "normal" and $_REQUEST) {
    $noOficio = strtolower($_REQUEST['noOficio']);
	
	require("sources/Query.inc");
    $query=new Query();
	
	if($query->select("noOficio","oficio","noOficio='$noOficio'")){
		echo "<font style=' color: #CC0000'>El numero de oficio ya existe, intenta nuevamente</font>";
	}
	else{
		echo '<font style=" color: #00CC00"> </font>';
	}      
} else {
    redireccionar();
}
?>