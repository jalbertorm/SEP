<?php
session_start();

function enviarOficio($noOficio, $mailCiudadano, $mail1, $mail2, $mail3, $mail4, $asunto) {
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "function redireccionar(){";
    echo "location.href='enviarOficio.php?noOficio=" . $noOficio . "&mailCiudadano=" . $mailCiudadano . " &mail1=" . $mail1 . "&mail2=" . $mail2 . "&mail3=" . $mail3 . "&mail4=" . $mail4 . "&asunto=" . $asunto . " ';}";
    echo "setTimeout ('redireccionar()', 0)";
    echo "</script>";
}

function tablaOficios() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("noOficio,folio,fecha,mailCiudadano,ciudadano", "oficio", "1");

    if ($regConsulta) {
        $i = 0;

        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>#Oficio</th>";
        echo "<th>Folio</th>";
        echo "<th>Fecha</th>";
        echo "<th>Destinatario</th>";

        echo "<th>VER</th>";
        echo "<th>RE-ENVIAR</th>";
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>$regC->noOficio</td>";
            echo "<td>$regC->folio</td>";
            echo "<td>$regC->fecha</td>";
            echo "<td>$regC->ciudadano:  $regC->mailCiudadano</td>";
            echo "<td><a class='iframe' href='Oficios/OficioNo$regC->noOficio.pdf' target='_blank'> ver PDF </</a></td>";
            ?><td><a href='eliminarEmpleado.php?idEmpleado1=<?php echo $regC->idEmpleado1; ?>' onClick="return confirm('¿Está seguro?');"><i class='fa fa-share fa' title='Re-enviar'></i></a></td><?php
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
        echo "<th>RE-ENVIAR</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}
?>