<?php

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
        Oficio número SEP/DFSEPMEX/0816/2015
    </p>
    <br>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; float: right; width: 37%;">
        Toluca, México., 21 de Mayo de 2015.
    </p>
    <br>
    <br>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; float: left;">
        INGENIERO<br>
        SIMÓN IVÁN VILLAR MARTÍNEZ<br>
        SECRETARIO DE EDUCACIÓN DEL<br>
        GOBIERNO DEL ESTADO DE MÉXICO<br>
        PRESENTE
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; text-align: justify;">
        Anteponiendo un cordial saludo, me permito remitir a Usted, petición formulada al Lic. 
        Enrique Peña Nieto, Presidente Constitucional de los Estados Unidos Mexicanos, 
        enviada a esta Delegación por la Coordinación de Atención Ciudadana de la Secretaría de Educación Pública, 
        la cual se detalla a continuación:
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
                <td>LORENA RINCÓN</td>
                <td>
                    Pide apoyo para obtener una copia de boleta de 1° grado de 
                    educación primaria de la Escuela Privada “Promoción Escolar, S.C.”, 
                    del municipio de Tlalnepantla, Estado de México.
                    Pide apoyo para obtener una copia de boleta de 1° grado de 
                    educación primaria de la Escuela Privada “Promoción Escolar
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
        <br><br>
        ATENTAMENTE
        <br>
        SUFRAGIO EFECTIVO, NO REELECCIÓN
        <br><br><br><br>
        MTRO. GUILLERMO LEGORRETA MARTÍNEZ
        <br>
        DELEGADO
    </p>
    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 8px; text-align: justify;">
        c.c.p. <b>Lic. Rubén Jésus Lara León</b>.- Coordinador General de Delegaciones Federales de la Secretaría de Educación Pública.- Presente.
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Lic. Miguel Salcedo Hernández</b>.- Coordinador General de Atención Ciudadana.- SEP, Ref. 1506058
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Lic. Edgar Israel Gutiérrez Paredes</b>.- Jefe del Departamento de Vinculación y Apoyo Institucional de la Coordinación General de Delegaciones Federales.- SEP
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Folio</b>: EDUCA-0000109790
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>C</b>. Lorena Rincón.- Interesada
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
        &nbsp;&nbsp;elegación Federal de la Secretaría de Educación<br>
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


//$mpdf->Output('Oficios/OficioNoPruebaBB2.pdf',F);
$mpdf->Output();


exit;

//==============================================================
//==============================================================
//==============================================================
?>