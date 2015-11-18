<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador" and $_GET) {
    $id = $_GET['id'];
    $datos = getDependencia($id);
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
                                        <h3 class="box-title">Editar Dependencia</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <form action="guardarEDependencia.php" method="POST">
                                        <div class="box-body">
                                            <div class="form-group col-md-6 col-md-offset-3">
                                                <label for="exampleInputEmail1">Renglón 1</label>
                                                <input value="<?php echo $datos['titulo'] ?>" type="text" class="form-control" name="Rn1" id="Rn1" placeholder="Escriba aquí" required onkeypress="return limitaRn1(event, 36);" onkeyup="actualizaInfoRn1(36)" />
                                                <div id="maxRn1"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxDependencia" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3">
                                                <label for="exampleInputEmail1">Renglón 2</label>
                                                <input value="<?php echo $datos['nombre'] ?>" type="text" class="form-control" name="Rn2" id="Rn2" placeholder="Escriba aquí" required onkeypress="return limitaRn2(event, 36);" onkeyup="actualizaInfoRn2(36)" />
                                                <div id="maxRn2"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxDependencia2" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3">
                                                <label for="exampleInputEmail1">Renglón 3</label>
                                                <input value="<?php echo $datos['puestoRn1'] ?>" type="text" class="form-control" name="Rn3" id="Rn3" placeholder="Escriba aquí" required onkeypress="return limitaRn3(event, 46);" onkeyup="actualizaInfoRn3(46)" />
                                                <div id="maxRn3"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxDependencia3" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3">
                                                <label for="exampleInputEmail1">Renglón 4</label>
                                                <input value="<?php echo $datos['puestoRn2'] ?>" type="text" class="form-control" name="Rn4" id="Rn4" placeholder="Escriba aquí" required onkeypress="return limitaRn4(event, 36);" onkeyup="actualizaInfoRn4(36)" />
                                                <div id="maxRn4"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxDependencia4" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3">
                                                <label for="exampleInputEmail1">Renglón 5</label>
                                                <input value="<?php echo $datos['rnPresente'] ?>" type="text" class="form-control" name="Rn5" id="Rn5" placeholder="Escriba aquí" required onkeypress="return limitaRn5(event, 11);" onkeyup="actualizaInfoRn5(11)" />
                                                <div id="maxRn5"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxDependencia5" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3">
                                                <label for="exampleInputEmail1">Correo Electrónico Dependencia</label>
                                                <input value="<?php echo $datos['correo'] ?>" type="email" class="form-control" name="mail" id="mail" placeholder="Correo Electrónico" required onkeypress="return limitaMail(event, 66);" onkeyup="actualizaInfoMail(66)" />
                                                <div id="maxMail"></div>
                                                <div id="rMail"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxDependencia6" required>
                                                </div>
                                            </div>
                                        </div><!-- /.box-body -->
                                        <div class="box-footer text-right">
                                            <a class="btn btn-default" href="consultarDependencia.php"  onClick="return confirm('¿Está seguro que desea cancelar?, No se guardará ningún cambio!');">Cancelar</a>
                                            &nbsp;
                                            <button type="submit" class="btn btn-default">Guardar</button>
                                        </div><!-- /.box-footer-->
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                    $('#mail').blur(function () {

                        var mail = $(this).val();
                        var dataString = 'mail=' + mail;

                        $.ajax({
                            type: "POST",
                            url: "buscarMail.php",
                            data: dataString,
                            success: function (data) {
                                $('#rMail').fadeIn(500).html(data);
                                var result = $.trim(data);
                                if (result == "<font style=' color: #CC0000'>El correo electrónico ya existe, intente nuevamente</font>") {
                                    $('#mail').val("");
                                }
                            }
                        });
                    });
                });
            </script>
            
            <script type="text/javascript">
                function limitaRn1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("Rn1");

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

                function actualizaInfoRn1(maximoCaracteres) {
                    var elemento = document.getElementById("Rn1");
                    var info = document.getElementById("maxRn1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxDependencia").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxDependencia").val("OK");
                    }
                }
                
                function limitaRn2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("Rn2");

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

                function actualizaInfoRn2(maximoCaracteres) {
                    var elemento = document.getElementById("Rn2");
                    var info = document.getElementById("maxRn2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxDependencia2").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxDependencia2").val("OK");
                    }
                }
                
                function limitaRn3(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("Rn3");

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

                function actualizaInfoRn3(maximoCaracteres) {
                    var elemento = document.getElementById("Rn3");
                    var info = document.getElementById("maxRn3");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxDependencia3").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxDependencia3").val("OK");
                    }
                }
                
                function limitaRn4(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("Rn4");

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

                function actualizaInfoRn4(maximoCaracteres) {
                    var elemento = document.getElementById("Rn4");
                    var info = document.getElementById("maxRn4");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxDependencia4").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxDependencia4").val("OK");
                    }
                }
                
                function limitaRn5(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("Rn5");

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

                function actualizaInfoRn5(maximoCaracteres) {
                    var elemento = document.getElementById("Rn5");
                    var info = document.getElementById("maxRn5");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxDependencia4").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxDependencia4").val("OK");
                    }
                }
                
                function limitaMail(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("mail");

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

                function actualizaInfoMail(maximoCaracteres) {
                    var elemento = document.getElementById("mail");
                    var info = document.getElementById("maxMail");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxDependencia4").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxDependencia4").val("OK");
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
