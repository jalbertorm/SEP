<?php 
session_start(); 
include("sources/funciones.php");
if($_SESSION["Activa"]){
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
                                <li class="active"><a href="generarRespuesta.php"><i class="fa fa-circle-o"></i> Redactar Respuesta</a></li>
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
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Default box -->
                            <div class="box box-solid box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Redactar Respuesta</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>

                                <form action="guardarRespuesta.php" method="post">
                                    <div class="box-body">
                                        <!--
                                        <form action="guardarRespuesta.php" method="post">
                                        -->
                                        <div class="form-group">
                                            <!-- aqui cambiar el value, por lo que traeremos en PHP-->
                                            <input type="hidden" id="idOficio" name="idOficio" value="3">
                                            <label for="exampleInputEmail1">Asunto: </label>
                                            <input type="text" class="form-control" id="asunto" name="asunto" required placeholder="Asunto" required>
                                        </div>
                                        <br>
                                        <label for="exampleInputEmail1">Respuesta: </label>
                                        <textarea class="textarea" placeholder="Redactar Respuesta"	id="redaccion" name="redaccion" required				
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
                                                  border: 1px solid #dddddd; padding: 10px;">
                                        </textarea>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-right">
                                        <button type="reset" class="btn btn-default">Limpiar</button>
                                        &nbsp;
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </div><!-- /.box-footer-->
                                </form>
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
	}else{
    	redireccionar();
	}
?>