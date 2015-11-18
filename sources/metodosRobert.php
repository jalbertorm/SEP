<?php
session_start();

function comboSaludo() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("propietario, texto", "redaccion", "1");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {
            echo '<option value="' . $regC->texto . '">' . $regC->propietario . '</option>';
        }
    }
}

function getPlantillaRobert() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idPlantilla,logo,encabezadoRn1,encabezadoRn2,encabezadoRn3,encabezadoRn4,encabezadoRn5,encabezadoRn6,oficioNumero,lugar,encabezadoCol1,encabezadoCol2,despedidaRn1,despedidaRn2,att,sloganAtt,firma,encargadoAtt,puestoAtt,ccpRn1col1,ccpRn1col2,ccpRn1col3,ccpRn2col1,ccpRn2col2,ccpRn3col1,ccpRn3col2,rnFolio,ciudadanoCol1,ciudadanoCol2,ccpRn6,piePagRn1,piePagRn2,fechaMod", "plantilla", "1");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {

            return array("logo" => "$regC->logo", "encabezadoRn1" => "$regC->encabezadoRn1", "encabezadoRn2" => "$regC->encabezadoRn2", "encabezadoRn3" => "$regC->encabezadoRn3", "encabezadoRn4" => "$regC->encabezadoRn4", "encabezadoRn5" => "$regC->encabezadoRn5", "encabezadoRn6" => "$regC->encabezadoRn6", "oficioNumero" => "$regC->oficioNumero", "lugar" => "$regC->lugar", "encabezadoCol1" => "$regC->encabezadoCol1", "encabezadoCol2" => "$regC->encabezadoCol2", "despedidaRn1" => "$regC->despedidaRn1", "despedidaRn2" => "$regC->despedidaRn2", "att" => "$regC->att", "sloganAtt" => "$regC->sloganAtt", "firma" => "$regC->firma", "encargadoAtt" => "$regC->encargadoAtt", "puestoAtt" => "$regC->puestoAtt", "ccpRn1col1" => "$regC->ccpRn1col1", "ccpRn1col2" => "$regC->ccpRn1col2", "ccpRn1col3" => "$regC->ccpRn1col3", "ccpRn2col1" => "$regC->ccpRn2col1", "ccpRn2col2" => "$regC->ccpRn2col2", "ccpRn3col1" => "$regC->ccpRn3col1", "ccpRn3col2" => "$regC->ccpRn3col2", "rnFolio" => "$regC->rnFolio", "ciudadanoCol1" => "$regC->ciudadanoCol1", "ciudadanoCol2" => "$regC->ciudadanoCol2", "ccpRn6" => "$regC->ccpRn6", "piePagRn1" => "$regC->piePagRn1", "piePagRn2" => "$regC->piePagRn2", "fechaMod" => "$regC->fechaMod");
        }
    }
}

function getOficio($idOficio) {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idOficio, noOficio, anio, fecha, ciudadano, asunto, referencia, folio, mailCiudadano, telCiudadano", "oficio", "idOficio=$idOficio");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {

            return array("noOficio" => "$regC->noOficio", "anio" => "$regC->anio", "fecha" => "$regC->fecha", "ciudadano" => "$regC->ciudadano", "asunto" => "$regC->asunto", "referencia" => "$regC->referencia", "folio" => "$regC->folio", "mailCiudadano" => "$regC->mailCiudadano", "telCiudadano" => "$regC->telCiudadano");
        }
    }
}

function enviarOficio($noOficio, $mailCiudadano, $asunto) {
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "function redireccionar(){";
    echo "location.href='enviarOficio.php?noOficio=" . $noOficio . "&mailCiudadano=" . $mailCiudadano . "&asunto=" . $asunto . " ';}";
    echo "setTimeout ('redireccionar()', 0)";
    echo "</script>";
}

function pagAux($Aux) {
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "function redireccionar(){";
    echo "location.href='confirmaGuardarOficio.php?msg=" . $Aux . "';}";
    echo "setTimeout ('redireccionar()', 0)";
    echo "</script>";
}

function tablaOficios() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idOficio, noOficio,folio,fecha,mailCiudadano,ciudadano", "oficio", "1");

    if ($regConsulta) {
        $i = 0;

        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>#Oficio</th>";
        echo "<th>Folio</th>";
        echo "<th>Fecha</th>";
        echo "<th>VER</th>";
        echo "<th>ENVIAR-A-REVISION</th>";
        echo "<th>ENVIAR-A-DEPENDENCIA</th>";
        echo "<th>VOLVER-A-REDACTAR</th>";
        echo "<th>NOTIFICAR-AL-CUIDADANO</th>";
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            $fechaFormato = $regC->fecha;
            $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

            echo "<tr>";
            echo "<td>$regC->noOficio</td>";
            echo "<td>$regC->folio</td>";
            echo "<td>" . date('d', strtotime($fechaFormato)) . " de " . $meses[date('n', strtotime($fechaFormato)) - 1] . " de " . date('Y', strtotime($fechaFormato)) . "</td>";
            echo "<td><a class='iframe' href='Oficios/Oficio_$regC->noOficio.pdf' target='_blank'> ver PDF </</a></td>";
            ?><td><a href='enviarRevision.php?idOficio=<?php echo $regC->idOficio; ?>' onClick="return confirm('¿Está seguro de enviar a revision?');"><i class='fa fa-share fa' title='enviar a revision'></i></a></td><?php
            ?><td><a href='enviarDependencia.php?idOficio=<?php echo $regC->idOficio ?>' onClick="return confirm('¿Está seguro de enviar a dependencia?');"><i class='fa fa-share fa' title='enviar a dependencia'></i></a></td><?php
            ?><td><a href='editarOficio.php?idOficio=<?php echo $regC->idOficio; ?>' onClick="return confirm('¿Está seguro de volber a redactar?');"><i class='fa fa-book' title='volver a redactar'></i></a></td><?php
            ?><td><a href='notificarCiudadano.php?idOficio=<?php echo $regC->idOficio; ?> &mailCiudadano=<?php echo $regC->mailCiudadano ?>' onClick="return confirm('¿Está seguro de enviar notificacion al cuidadano?');"><i class='fa fa-share fa' title='notificar al ciudadano'></i></a></td><?php
            echo "</tr>";
            echo "</tr>";
            $i++;
        }
        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>#Oficio</th>";
        echo "<th>Folio</th>";
        echo "<th>Fecha</th>";
        echo "<th>VER</th>";
        echo "<th>ENVIAR-A-REVISION</th>";
        echo "<th>ENVIAR-A-DEPENDENCIA</th>";
        echo "<th>VOLVER-A-REDACTAR</th>";
        echo "<th>NOTIFICAR-AL-CUIDADANO</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function comboDependencia() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idDependencia, correo", "dependencia", "1");
    if ($regConsulta) {
        echo '<select class="form-control" name="destinatario" id="destinatario" required>';
        echo '<option value="">Seleccione Dependencia</option>';
        foreach ($regConsulta as $regC) {
            echo '<option value="' . $regC->idDependencia . '">' . $regC->correo . '</option>';
        }
        echo '</select>';
    }
}

function getDependenciaRobert() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idDependencia, titulo, nombre, puestoRn1, puestoRn2, rnPresente", "dependencia", "1");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {
            echo '<p id="Dep' . $regC->idDependencia . '" style="font-weight: bold;">';
            echo '<br>';
            echo $regC->titulo . '<br>';
            echo $regC->nombre . '<br>';
            echo $regC->puestoRn1 . '<br>';
            echo $regC->puestoRn2 . '<br>';
            echo $regC->rnPresente . '<br>';
            echo '</p>';
        }
    }
}

function getDependenciaRobertScriptHide() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idDependencia", "dependencia", "1");
    if ($regConsulta) {
        foreach ($regConsulta as $regC) {
            echo "$('#Dep" . $regC->idDependencia . "').hide();";
        }
    }
}

function getDependenciaRobertScriptCase() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idDependencia, titulo, nombre, puestoRn1, puestoRn2, rnPresente, correo", "dependencia", "1");
    if ($regConsulta) {
        foreach ($regConsulta as $regC) {
            echo "case '$regC->idDependencia':
                                $('#Dep" . $regC->idDependencia . "').show();"
            . "break;";
        }
    }
}

function comboRedaccion() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRedaccion, propietario", "redaccion", "1");
    if ($regConsulta) {
        echo '<select name="redaccion" class="form-control" id="redaccion"required>';
        echo '<option value="">Seleccione Destinatario</option>';
        foreach ($regConsulta as $regC) {
            echo '<option value="' . $regC->idRedaccion . '">' . $regC->propietario . '</option>';
        }
        echo '</select>';
    }
}

function getRedaccionRobert() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRedaccion, texto", "redaccion", "1");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {
            echo '<p id="Red' . $regC->idRedaccion . '" class="text-justify">';
            echo '<br>';
            echo $regC->texto;
            echo '</p>';
        }
    }
}

function getRedaccionRobertScriptHide() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRedaccion", "redaccion", "1");
    if ($regConsulta) {
        foreach ($regConsulta as $regC) {
            echo "$('#Red" . $regC->idRedaccion . "').hide();";
        }
    }
}

function getRedaccionRobertScriptCase() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRedaccion", "redaccion", "1");
    if ($regConsulta) {
        foreach ($regConsulta as $regC) {
            echo "case '$regC->idRedaccion':
                                $('#Red" . $regC->idRedaccion . "').show();"
            . "break;";
        }
    }
}

function getDatosDestinatario($destinatario) {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("titulo, nombre, puestoRn1, puestoRn2, rnPresente, correo", "dependencia", "idDependencia=$destinatario");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {

            return array("titulo" => "$regC->titulo", "nombre" => "$regC->nombre", "puestoRn1" => "$regC->puestoRn1", "puestoRn2" => "$regC->puestoRn2", "rnPresente" => "$regC->rnPresente", "correo" => "$regC->correo");
        }
    }
}

function getDatosRedaccion($redaccion) {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("propietario, texto", "redaccion", "idRedaccion=$redaccion");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {

            return array("propietario" => "$regC->propietario", "texto" => "$regC->texto");
        }
    }
}

function comboRevisor() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRevisor, nombre, correo", "revisor", "1");
    if ($regConsulta) {
        echo '<select class="form-control" name="destinatario" id="destinatario" required>';
        echo '<option value="">Seleccione Revisor</option>';
        foreach ($regConsulta as $regC) {
            echo '<option value="' . $regC->idRevisor . '">' . $regC->nombre . ' ('.$regC->correo.')</option>';
        }
        echo '</select>';
    }
}

function getRevisorRobert() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRevisor, nombre, correo", "revisor", "1");
    if ($regConsulta) {

        foreach ($regConsulta as $regC) {
            echo '<p id="Rev' . $regC->idRevisor . '" style="font-weight: bold;">';
            echo '<br>';
            echo $regC->nombre . '<br>';
            echo $regC->correo . '<br>';
            echo '</p>';
        }
    }
}

function getRevisorRobertScriptHide() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRevisor", "revisor", "1");
    if ($regConsulta) {
        foreach ($regConsulta as $regC) {
            echo "$('#Rev" . $regC->idRevisor . "').hide();";
        }
    }
}

function getRevisorRobertScriptCase() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRevisor", "revisor", "1");
    if ($regConsulta) {
        foreach ($regConsulta as $regC) {
            echo "case '$regC->idRevisor':
                                $('#Rev" . $regC->idRevisor . "').show();"
            . "break;";
        }
    }
}
?>