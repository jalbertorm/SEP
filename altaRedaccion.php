<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador") {
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
                            <li class="treeview active">
                                <a href="#">
                                    <i class="fa fa-file-text"></i> <span>Saludos (Oficio)</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="altaRedaccion.php"><i class="fa fa-circle-o"></i> Nuevo Saludo</a></li>
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
                                        <h3 class="box-title">Nuevo Saludo</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <form action="guardarRedaccion.php" method="POST">
                                        <div class="box-body">
                                            <div class="form-group col-md-6 col-md-offset-3">
                                                <label for="exampleInputEmail1">Propietario</label>
                                                <input type="text" class="form-control" name="propietario" id="propietario" placeholder="Propietario" required onkeypress="return limita(event, 36);" onkeyup="actualizaInfo(36)" />
                                                <div id="max"></div>
                                                <div id="rProp"></div>
                                            </div>
                                            <div class="form-group col-md-12 col-md-offset-0">
                                                <textarea placeholder="Redactar Saludo" name="texto" required				
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
                                                          border: 1px solid #dddddd; padding: 10px;" class="textareaRedaccion"
                                                          maxlength="3">

                                                </textarea>
                                                <div id="divAuxRedaccion"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxRedaccion" required>
                                                </div>
                                            </div>
                                        </div><!-- /.box-body -->
                                        <div class="box-footer text-right">
                                            <button type="reset" class="btn btn-default">Limpiar</button>
                                            &nbsp;
                                            <button type="submit" class="btn btn-default">Guardar</button>
                                        </div><!-- /.box-footer-->
                                        <div hidden="true">
                                            <input type="text" value="OK" id="inputAuxRedaccion2" required>
                                        </div>
                                    </form>
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
                    $('#propietario').blur(function () {

                        var propietario = $(this).val();
                        var dataString = 'propietario=' + propietario;

                        $.ajax({
                            type: "POST",
                            url: "buscarPropietario.php",
                            data: dataString,
                            success: function (data) {
                                $('#rProp').fadeIn(500).html(data);
                                var result = $.trim(data);
                                if (result == "<font style=' color: #CC0000'>El Propietario ya existe, intente nuevamente</font>") {
                                    $('#propietario').val("");
                                }
                            }
                        });
                    });
                });
            </script>

            <script type="text/javascript">
                function limita(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("propietario");

                    // Obtener la tecla pulsada 
                    var evento = elEvento || window.event;
                    var codigoCaracter = evento.charCode || evento.keyCode;
                    // Permitir utilizar las teclas con flecha horizontal
                    if (codigoCaracter == 37 || codigoCaracter == 39) {
                        return true;
                    }

                    // Permitir borrar con la tecla Backspace y con la tecla Supr.
                    if (codigoCaracter == 8 || codigoCaracter == 46) {
                        return true;
                    }
                    else if (elemento.value.length >= maximoCaracteres) {
                        return false;
                    }
                    else {
                        return true;
                    }
                }

                function actualizaInfo(maximoCaracteres) {
                    var elemento = document.getElementById("propietario");
                    var info = document.getElementById("max");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxRedaccion2").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxRedaccion2").val("OK");
                    }
                }

            </script>

        </body>
    </html>
    <?php
} else {
    redireccionar();
}
?>
