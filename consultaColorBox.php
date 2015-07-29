<?php


/*
    $id=$_GET["id"];
    include_once("sources/funciones.php");
	include_once("sources/Query.inc");
	
    $query=new Query();
    
    $consulta=$query->select("redaccion", "respuesta", "idRespuesta=$id");
    
    if($consulta){
        foreach($consulta as $c){
            echo $c->redaccion;
        }
    }
	
	*/
	
	
				 
	   
	
	$id=$_GET["id"];
//$id=1;
    include_once("sources/funciones.php");
	include_once("sources/Query.inc");
	
    $query=new Query();
    
	
	
	
	 
	
	
    $consulta=$query->select("redaccion", "respuesta", "idRespuesta=$id");
    
    if($consulta){
        foreach($consulta as $c){
            echo $c->redaccion;
        }
    }
	
	
	
	
?>


