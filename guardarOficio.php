<?php
ob_start();
session_start();
//<!--ESTE ARCHIVO GUARDA EL REGISTRO Y CREA EL PDF-->
include("sources/funciones.php");
if($_SESSION["Activa"] && $_POST){

$noOficio = __($_POST["noOficio"]);
$ano = __($_POST["ano"]);
$fecha = __($_POST["fecha"]);
$titulo = __($_POST["titulo"]);
$nombre = __($_POST["nombre"]);
$puesto = __($_POST["puesto"]);
$redaccion = __($_POST["redaccion"]);
$ciudadano = __($_POST["ciudadano"]);
$asunto = __($_POST["asunto"]);
$referencia = __($_POST["referencia"]);
$folio = __($_POST["folio"]);
$telCiudadano = __($_POST["telCiudadano"]);
$mailCiudadano = strtolower(__($_POST["mailCiudadano"]));
$mail1 = strtolower(__($_POST["mail1"]));
$mail2 = strtolower(__($_POST["mail2"]));
$mail3 = strtolower(__($_POST["mail3"]));
$mail4 = strtolower(__($_POST["mail4"]));
$gracias = "Por lo anterior, solicito de no existir inconveniente, gire sus amables instrucciones al área 
          Correspondiente a fin de brindar la atención que proceda a dicho requerimiento, rogando 
          Respetuosamente sea tan gentil de enviar a esta Delegación el seguimiento del presente asunto.";

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

require("sources/Query.inc");
$query = new Query();

if ($query->insert("oficio", "noOficio, ano, fecha, titulo, nombre, puesto, ciudadano, asunto, referencia, folio, mailCiudadano, telCiudadano, mail1, mail2, mail3, mail4, mail5, status", "'$noOficio', '$ano', '$fecha','$titulo', '$nombre', '$puesto', '$ciudadano', '$asunto','$referencia', '$folio','$mailCiudadano', '$telCiudadano', '$mail1', '$mail2', '$mail3', '$mail4', '$mail5', 2")) {
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
        Oficio número SEP/DFSEPMEX/'.$noOficio.'/'.$ano.'
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; float: right; width: 45%; text-align: right;">
        Toluca, México., '.date('d',strtotime($fecha)).' de '.$meses[date('n' ,strtotime($fecha))-1].' de '.date('Y',strtotime($fecha)).'.
    </p>
    <br>
    <br>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; float: left;">
        '.$titulo.'<br>
        '.$nombre.'<br>
        '.$puesto.'<br>
        PRESENTE
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;">
        '.$redaccion.'
    </p>
    <table class="tabla" width="100%" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <td style="width: 32%"><b>CIUDADANO</b></td>
                <td style="width: 68%"><b>ASUNTO</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$ciudadano.'</td>
                <td>
                    '.$asunto.'
                </td>
            </tr>
        </tbody>
    </table>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;">
        Por lo anterior, solicito de no existir inconveniente, gire sus amables 
        instrucciones al área correspondiente a fin de brindar la atención que proceda 
        a dicho requerimiento, rogando respetuosamente sea tan gentil de enviar a esta 
        Delegación el Seguimiento del presente asunto.
        <br><br>
        Sin otro particular, me reitero a sus órdenes.
        <div style="background-image: url(images/firmaPrueba.png);
                background-size: 20%;
                background-repeat: no-repeat;">
        ATENTAMENTE
        <br>
        SUFRAGIO EFECTIVO, NO REELECCIÓN
        <br><br><br><br>
        MTRO. GUILLERMO LEGORRETA MARTÍNEZ
        <br>
        DELEGADO
        </div>
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 8px; text-align: justify;">
        c.c.p. <b>Lic. Rubén Jésus Lara León</b>.- Coordinador General de Delegaciones Federales de la Secretaría de Educación Pública.- Presente.
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Lic. Miguel Salcedo Hernández</b>.- Coordinador General de Atención Ciudadana.- '.$referencia.'
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Lic. Edgar Israel Gutiérrez Paredes</b>.- Jefe del Departamento de Vinculación y Apoyo Institucional de la Coordinación General de Delegaciones Federales.- SEP
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Folio</b>: '.$folio.'
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>C</b>. '.$ciudadano.'.- Interesada
        <br>
        GML/arll*
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
    <img src="images/logo.png" width="220">
</div>
<div style="float: right; width: 42%;">
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-style: italic; letter-spacing: 0.2px;">
        “2015. Año del Generalísimo José María Morelos y Pavón”.
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">
        &nbsp;&nbsp;SECRETARÍA DE EDUCACIÓN PÚBLICA<br>
        &nbsp;&nbsp;Coordinación General de Delegaciones Federales<br>
        &nbsp;&nbsp;de la Secretaría de Educación Pública<br>
        &nbsp;&nbsp;Delegación Federal de la Secretaría de Educación<br>
        &nbsp;&nbsp;Pública en el Estado de México
    </p>
</div>
';

$footer = '
<div align="center">
    <p style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 10px;">
        Av. Dr. Nicolás San Juan S/N, Parque Administrativo Cuauhtémoc, Col. Ex Hacienda La Magdalena, Toluca, Estado de México, C. P. 50010.
        <br>
        Teléfono: 01 (722) 272-94-69, Fax: 01 (722) 272-94-70, delegación.mex@nube.sep.gob.mx   www.sep.gob.mx
    </p>
</div>
';

$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);

$mpdf->SetWatermarkImage('images/escudo.jpg', 0.15, 'P', 'F'); //ESTE ES EL CGIDOOOOOOOOOO
$mpdf->showWatermarkImage = true;
$mpdf->WriteHTML($html);


$mpdf->Output('Oficios/Oficio_'.$noOficio.'.pdf',F);
//$mpdf->Output();
enviarOficio($noOficio, $mailCiudadano, $mail1, $mail2, $mail3, $mail4, $asunto);

exit;

//    require_once("sources/dompdf/dompdf_config.inc.php");
//    $dompdf = new DOMPDF();
//    $dompdf->load_html(ob_get_clean());
//    $dompdf->render();
//    $pdf = $dompdf->output();
//    $filename = 'Oficios/OficioNo' . $noOficio . '.pdf';
//    file_put_contents($filename, $pdf);
//    enviarOficio($noOficio, $mailCiudadano, $mail1, $mail2, $mail3, $mail4, $asunto);
} else {
    $respuesta = "<center><h1><p>Error Al Insertar</p></h1>></center>";
}

}else{
    	redireccionar();
	}
?>