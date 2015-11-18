<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] && $_POST and $_SESSION["Tipo_usuario"] = "normal") {
    $idRespuesta = __($_POST['idRespuesta']);
    $idOficio = __($_POST['idOficio']);

    $mailOpcional = __($_POST['mailOpcional']);

    $notificacionRespuesta = getRedNotificacionRespuestas();

    $nom = "respuesta";
    
    require_once('sources/AttachMailer.php');
    require_once("sources/Query.inc");
    $query = new Query();

    $regC = $query->select("o.mailCiudadano ml, r.asunto asunto, r.redaccion redaccion, r.archivoAdjunto adjunto", "oficio o, respuesta r", "r.idRespuesta=$idRespuesta and o.idOficio=$idOficio");

    if ($mailOpcional != '') {
        if ($regC) {
            foreach ($regC as $r) {
                $mailCiudadano = $r->mailCiudadano;
                $asunto = $r->asunto;
                $redaccion = $r->redaccion;
                $archivo = $r->adjunta;
            }

            $cuerpoMail = '<p style="font-size: large;">
                            ' . $notificacionRespuesta['redaccionRespuestas'] . '
                            <br>
                            ' . $redaccion . '
                        </p>
                        <p style="text-align: center; font-weight: bold;">
                            <font style="font-size: larger;">Coordinación General de Atención Ciudadana</font><br>
                            Delegación SEP Estado de México
                        </p>';
            
            
            $mailer = new AttachMailer("no-reply@sep.com", "$mailCiudadano,$mailOpcional", "$asunto", "$cuerpoMail");
            $mailer->attachFile($archivo);
            

            $res = ($mailer->send() ? "OK" : "error");
            if ($res == "OK") {
                $respuesta = '
                            <img src="images/ok.png" width="100">
                            <h4>
                              Respuesta re-enviada correctamente
                            </h4>
                            ';
            } else {
                $respuesta = '
                            <img src="images/error.png" width="100">
                            <h4>
                              Ha ocurrido un error
                            </h4>
                            ';
            }
        } else {
            $respuesta = '
                        <img src="images/error.png" width="100">
                        <h4>
                          Ha ocurrido un error
                        </h4>
                        ';
        }
    } else {
        if ($regC) {
            foreach ($regC as $r) {
                $mailCiudadano = $r->mailCiudadano;
                $asunto = $r->asunto;
                $redaccion = $r->redaccion;
                $archivo = $r->adjunta;
            }

            $cuerpoMail = '<p style="font-size: large;">
                            ' . $notificacionRespuesta['redaccionRespuestas'] . '
                            <br>
                            ' . $redaccion . '
                        </p>
                        <p style="text-align: center; font-weight: bold;">
                            <font style="font-size: larger;">Coordinación General de Atención Ciudadana</font><br>
                            Delegación SEP Estado de México
                        </p>';
            
            
            $mailer = new AttachMailer("no-reply@sep.com", "$mailCiudadano", "$asunto", "$cuerpoMail");
            $mailer->attachFile($archivo);
            /* fin de anexo */

            $res = ($mailer->send() ? "OK" : "error");
            if ($res == "OK") {
                $respuesta = '
                            <img src="images/ok.png" width="100">
                            <h4>
                              Respuesta re-enviada correctamente
                            </h4>
                            ';
            } else {
                $respuesta = '
                            <img src="images/error.png" width="100">
                            <h4>
                              Ha ocurrido un error
                            </h4>
                            ';
            }
        } else {
            $respuesta = '
                        <img src="images/error.png" width="100">
                        <h4>
                          Ha ocurrido un error
                        </h4>
                        ';
        }
    }
    ?>


    <!DOCTYPE html>
    <html>
        <head>
    <?php include ('sources/template/head.php'); ?>

            <meta charset="UTF-8">
            <title>Registro Respuesta></title>
            <meta http-equiv="Refresh" content="2;url=consultarRespuesta.php" />
        </head>
        <body class="skin-black-light sidebar-mini sidebar-collapse">
            <!-- Site wrapper -->
            <div class="wrapper">
                <header class="main-header">
    <?php include ('sources/template/header.php'); ?>
                </header><div class="content-wrapper">
    <?php include ('sources/template/titulo.php'); ?>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6 col-md-offset-3">
                                <!-- Default box -->
                                <div class="box box-solid box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Re-Enviar Respuesta</h3>
                                    </div>
                                    <div class="box-body text-center">
    <?php echo $respuesta; ?>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-center">
                                        <h4>
                                            <small>Redireccionando...</small>
                                        </h4>
                                        <img src="images/cargando.gif" width="20">
                                        <br>
                                        &nbsp;
                                    </div><!-- /.box-footer-->
                                </div><!-- /.box -->
                            </div>
                        </div>
                    </section><!-- /.content -->
                </div><!-- /.content-wrapper -->

    <?php include ('sources/template/pie.php'); ?>

            </div><!-- ./wrapper -->

    <?php include ('sources/template/scripts.php'); ?>
        </body>
    </html>

    <?php
} else {
    redireccionar();
}
?>