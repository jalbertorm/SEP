<?php
session_start();

function tablaRespuesta() {
    include_once("Query.inc");
    $query = new Query();
    $regCupo = $query->select("r.idRespuesta idR, o.folio folio, r.asunto asunto, r.fecha fecha", "oficio o, respuesta r", "o.idOficio=r.oficio_idOficio");
    if ($regCupo) {
        $i = 0;

        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>N° DE OFICIO</th>";
        echo "<th>ASUNTO</th>";
        echo "<th>FECHA</th>";
        echo "<th>VER</th>";
        echo "<th>RE-ENVIAR</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($regCupo as $regC) {
            echo "<tr>";
            echo "<td>$regC->folio</td>";
            echo "<td>$regC->asunto</td>";
            echo "<td>$regC->fecha</td>";
            echo "<td><a href='redaccionRespuesta.php?id=$regC->idR'><i class='fa fa-clipboard' title='Ver Respuesta'></i></a></td>";
            ?><td><a href='reenviarRespuesta.php?idRespuesta=<?php echo $regC->idRespuesta; ?>' onClick="return confirm('¿Está seguro de reenviar la respuesta?');"><i class='fa fa-share fa' title='Re-enviar'></i></a></td><?php
            
            echo "</tr>";
            echo "</tr>";
            $i++;
        }

        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>N° DE OFICIO</th>";
        echo "<th>ASUNTO</th>";
        echo "<th>FECHA</th>";
        echo "<th>VER</th>";
        echo "<th>RE-ENVIAR</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function redaccionRespuesta($id) {
    include_once("sources/Query.inc");
    $query = new Query();
    $consulta = $query->select("redaccion, archivoAdjunto", "respuesta", "idRespuesta=$id");
    if ($consulta) {
        foreach ($consulta as $c) {
            echo $c->redaccion;
            echo"<br>";
            echo "<td><a class='iframe' href='$c->archivoAdjunto' target='_blank'> ver PDF </</a></td>";
        }
    }
}
?>