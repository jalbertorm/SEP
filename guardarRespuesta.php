<?php
session_start();

if ($_SESSION["Activa"] && $_POST) {
    include("sources/funciones.php");
    require("sources/Query.inc");
    $query = new Query();
    $vR_id = __($_POST['idOficio']);
    $mailQuery = $query->select("mailCiudadano m", "oficio", "idOficio='$vR_id'");

    if ($mailQuery) {
        foreach ($mailQuery as $m) {
            $mail = $m->m;
        }
    }

    $v_asunto = __($_POST['asunto']);
    $v_redaccion = __($_POST['redaccion']);
    $nom = "holabb";

    if ($_FILES["imagen"]["name"]) {
        $url_imagen = guardaArchivo("almacenArchivos/", $nom);
        if ($query->insert("respuesta", "fecha, asunto, redaccion, archivoAdjunto, oficio_idOficio", "now(), '$v_asunto', '$v_redaccion','$url_imagen', $vR_id")) {
            require_once('sources/AttachMailer.php');
            $mailer = new AttachMailer("no-replay@dycesa.com", "$mail", "Respuesta", "Por medio del presente, se le informa que que la respuesta a su petición es la siguiente: " . $v_redaccion);
            /*anexo lineas para anexar respuesta al mail*/
            $mailer->attachFile($url_imagen);
            /*fin de anexo*/
            $res = ($mailer->send() ? "OK" : "error");
            if ($res == "OK") {
                $query->update("oficio", "status=3", "idOficio=$vR_id");
                $respuesta = '
  <img src="images/ok.png" width="100">
  <h4>
    Respuesta enviada correctamente
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
        $conImagen = false;
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
                </header>
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
                                        <h3 class="box-title">Title</h3>
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