<?php
session_start();
include("sources/funciones.php");
if ($_SESSION["Activa"]) {
    //su codigo total
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <?php include ('sources/template/head.php'); ?>


        </head>
        <body class="skin-black-light sidebar-mini">
            <!-- Site wrapper -->
            <div class="wrapper">

                <header class="main-header">
                    <?php include ('sources/template/header.php'); ?>
                </header>

                <!-- =============================================== -->

                <!-- Left side column. contains the sidebar -->
                <aside class="main-sidebar">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu">
                            <li class="header">Menú principal</li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-file-text"></i> <span>Oficios</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="generarOficio.php"><i class="fa fa-circle-o"></i> Redactar Oficio</a></li>
                                    <li><a href="consultarOficio.php"><i class="fa fa-circle-o"></i> Oficios Enviados</a></li>
                                </ul>
                            </li>
                            <li class="treeview active">
                                <a href="#">
                                    <i class="fa fa-envelope"></i> <span>Respuestas</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="identificarOficio.php"><i class="fa fa-circle-o"></i> Redactar Respuesta</a></li>
                                    <li><a href="consultarRespuesta.php"><i class="fa fa-circle-o"></i> Respuestas Enviadas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

                <!-- =============================================== -->

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <?php include ('sources/template/titulo.php'); ?>

                    <!-- Main content -->
                    <section class="content">

                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-8 col-md-offset-2">
                                <!-- Default box -->
                                <div class="box box-solid box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Buscar Folio</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">                                                
                                            <div class="input-group input-group-sm col-md-6 col-md-offset-3">
                                                <!--
                                                <input type="hidden" id="idOficio" name="idOficio" value="1">
                                                -->
                                                <input type="text" class="form-control" name="nOficio" id="nOficio" required>
                                                <span class="input-group-btn">
                                                    <a href="#" class="btn btn-block btn-default">Buscar</a>
                                                </span>
                                            </div><!-- /input-group -->
                                        </div>


                                        <div class="form-group">
                                            <!--<div id="rMail"></div> -->
                                            <div class="input-group input-group-sm col-md-6 col-md-offset-3" id="tablaBuscarO">

                                                <!-- aqui iria buscarOficio, si se trae de metodosLuz 
                                                              buscarOficio();-->

                                            </div>
                                        </div>



                                        <div id="oficio" class="form-group"></div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-right">
                                    </div><!-- /.box-footer-->
                                </div><!-- /.box -->
                            </div>
                        </div>
                    </section><!-- /.content -->
                </div><!-- /.content-wrapper -->
                <?php include ('sources/template/pie.php'); ?>
            </div><!-- ./wrapper -->
            <?php include ('sources/template/scripts.php'); ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#nOficio').blur(function () {

                        var nOficio = $(this).val();
                        var dataString = 'nOficio=' + nOficio;

                        $.ajax({
                            type: "POST",
                            url: "buscarOficio.php",
                            data: dataString,
                            success: function (data) {
                                $('#tablaBuscarO').fadeIn(500).html(data);
                            }
                        });
                    });
                });
            </script>

        </body>
    </html>
    <?php
} else {
    redireccionar();
}
?>
