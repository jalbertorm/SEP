<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador" and $_POST) {
    $texto = __($_POST["texto"]);
    $id = $_POST['id'];

    require("sources/Query.inc");
    $query = new Query();

    if ($query->update("redNotificacion", "redaccionRespuestas='$texto'", "idRedNotificacion=$id")) {
        $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Datos actualizados correctamente.
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
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <?php include ('sources/template/head.php'); ?>
            <meta http-equiv="Refresh" content="2;url=consultarNotRespuestas.php" />
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
                                        <h3 class="box-title">Editar Notificación de Respuestas</h3>
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