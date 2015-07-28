<?php
ob_start();
include("sources/funciones.php");

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
$mailCiodadano = strtolower(__($_POST["mailCiodadano"]));
$telCiudadano = __($_POST["telCiudadano"]);
$mail1 = strtolower(__($_POST["mail1"]));
$mail2 = strtolower(__($_POST["mail2"]));
$mail3 = strtolower(__($_POST["mail3"]));
$mail4 = strtolower(__($_POST["mail4"]));

$redaccion1 = "Anteponiendo un cordial saludo, me permito remitir a Usted,  petición formulada al Lic. Enrique
             Peña Nieto, Presidente Constitucional de los Estados Unidos  Mexicanos, enviada a esta
             Delegación por la Coordinación de atención Ciudadana de la Secretaría de Educación Pública, la Cual se detalla a continuación: ";
$redaccion2 = "Anteponiendo un cordial saludo, me permito remitir a Usted, petición formulada al Lic. Emilio
             Cuayffet Chemor, Secretario de Educación Pública, misma que se detalla a continuación: ";

$asunto1 = "Pide apoyo para obtener una copia de boleta de 1° grado de "
        . "educación primaria de la Escuela Privada “Promoción Escolar,"
        . " S.C.”, del municipio de Tlalnepantla, Estado de México.";

$gracias = "Por lo anterior, solicito de no existir inconveniente, gire sus amables instrucciones al área 
          Correspondiente a fin de brindar la atención que proceda a dicho requerimiento, rogando 
          Respetuosamente sea tan gentil de enviar a esta Delegación el seguimiento del presente asunto.";

require("sources/Query.inc");
$query = new Query();


//if ($query->insert("oficio", "noOficio, ano, fecha, titulo, nombre, puesto, ciudadano, asunto, referencia, folio, mailCiudadano, telCiudadano, mail1, mail2, mail3, mail4, mail5", "'$noOficio', '$ano', '$fecha','$titulo', '$nombre', '$puesto', '$ciudadano', '$asunto','$referencia', '$folio','$mailCiudadano', '$telCiudadano', '$mail1', '$mail2', '$mail3', '$mail4', '$mail5'")) {
/* $respuesta = "<center><h1><span>Agregado correctamente</span></h1></center>"; */

$registros = ($query->select("noOficio, ano, fecha, titulo, nombre, puesto, ciudadano, asunto, referencia, folio, mailCiudadano, telCiudadano, mail1, mail2, mail3, mail4, mail5", "oficio", "idOficio=60"));

if ($registros) {
    foreach ($registros as $reg) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            </head>
            <body>
            <center>
                <br>
                <br>
                <table border="0" style="width: 90%">
                    <tr>
                        <td>
                            <img src="images/logo1.png" width="350"/>    
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <p aling="left">
                                <font style="font-style: italic; font-size: 13px">"2015 Año del Generalísimo Jose María Morelos y Pavón."</font>
                                <br>
                                <br>
                                <b style="font-size: 14px">SECRETARÍA DE EDUCACIÓN PÚBLICA</b><br>
                                Coordinación General Delegaciones Federales<br>
                                de la Secreataría de Educacion Pública<br>
                                Delegación Federal de la Secretaría de Educación<br>
                                Pública en el Estado de México<br>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br><br>
                            <p>Oficio número SEP/DFSEPMEX /<?php echo $reg->noOficio; ?>/<?php echo $reg->ano; ?> </p>
                        </td>
                    </tr>
                </table>

                <table border="0" style="width: 90%">    
                    <tr>
                        <td align="right">
                            <p style="font-size: 21px">Toluca, México.,<?php echo $reg->fecha; ?></p><br>
                        </td>
                    </tr>
                </table>

                <table border="0" style="width: 90%">
                    <tr>
                        <td>
                            <p><?php echo $reg->titulo; ?><br>
                                <?php echo $reg->nombre; ?><br>
                                <?php echo $reg->puesto; ?><br> 
                                PRESENTE
                            </p>   
                        </td>
                    </tr>
                </table>
                <br>

                <table border="0" style="width: 90%">
                    <td>
                        <p><?php echo $redaccion1 ?>
                        </p>
                    </td>
                </table>

                <table border="1" style="width: 90%">
                    <tr>
                        <td align="right" style="width: 30%"><b><center>CIUDADANO</center></b></td>
                        <td align="right"><b><center>ASUNTO</center></b></td>
                    </tr>
                    <tr>
                        <td><p><?php echo $reg->ciudadano; ?></p></td>
                        <td><p><?php echo $asunto1; ?></p></td>
                    </tr>
                </table>

                <br>
                
                <table border="0" style="width: 90%">
                    <tr>
                        <td><p class="text-justify"><?php echo $gracias; ?></p></td>
                    </tr>

                    <tr>
                        <td><p class="text-justify">Sin otra particular, me retiro a sus órdenes.</p></td>
                    </tr>

                    <tr>
                        <td><p>ATENTAMENTE<br>
                                SUFRAGIO EFECTIVO. NO RELECCIÓN</p>
                        </td>
                    </tr>

                    <tr>
                        <td><p>MTRO. GUILLERMO LEGORRETA MAETÍNEZ<br>
                                DELEGADO</p>
                        </td>
                    </tr> 
                </table>

                <table border="0" style="width: 90%">
                    <tr>
                        <td>
                            <p style="font-size: 10px">
                                C.C.P Lic. Rubén Jesús Lara León.-  Coordinador General de Delegaciones Federales de la Secretaria de Educación pública.- Presente.<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lic. Miguel Salcedo Hernández.-   Coordinador General de Atención Ciudadano(a).-<?php echo $referencia ?><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lic. Edgar Israel Gutiérrez Paredes.- Jefe del Departamento de Vinculación y Apoyo institucional de la coordinación General de Delegaciones Federales.- SEP<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Folio:<?php echo $reg->folio ?><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C.<?php echo $reg->ciudadano ?><br>
                                GLM/arll*
                            </p>
                        </td>
                    </tr>
                </table>

                <br />
                <br />

                <table border="0" style="width: 90%">
                    <tr>
                        <td>
                            <p style="font-size: 10px" align="center">
                                Av. Dr. Nicolás San Juan S/N, Parque administrativo Cuauhtémoc, Col. Ex Hacienda La Magdalena, Toluca Estado de México, CP 50010.<br>
                                Teléfono: 01 (722) 272-94-70, delegación.mex@nube.sep.gob.mx  www.sep.gob.mx
                            </p>
                        </td>
                    </tr>
                </table>
            </center>
        </body>
        </html>

        <?php
    }
}

/* require_once("sources/dompdf/dompdf_config.inc.php");
  $dompdf = new DOMPDF();
  $dompdf->load_html(ob_get_clean());
  $dompdf->render();
  $pdf = $dompdf->output();
  $filename = 'Oficios/OficioNo_' . $noOficio . '.pdf';
  file_put_contents($filename, $pdf);
  /* eComprobante($folio, $mail);
  } else {
  $respuesta = "<center><h1><p>Error Al Insertar</p></h1>></center>";
  } */
?>