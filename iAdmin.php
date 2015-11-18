<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador") {
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
                            <li class="header">Menú principal de Administrador</li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-user-plus"></i> <span>Usuarios</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="altaUsuario.php"><i class="fa fa-circle-o"></i> Nuevo Usuario</a></li>
                                    <li><a href="consultarUsuario.php"><i class="fa fa-circle-o"></i> Usuarios Registrados</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-file-text"></i> <span>Saludos (Oficio)</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="altaRedaccion.php"><i class="fa fa-circle-o"></i> Nuevo Saludo</a></li>
                                    <li><a href="consultarRedaccion.php"><i class="fa fa-circle-o"></i> Saludos Registrados</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-users"></i> <span>Dependencias</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="altaDependencia.php"><i class="fa fa-circle-o"></i> Nueva Dependencia</a></li>
                                    <li><a href="consultarDependencia.php"><i class="fa fa-circle-o"></i> Dependencias Registradas</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-comment"></i> <span>Notificaciones</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="consultarNotOficios.php"><i class="fa fa-circle-o"></i> Oficios</a></li>
                                    <li><a href="consultarNotRespuestas.php"><i class="fa fa-circle-o"></i> Respuestas</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-eye"></i> <span>Revisores</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="altaRevisor.php"><i class="fa fa-circle-o"></i> Nuevo Revisor</a></li>
                                    <li><a href="consultarRevisor.php"><i class="fa fa-circle-o"></i> Revisores Registrados</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-columns"></i> <span>Plantilla</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="consultarPlantilla.php"><i class="fa fa-circle-o"></i> Consultar</a></li>
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
                                        <h3 class="box-title">Panel de Administrador</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">                                                
                                            <div class="input-group input-group-sm col-md-8 col-md-offset-2">
                                                <br>
                                                <img src="images/iAdmin.png" width="100%">
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
