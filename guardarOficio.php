<?php
ob_start();
include("sources/funciones.php");
if ($_SESSION["Activa"] && $_POST and $_SESSION["Tipo_usuario"] = "normal") {
    $plantilla = getPlantillaRobert();

    $noOficio = __($_POST["noOficio"]);
    $anio = __($_POST["anio"]);
    $fecha = __($_POST["fecha"]);
    $ciudadano = __($_POST["ciudadano"]);
    $asunto = __($_POST["asunto"]);
    $referencia = __($_POST["referencia"]);
    $folio = __($_POST["folio"]);
    $mailCiudadano = strtolower(__($_POST["mailCiudadano"]));
    $telCiudadano = __($_POST["telCiudadano"]);
    $conFirma = __($_POST["conFirma"]);
    $destinatario = __($_POST["destinatario"]);
    $redaccion = __($_POST["redaccion"]);
    
    $datosDestinatario = getDatosDestinatario($destinatario);
    $datosRedaccion = getDatosRedaccion($redaccion);

    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    require_once ("sources/Query.inc");
    $query = new Query();

    if ($query->insert("oficio", "noOficio, anio, fecha, ciudadano, asunto, referencia, folio, mailCiudadano, telCiudadano, status", "'$noOficio', '$anio', '$fecha','$ciudadano', '$asunto','$referencia', '$folio','$mailCiudadano', '$telCiudadano', 2")) {
        $respuesta = "<center><h1><span>Agregado correctamente</span></h1></center>";

        $html = '
<style>
    td { 
        vertical-align: top; 
    }
    .tabla {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        text-align: justify;
    }
    .tabla td {
        border-left: 0.1mm solid #000000;
        border-right: 0.1mm solid #000000;
        margin: 5px;
        padding: 5px;
    }
    table thead td { 
        background-color: #EEEEEE;
        text-align: center;
        border: 0.1mm solid #000000;
        margin: 1px;
        padding: 1px;
    }
</style>
<div>
    <br>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; float: left; width: 50%;">
        Oficio número SEP/DFSEPMEX/' . $noOficio . '/' . $anio . '
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; float: right; width: 45%; text-align: right;">
        Toluca, México., ' . date('d', strtotime($fecha)) . ' de ' . $meses[date('n', strtotime($fecha)) - 1] . ' de ' . date('Y', strtotime($fecha)) . '.
    </p>
    <br>
    <br>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; float: left; font-weight: bold;">
        
        ' . $datosDestinatario['titulo'] . '<br>
        ' . $datosDestinatario['nombre'] . '<br>
        ' . $datosDestinatario['puestoRn1'] . '<br>
        ' . $datosDestinatario['puestoRn2'] . '<br>
        ' . $datosDestinatario['rnPresente'] . '<br>
            
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;">
        ' . $datosRedaccion['texto'] . '
    </p>
    <table class="tabla" width="100%" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <td style="width: 32%"><b>' . $plantilla['encabezadoCol1'] . '</b></td>
                <td style="width: 68%"><b>' . $plantilla['encabezadoCol2'] . '</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>' . $ciudadano . '</td>
                <td>
                    ' . $asunto . '
                </td>
            </tr>
        </tbody>
    </table>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;">
        ' . $plantilla['despedidaRn1'] . '
        <br><br>
        ' . $plantilla['despedidaRn2'] . '
        <div style="background-image: url(' . $plantilla['firma'] . ');
                background-size: 40%;
                background-repeat: no-repeat;">
        ' . $plantilla['att'] . '
        <br>
        ' . $plantilla['sloganAtt'] . '
        <br><br><br><br>
        ' . $plantilla['encargadoAtt'] . '
        <br>
        ' . $plantilla['puestoAtt'] . '
        </div>
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 8px; text-align: justify;">
        ' . $plantilla['ccpRn1col1'] . ' <b>' . $plantilla['ccpRn1col2'] . '</b>' . $plantilla['ccpRn1col3'] . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['ccpRn2col1'] . '</b>' . $plantilla['ccpRn2col2'] . ' ' . $referencia . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['ccpRn3col1'] . '</b>' . $plantilla['ccpRn3col2'] . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['rnFolio'] . '</b> ' . $folio . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['ciudadanoCol1'] . '</b>. ' . $ciudadano . ' ' . $plantilla['ciudadanoCol2'] . '
        <br>
        ' . $plantilla['ccpRn6'] . '
    </p>
</div>
';
        
        $htmlSinFirma = '
<style>
    td { 
        vertical-align: top; 
    }
    .tabla {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        text-align: justify;
    }
    .tabla td {
        border-left: 0.1mm solid #000000;
        border-right: 0.1mm solid #000000;
        margin: 5px;
        padding: 5px;
    }
    table thead td { 
        background-color: #EEEEEE;
        text-align: center;
        border: 0.1mm solid #000000;
        margin: 1px;
        padding: 1px;
    }
</style>
<div>
    <br>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; float: left; width: 50%;">
        Oficio número SEP/DFSEPMEX/' . $noOficio . '/' . $anio . '
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; float: right; width: 45%; text-align: right;">
        Toluca, México., ' . date('d', strtotime($fecha)) . ' de ' . $meses[date('n', strtotime($fecha)) - 1] . ' de ' . date('Y', strtotime($fecha)) . '.
    </p>
    <br>
    <br>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; float: left; font-weight: bold;">
        
        ' . $datosDestinatario['titulo'] . '<br>
        ' . $datosDestinatario['nombre'] . '<br>
        ' . $datosDestinatario['puestoRn1'] . '<br>
        ' . $datosDestinatario['puestoRn2'] . '<br>
        ' . $datosDestinatario['rnPresente'] . '<br>
            
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;">
        ' . $datosRedaccion['texto'] . '
    </p>
    <table class="tabla" width="100%" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <td style="width: 32%"><b>' . $plantilla['encabezadoCol1'] . '</b></td>
                <td style="width: 68%"><b>' . $plantilla['encabezadoCol2'] . '</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>' . $ciudadano . '</td>
                <td>
                    ' . $asunto . '
                </td>
            </tr>
        </tbody>
    </table>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;">
        ' . $plantilla['despedidaRn1'] . '
        <br><br>
        ' . $plantilla['despedidaRn2'] . '
        <div>
        ' . $plantilla['att'] . '
        <br>
        ' . $plantilla['sloganAtt'] . '
        <br><br><br><br>
        ' . $plantilla['encargadoAtt'] . '
        <br>
        ' . $plantilla['puestoAtt'] . '
        </div>
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 8px; text-align: justify;">
        ' . $plantilla['ccpRn1col1'] . ' <b>' . $plantilla['ccpRn1col2'] . '</b>' . $plantilla['ccpRn1col3'] . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['ccpRn2col1'] . '</b>' . $plantilla['ccpRn2col2'] . ' ' . $referencia . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['ccpRn3col1'] . '</b>' . $plantilla['ccpRn3col2'] . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['rnFolio'] . '</b> ' . $folio . '
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $plantilla['ciudadanoCol1'] . '</b>. ' . $ciudadano . ' ' . $plantilla['ciudadanoCol2'] . '
        <br>
        ' . $plantilla['ccpRn6'] . '
    </p>
</div>
';


//==============================================================
//==============================================================
//==============================================================
//include_once("sources/mpdf60/mpdf.php");

        include 'sources/mpdf60/mpdf.php';
//------------------------------mLeft,mRight,mTop,mBottom,mHeader,mFooter
        $mpdf = new mPDF('c', 'Letter', '', '', 21, 21, 40, 22, 15, 11);

        $mpdf->SetDisplayMode('fullpage');

        $header = '

<div style="float: left; width: 50%;">
    <img src="' . $plantilla['logo'] . '" width="220">
</div>
<div style="float: right; width: 42%;">
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-style: italic; letter-spacing: 0.2px;">
        ' . $plantilla['encabezadoRn1'] . '
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">
        &nbsp;&nbsp;' . $plantilla['encabezadoRn2'] . '<br>
        &nbsp;&nbsp;' . $plantilla['encabezadoRn3'] . '<br>
        &nbsp;&nbsp;' . $plantilla['encabezadoRn4'] . '<br>
        &nbsp;&nbsp;' . $plantilla['encabezadoRn5'] . '<br>
        &nbsp;&nbsp;' . $plantilla['encabezadoRn6'] . '
    </p>
</div>
';

        $footer = '
<div align="center">
    <p style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 10px;">
        ' . $plantilla['piePagRn1'] . '
        <br>
        ' . $plantilla['piePagRn2'] . '
    </p>
</div>
';
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter($footer);

        $mpdf->SetWatermarkImage('images/escudo.jpg', 0.15, 'P', 'F');
        $mpdf->showWatermarkImage = true;
        if($conFirma=='si'){
            $mpdf->WriteHTML($html);
        }
        elseif($conFirma=='no'){
            $mpdf->WriteHTML($htmlSinFirma);
        }

        $mpdf->Output('Oficios/Oficio_' . $noOficio . '.pdf', F);
        

        $Aux = "correcto";
        pagAux($Aux);

        exit;
        
    } else {
        $Aux = "error";
        pagAux($Aux);
    }
} else {
    redireccionar();
}
?>