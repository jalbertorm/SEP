<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] = "normal" and $_GET) {
    $idOficio = $_GET['idOficio'];
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
                                    <li><a href="consultarOficio.php"><i class="fa fa-circle-o"></i> Oficios Registrados</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-envelope"></i> <span>Respuestas</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="identificarOficio.php"><i class="fa fa-circle-o"></i> Redactar Respuesta</a></li>
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
                                        <h3 class="box-title">Enviar Oficio a Dependencia</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">

                                        <form action="confirmaEnviarDependencia.php" method="POST">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <label>Confirmar Email:</label>
                                                    <?php comboDependencia(); ?>                                                    
                                                    <?php getDependenciaRobert() ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <label>Email Adicional (opcional)</label>
                                                    <input type="email" class="form-control" name="mailOpcional" id="mailOpcional" placeholder="ejemplo@ejemplo.com">
                                                    <div id="rMailAdicional"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxMailAdicional" required>
                                                    </div>
                                                </div>
                                            </div><!-- /.box-body -->
                                            <br>
                                            <br>

                                            <div class="box-footer text-right">
                                                <a class="btn btn-default" href="consultarOficio.php"  onClick="return confirm('¿Está seguro que desea cancelar?, No se guardará ningún cambio!');">Cancelar</a>
                                                &nbsp;
                                                <button type="submit" class="btn btn-default">Enviar</button>
                                            </div><!-- /.box-footer-->
                                            <input type="hidden" name="id" value="<?php echo $idOficio; ?>">
                                        </form>  
                                    </div>
                                </div><!-- /.box -->
                            </div>
                        </div>
                    </section><!-- /.content -->
                </div><!-- /.content-wrapper -->

                <?php include ('sources/template/pie.php'); ?>

            </div><!-- ./wrapper -->

            <?php include ('sources/template/scripts.php'); ?>
            <script>
                $(function () {
    <?php getDependenciaRobertScriptHide(); ?>
                    $('#destinatario').change(function () {
    <?php getDependenciaRobertScriptHide(); ?>
                        switch ($('#destinatario').val()) {
    <?php getDependenciaRobertScriptCase(); ?>
                            default:
    <?php getDependenciaRobertScriptHide(); ?>
                        }
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
