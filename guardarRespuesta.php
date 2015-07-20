<?php

include("sources/funciones.php");


$v_fecha=$_POST['fecha'];
$v_asunto=$_POST['asunto'];
$v_redaccion=$_POST['redaccion'];


require("sources/Query.inc");
    $query=new Query();
	
	
	
	if($query->insert("respuesta","fecha, asunto, redaccion, oficio_idOficio",
	                   "'$v_fecha', '$v_asunto', '$v_redaccion', 2"))
					   
					   {
						$respuesta="<h1>Insert Correcto</h1>";
						}
	else{
		$respuesta="<h1>Error</h1>";
	}	

?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registro Respuesta></title>
<meta http-equiv="Refresh" content="3;url=generarRespuesta.php" />
</head>

<body>
	<?php echo $respuesta; ?>
</body>

</html>

