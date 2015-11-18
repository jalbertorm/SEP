<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] && $_POST and $_SESSION["Tipo_usuario"] = "normal") {
    $idOficio = $_POST['id'];
    $datosOficio = getOficio($idOficio);
    
    $destinatario = __($_POST["destinatario"]);
    $mailOpcional = $_POST['mailOpcional'];
    $datosDestinatario = getDatosDestinatario($destinatario);

    $mailDestinatario = $datosDestinatario['correo'];
    
    $asuntoMail = 'Revisión de oficio '.$datosOficio['noOficio'].', Coordinación General de Atención Ciudadana, Delegación SEP Estado de México';

    $cuerpoMail = '<p style="font-size: large;">
                                Por medio del presente, se solicita de la manera más atenta, dar revisión del oficio adjunto, de antemano agradezco la atención prestada.
                                <br>Sin otro particular, quedo a sus órdenenes.
                            </p>
                            <p style="text-align: center; font-weight: bold;">
                                <font style="font-size: larger;">Coordinación General de Atención Ciudadana</font><br>
                                Delegación SEP Estado de México
                            </p>';

    require_once('sources/AttachMailer.php');

    if ($mailOpcional != '') {
        $mailer = new AttachMailer("no-reply@sep.com", "$mailDestinatario,$mailOpcional", "$asuntoMail", "$cuerpoMail");
        $oficio = "Oficios/Oficio_" . $datosOficio['noOficio'] . ".pdf";
        $mailer->attachFile($oficio);

        if (file_exists($oficio)) {
            $res = ($mailer->send() ? "OK" : "error");
        }

        if ($res == "OK") {
            $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Oficio enviado correctamente.
                    </h4>
                    ';
        } else {
            $respuesta = '
                    <img src="images/error.png" width="100">
                    <h4>
                        Ha ocurrido un error.
                    </h4>
                    ';
        }
    } else {
        $mailer = new AttachMailer("no-reply@sep.com", "$mailDestinatario", "$asuntoMail", "$cuerpoMail");
        $oficio = "Oficios/Oficio_" . $datosOficio['noOficio'] . ".pdf";
        $mailer->attachFile($oficio);

        if (file_exists($oficio)) {
            $res = ($mailer->send() ? "OK" : "error");
        }

        if ($res == "OK") {
            $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Oficio enviado correctamente.
                    </h4>
                    ';
        } else {
            $respuesta = '
                    <img src="images/error.png" width="100">
                    <h4>
                        Ha ocurrido un error.
                    </h4>
                    ';
        }
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <?php include ('sources/template/head.php'); ?>

            <meta http-equiv="Refresh" content="2;url=consultarOficio.php" />
        </head>
        <body class="skin-black-light sidebar-mini sidebar-collapse">
            <!-- Site wrapper -->
            <div class="wrapper">

                <header class="main-header">
                    <?php include ('sources/template/header.php'); ?>
                </header>

                <!-- =============================================== -->

                <!--aquí no hay menú-->           

                <!-- =============================================== -->

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <?php include ('sources/template/titulo.php'); ?>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6 col-md-offset-3">
                                <!-- Default box -->
                                <div class="box box-solid box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Enviar a Revisión</h3>
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