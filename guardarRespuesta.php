<?php session_start(); ?>
<?php
include("sources/funciones.php");
require("sources/Query.inc");

$query = new Query();

/*
$noOficio = __($_POST["noOficio"]);
 * 
 * $vR_id = $_POST['idOficio'];
 */
$vR_id = __($_POST['idOficio']);

$mail = $query->select("mailCiudadano ml", "oficio", "idOficio='$vR_id'");

/*
  $v_fecha=$_POST['fecha'];
 */
$v_asunto = __($_POST['asunto']);
$v_redaccion = __($_POST['redaccion']);





if ($query->insert("respuesta", "fecha, asunto, redaccion, oficio_idOficio", "now(), '$v_asunto', '$v_redaccion', 2")) {

    /* si realiza la insercion, tambien envia el correo */


    if ($mail) {
        foreach ($mail as $m) {
            $correo = $m->ml;
        }
    }

    require_once('sources/AttachMailer.php');

    /*
      "correo origen", "correo destino", "asunto", "cuerpo del mensaje"
     */

    $mailer = new AttachMailer("mar_d_estrella@hotmail.com", "luz_rebollo@hotmail.com", "enviando", "C:  Fulanito de tal  , Se le informa que que la respuesta a su petición es la siguiente: " . $v_redaccion);


    $res = ($mailer->send() ? "OK" : "error");


    if ($res == "OK") {

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



/* 	
  $comprobante="comprobantes/folio_".$folio.".pdf";
  $mailer->attachFile($comprobante);



  if(file_exists($comprobante)){
  $res=($mailer->send() ? "OK": "error");
  }

  if($res=="OK"){
  $respuesta= "<center><img src='images/ok.png' width='100'></center>
  <br><center><h1><span>Comprobante enviado correctamente</span></h1></center>";
  }
  else{
  $respuesta="<h1><span>Error al enviar el Comprobante</span></h1></p>";
  }


 */
?>


<!DOCTYPE html>
    <html>
        <head>
            <?php include ('sources/template/head.php'); ?>

            <meta charset="UTF-8">
            <title>Registro Respuesta></title>
            <meta http-equiv="Refresh" content="3;url=consultarRespuesta.php" />
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