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
                                <li><a href="oficio1.php"><i class="fa fa-circle-o"></i> Oficios Enviados</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-envelope"></i> <span>Respuestas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="generarRespuesta.php"><i class="fa fa-circle-o"></i> Redactar Respuesta</a></li>
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
                    <form action="guardarRespuesta.php" method="post">
                        <div class="row">

                            <div class="col-md-10 col-md-offset-1">

                                <div class="box box-solid box-default">
                                    <div class="box-header with-border" >

                                        <h3 class="box-title">Redactar Respuesta</h3>

                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">



                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Asunto: </label>
                                            <input type="text" class="form-control" id="asunto" name="asunto" required placeholder="Asunto">
                                        </div>



                                        <div class="box-body pad">

                                            <textarea class="textarea" placeholder="Place some text here"					
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
                                                      border: 1px solid #dddddd; padding: 10px;"
                                                      id="redaccion" name="redaccion" required></textarea>

                                        </div>			


                                    </div>


                                    <div class="box-footer text-right">
                                        <button class="btn btn-default">Default</button>
                                        &nbsp;
                                        <button class="btn btn-default">Default</button>
                                    </div><!-- /.box-footer-->
                                </div><!-- /.box -->
                            </div>
                        </div>
                    </form>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <?php include ('sources/template/pie.php'); ?>

        </div><!-- ./wrapper -->

        <?php include ('sources/template/scripts.php'); ?>
    </body>
</html>