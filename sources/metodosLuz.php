<?php
session_start();

function tablaRespuesta() {
    include_once("Query.inc");
    $query = new Query();
    $regCupo = $query->select("r.idRespuesta idR, o.folio folio, r.asunto asunto, r.fecha fecha, r.oficio_idOficio idOf", "oficio o, respuesta r", "o.idOficio=r.oficio_idOficio");
    if ($regCupo) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>No. Oficio</th>";
        echo "<th>Asunto</th>";
        echo "<th>Fecha</th>";
        echo "<th>Ver</th>";
        echo "<th>Re-Enviar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($regCupo as $regC) {
            echo "<tr>";
            echo "<td>$regC->folio</td>";
            echo "<td>$regC->asunto</td>";
            echo "<td>$regC->fecha</td>";
            echo "<td><a href='redaccionRespuesta.php?id=$regC->idR'><i class='fa fa-clipboard' title='Ver Respuesta'></i></a></td>";
            ?><td><a href='reenviarRespuesta.php?idRespuesta=<?php echo $regC->idR; ?>&idOficio=<?php echo $regC->idOf; ?>' onClick="return confirm('¿Está seguro de reenviar la respuesta?');"><i class='fa fa-share fa' title='Re-enviar'></i></a></td><?php
            
            echo "</tr>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>No. Oficio</th>";
        echo "<th>Asunto</th>";
        echo "<th>Fecha</th>";
        echo "<th>Ver</th>";
        echo "<th>Re-Enviar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function redaccionRespuesta($id) {
    include_once("sources/Query.inc");
    $query = new Query();
    
    $consulta = $query->select("n.redaccionRespuestas notificacion, r.redaccion redaccion, r.archivoAdjunto adjunto", "respuesta r, rednotificacion n", "idRespuesta=$id");
    if ($consulta) {
        foreach ($consulta as $c) {
            echo $c->notificacion;
            echo "<br>";
            echo "<br>";
            echo $c->redaccion;
            echo"<br>";
            echo "<td><a class='iframe' href='$c->adjunto' target='_blank'> Ver Respuesta Adjunta </</a></td>";
        }
    }
}

function getRedNotificacionRespuestas() {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("redaccionRespuestas", "redNotificacion", "1");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("redaccionRespuestas" => "$reg->redaccionRespuestas");
        }
    }
}

function getMailCiudadanoRespuestas($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("mailCiudadano", "oficio", "idOficio=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("mailCiudadano" => "$reg->mailCiudadano");
        }
    }
}
?>