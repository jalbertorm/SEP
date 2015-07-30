<?php 
    include_once("sources/funciones.php"); 
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include ('sources/template/head.php'); ?>
        <!-- DESCOMENTAR xD Y PONER EL ARCHIVO CORRESPONDIENTE (VER carga de trabajo.xls)-->
        <!--<meta http-equiv="Refresh" content="3;url=aRegistro.php" />-->
    </head>
    <body class="skin-black-light sidebar-mini sidebar-collapse">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <?php include ('sources/template/headerRedaccion.php'); ?>
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
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Default box -->
                            <div class="box box-solid box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Respuesta</h3>
                                </div>
                                <div class="box-body text-center">
                                    <?php redaccionRespuesta($id); ?>
                                    
                                </div><!-- /.box-body -->
                                <div class="box-footer text-center">

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