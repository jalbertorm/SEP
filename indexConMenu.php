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
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-file-text"></i> <span>Oficios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="generarOficio.php"><i class="fa fa-circle-o"></i> Redactar Oficio</a></li>
                                <li><a href="oficio1.php"><i class="fa fa-circle-o"></i> Oficios Enviados</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i> <span>Respuestas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="identificarOficio.php"><i class="fa fa-circle-o"></i> Redactar Respuesta</a></li>
                                <li><a href="500.html"><i class="fa fa-circle-o"></i> Respuestas Enviadas</a></li>
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
                        <div class="col-md-6 col-md-offset-3">
                            <!-- Default box -->
                            <div class="box box-solid box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Title</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Start creating your amazing application!
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    Footer
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