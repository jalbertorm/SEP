<?php
ob_start();
include("sources/funciones.php");
if ($_SESSION["Activa"] && $_GET and $_SESSION["Tipo_usuario"] = "normal") {
    $Aux = $_GET['msg'];

    if ($Aux == "correcto") {
        $respuesta = "
                     <img src='images/ok.png' width='100'>
                     <h4>
                        El oficio se ha generado correctamente.
                     </h4>";
    } elseif ($Aux == "error") {
        $respuesta = '
  <img src="images/error.png" width="100">
  <h4>
    No se pudo generar oficio.
  </h4>
  ';
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <?php include ('sources/template/head.php'); ?>
            <?php if ($Aux == "correcto") { ?>
                <meta http-equiv="Refresh" content="2;url=consultarOficio.php" />
            <?php } elseif ($Aux == "error") { ?>
                <meta http-equiv="Refresh" content="2;url=generarOficio.php" />    
            <?php } ?>
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
                                        <h3 class="box-title">Generar Oficio</h3>
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