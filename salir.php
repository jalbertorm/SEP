<?php

session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include ('sources/template/head.php'); ?>
        <meta http-equiv="Refresh" content="3;url=login.php" />
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
                                    <img src="images/closed.png" width="100">
                                    <h4>Sesión concluida.</h4>
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

