<?php
    $id=$_GET["id"];
    include_once("sources/Query.inc");
    $query=new Query();
    
    $consulta=$query->select("redaccion", "respuesta", "idRespuesta=$id");
    
    if($consulta){
        foreach($consulta as $c){
            echo $c->redaccion;
        }
    }
?>