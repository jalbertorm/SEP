<?php
ob_start();
include("sources/funciones.php");


$nom = "holabb";

require("sources/Query.inc");
$query = new Query();



if ($query->insert("oficio", "nombre", "'$nom'")) {
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
                        se genero    
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
                        <p>Oficio número SEP/DFSEPMEX /<?php echo $noOficio; ?>/<?php echo $ano; ?> </p>
                    </td>
                </tr>
            </table>

            <table border="0" style="width: 90%">    
                <tr>
                    <td align="right">
                        <p style="font-size: 21px">Toluca, México.,<?php echo $fecha; ?></p><br>
                    </td>
                </tr>
            </table>

            <table border="0" style="width: 90%">
                <tr>
                    <td>
                        <p><?php echo $titulo; ?><br>
                            <?php echo $nombre; ?><br>
                            <?php echo $puesto; ?><br> 
                            PRESENTE
                        </p>   
                    </td>
                </tr>
            </table>
            <br>

            <table border="0" style="width: 90%">
                <tr>
                    <td>
                        <p><?php echo $redaccion ?></p>
                    </td>
                </tr>
            </table>

            <table border="1" style="width: 90%">
                <tr>
                    <td align="right" style="width: 30%"><b><center>CIUDADANO</center></b></td>
                    <td align="right"><b><center>ASUNTO</center></b></td>
                </tr>
                <tr>
                    <td><p><?php echo $ciudadano; ?></p></td>
                    <td><p><?php echo $asunto; ?></p></td>
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
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Folio:<?php echo $folio ?><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C.<?php echo $ciudadano ?><br>
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

            <table>
                <tr>
                    <td>
                        <p class="text-justify"><?php echo $respuesta; ?></p> 
                    </td>
                </tr>
            </table>
        </center>
    </body>
    </html>
    <?php
    require_once("sources/dompdf/dompdf_config.inc.php");
    $dompdf = new DOMPDF();
    $dompdf->load_html(ob_get_clean());
    $dompdf->render();
    $pdf = $dompdf->output();
    $filename = "Oficios/Pinche2" . $nom . '.pdf';
    file_put_contents($filename, $pdf);

    //eComprobante($folio,$mail);
} else {
    $respuesta = "error al insertar";
}
?>