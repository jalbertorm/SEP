<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] && $_GET and $_SESSION["Tipo_usuario"] = "normal") {
    $noOficio = $_GET['noOficio'];
    $mailCiudadano = $_GET['mailCiudadano'];
    $mail1 = $_GET['mail1'];
    $mail2 = $_GET['mail2'];
    $mail3 = $_GET['mail3'];
    $mail4 = $_GET['mail4'];
    $asunto = $_GET['asunto'];

    require_once('sources/AttachMailer.php');

    if ($mailCiudadano) {
        $mailer = new AttachMailer("no-replay@dycesa.com", "$mailCiudadano", "Oficio_" . $noOficio, "Cuerpo del Email");
        $Oficio = 'Oficios/Oficio_' . $noOficio . '.pdf';
        $mailer->attachFile($Oficio);

        if (file_exists($Oficio)) {
            $res = ($mailer->send() ? "OK" : "$mailCiudadano");
            if($res){
                $correo=$mailCiudadano;
            }
            if ($mail1) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail1", "Oficio_" . $noOficio, "Cuerpo del Email");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail1");
                $correo.=' ' . $mail1;
            }
            if ($mail2) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail2", "Oficio_" . $noOficio, "Cuerpo del Email");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail2");
                $correo.=' ' . $mail2;
            }
            if ($mail3) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail3", "Oficio_" . $noOficio, "Cuerpo del Email");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail3");
                $correo.=' ' . $mail3;
            }
            if ($mail4) {
                $mailer = new AttachMailer("no-replay@dycesa.com", "$mail4", "Oficio_" . $noOficio, "Cuerpo del Email");
                $mailer->attachFile($Oficio);
                $res1 = ($mailer->send() ? "OK" : "$mail4");
                $correo.=' ' . $mail4;
            }
        }

        if ($res == "OK" || $res1 == "OK" || $res2 == "OK" || $res3 == "OK" || $res4 == "OK") {
            $respuesta = '
                     <img src="images/ok.png" width="100">
                     <h4>
                        Oficio enviado correctamente a: '.$correo.'
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