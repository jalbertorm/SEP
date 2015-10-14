<?php
session_start();
include("sources/funciones.php");
if ($_SESSION["Activa"] && $_GET) {
    $idOficio = __($_GET['idOficio']);

    //consulta oficio en la Base de Datos
    require("sources/Query.inc");
    $query = new Query();
    $regCupo = $query->select("noOficio, asunto, mailCiudadano, mail1, mail2, mail3, mail4", "oficio", "idOficio=$idOficio");
    if ($regCupo) {
        foreach ($regCupo as $r) {
            $noOficio = $r->noOficio;
            $mailCiudadano = $r->mailCiudadano;
            $mail1 = $r->mail1;
            $mail2 = $r->mail2;
            $mail3 = $r->mail3;
            $mail4 = $r->mail4;
            $asunto = $r->asunto;
        }
    }

    require_once('sources/AttachMailer.php');

    if ($mailCiudadano) {
        $mailer = new AttachMailer("no-replay@dycesa.com", "$mailCiudadano", " $asunto" . $noOficio, "cuerpobb");
        $Oficio = 'Oficios/Oficio_' . $noOficio . '.pdf';
        $mailer->attachFile($Oficio);

        if (file_exists($Oficio)) {
            $res = ($mailer->send() ? "OK" : "$mailCiudadano");
            if ($res) {
                $correo = $mailCiudadano;
            }
            if ($mail1) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail1", " $asunto" . $noOficio, "cuerpobb");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail1");
                $correo.=' ' . $mail1;
            }
            if ($mail2) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail2", " $asunto" . $noOficio, "cuerpobb");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail2");
                $correo.=' ' . $mail2;
            }
            if ($mail3) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail3", " $asunto" . $noOficio, "cuerpobb");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail3");
                $correo.=' ' . $mail3;
            }
            if ($mail4) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail4", " $asunto" . $noOficio, "cuerpobb");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail4");
                $correo.=' ' . $mail4;
            }
        }

        if ($res == "OK" || $res1 == "OK" || $res2 == "OK" || $res3 == "OK" || $res4 == "OK") {
            $respuesta = '
                     <img src="images/ok.png" width="100">
                     <h4>
                        Oficio enviado correctamente a: ' . $correo . '
                     </h4>';
        } else {
            if ($res != 'OK') {
                $mensaje.=$res;
            }
            if ($res1 != 'OK') {
                $mensaje.=' ' . $res1;
            }
            if ($res2 != 'OK') {
                $mensaje.=' ' . $res2;
            }
            if ($res3 != 'OK') {
                $mensaje.=' ' . $res3;
            }
            if ($res4 != 'OK') {
                $mensaje.=' ' . $res4;
            }
            $respuesta = '
  <img src="images/error.png" width="100">
  <h4>
    No se pudo enviar correo electrónico a:' . $mensaje . '
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
                                        <h3 class="box-title">Enviando Oficio</h3>
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