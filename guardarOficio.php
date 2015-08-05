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

require("sources/Query.inc");
$query = new Query();

if ($query->insert("oficio", "noOficio, ano, fecha, titulo, nombre, puesto, ciudadano, asunto, referencia, folio, mailCiudadano, telCiudadano, mail1, mail2, mail3, mail4, mail5", "'$noOficio', '$ano', '$fecha','$titulo', '$nombre', '$puesto', '$ciudadano', '$asunto','$referencia', '$folio','$mailCiudadano', '$telCiudadano', '$mail1', '$mail2', '$mail3', '$mail4', '$mail5'")) {
    $respuesta = "<center><h1><span>Agregado correctamente</span></h1></center>";
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>
        <!--<body style="margin-top: 10px; margin-right: 0px; margin-left: 50px;">-->
        <body>  <!--BACKGROUND="images/foto.png"--> 
        <center>
            <br>
            <table border="1" style="width: 90%" >
                <tr>
                    <td>
                        Aqui va la imagen
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="width: 60%; text-align: left; font-family:Arial, Helvetica, sans-serif">
                        <p style=" font-size: 8px">
                            <font style="font-style: italic; font-size: 9px; font-family:Arial, Helvetica, sans-serif">"2015 Año del Generalísimo Jose María Morelos y Pavón."</font>
                            <br>
                            <br>
                            <b style="font-size: 8px; font-family:Arial, Helvetica, sans-serif">SECRETARÍA DE EDUCACIÓN PÚBLICA</b><br>
                            Coordinación General Delegaciones Federales<br>
                            de la Secreataría de Educacion Pública<br>
                            Delegación Federal de la Secretaría de Educación<br>
                            Pública en el Estado de México<br>
                        </p>
                    </td>
                </tr>

            </table>

            <table style="width: 50%" border="1">
                <tr>
                    <td>
                        <p style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; text-align: left" >Oficio número SEP/DFSEPMEX /<?php echo $noOficio; ?>/<?php echo $ano; ?> </p>
                    </td>
                </tr>
            </table>


            <table border="1" style="width: 90%">    
                <tr>
                    <td align="right">
                        <p style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; text-align: right">Toluca, México.,<?php echo $fecha; ?></p><br>
                    </td>
                </tr>
            </table>

            <table border="1" style="width: 90%">
                <tr>
                    <td>
                        <p style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; text-align: left"><?php echo $titulo; ?><br>
                            <?php echo $nombre; ?><br>
                            <?php echo $puesto; ?><br> 
                            PRESENTE
                        </p>   
                    </td>
                </tr>
            </table>
            <br>

            <table border="1" style="width: 90%">
                <tr>
                    <td>
                        <p style="font-size: 10px; font-family:Arial, Helvetica, sans-serif;text-align: justify "><?php echo $redaccion ?></p>
                    </td>
                </tr>
            </table>

            <table border="1" style="width: 90%">
                <tr>
                    <td align="right" style="width: 30%"><center><b style="font-size: 9px; font-family:Arial, Helvetica, sans-serif">CIUDADANO</b></center></td>
                <td align="right"><center><b style="font-size: 9px; font-family:Arial, Helvetica, sans-serif">ASUNTO</b></center></td>
                </tr>
                <tr>
                    <td><p><?php echo $ciudadano; ?></p></td>
                    <td><p><?php echo $asunto; ?></p></td>
                </tr>
            </table>

            <br>

            <table border="1" style="width: 90%">
                <tr>
                    <td><p class="text-justify" style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; text-align: justify "><?php echo $gracias; ?></p></td>
                </tr>

                <tr>
                    <td><p class="text-justify" style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; text-align: justify ">Sin otra particular, me retiro a sus órdenes.</p></td>
                </tr>

                <tr>
                    <td><p class="text-justify" style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; text-align: justify">ATENTAMENTE<br>
                            SUFRAGIO EFECTIVO. NO RELECCIÓN</p>
                    </td>
                </tr>

                <tr>
                    <td><p class="text-justify" style="font-size: 10px; font-family:Arial, Helvetica, sans-serif; text-align: justify">MTRO. GUILLERMO LEGORRETA MAETÍNEZ<br>
                            DELEGADO</p>
                    </td>
                </tr> 
            </table>
        </center>
        <table border="1" style="width: 90%; alignment-adjust: central"  >
            <tr>
                <td>
                    <p style="font-size: 6px; font-family:Arial, Helvetica, sans-serif">
                        C.C.P <b>Lic. Rubén Jesús Lara León</b>.-  Coordinador General de Delegaciones Federales de la Secretaria de Educación pública.- Presente.<br>
                        <b style="padding-left: 16px">Lic. Miguel Salcedo Hernández</b>.-   Coordinador General de Atención Ciudadano(a).-<?php echo $referencia ?><br>
                        <b style="padding-left: 16px">Lic. Edgar Israel Gutiérrez Paredes</b>.- Jefe del Departamento de Vinculación y Apoyo institucional de la coordinación General de Delegaciones Federales.- SEP<br>
                        <b style="padding-left: 16px">Folio</b>:<?php echo $folio ?><br>
                        <b style="padding-left: 16px">C</b>.<?php echo $ciudadano ?><br>
                        GLM/arll*
                    </p>
                </td>
            </tr>
        </table>

        <br />
        <table border="1" style="width: 90%; position: fixed; bottom: 0">
            <tr>
                <td>
                    <p style="font-size: 6px; font-family:Arial, Helvetica, sans-serif; text-align: center">
                        Av. Dr. Nicolás San Juan S/N, Parque administrativo Cuauhtémoc, Col. Ex Hacienda La Magdalena, Toluca Estado de México, CP 50010.<br>
                        Teléfono: 01 (722) 272-94-70, delegación.mex@nube.sep.gob.mx  www.sep.gob.mx
                    </p>
                </td>
            </tr>
        </table>
        
    </body>
    </html>

    <?php
    require_once("sources/dompdf/dompdf_config.inc.php");
    $dompdf = new DOMPDF();
    $dompdf->load_html(ob_get_clean());
    $dompdf->render();
    $pdf = $dompdf->output();
    $filename = 'Oficios/OficioNo' . $noOficio . '.pdf';
    file_put_contents($filename, $pdf);
    enviarOficio($noOficio, $mailCiudadano, $mail1, $mail2, $mail3, $mail4, $asunto);
} else {
    $respuesta = "<center><h1><p>Error Al Insertar</p></h1>></center>";
}

}else{
    	redireccionar();
	}
?>