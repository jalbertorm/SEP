<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] && $_GET and $_SESSION["Tipo_usuario"] = "normal") {
    $idOficio = __($_GET['idOficio']);
    $notificacionRespuesta = getRedNotificacionRespuestas();
    $mailCiudadano = getMailCiudadanoRespuestas($idOficio);
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
                            <div class="col-md-10 col-md-offset-1">
                                <!-- Default box -->
                                <div class="box box-solid box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Redactar Respuesta</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <form action="guardarRespuesta.php" method="post" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email: </label>
                                                <br>
                                                <?php echo $mailCiudadano['mailCiudadano']; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email Adicional (opcional): </label>
                                                <br>
                                                <input type="text" class="form-control" id="mailOpcional" name="mailOpcional"  placeholder="ejemplo@ejemplo.com (opcional)" onkeypress="return limitaMailAdicional(event, 65);" onkeyup="actualizaInfoMailAdicional(65)">
                                                <div id="rMailAdicional"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxMailAdicional" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" id="idOficio" name="idOficio" value="<?php echo $idOficio; ?>">
                                                <label for="exampleInputEmail1">Asunto: </label>
                                                <input type="text" class="form-control" id="asunto" name="asunto"  placeholder="Asunto" required onkeypress="return limitaAsunto(event, 65);" onkeyup="actualizaInfoAsunto(65)">
                                                <div id="rAsunto"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxAsunto" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Menjase: </label>
                                                <br>
                                                <?php echo $notificacionRespuesta['redaccionRespuestas']; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Adjuntar Respuesta: </label>
                                                <input type="file"  name="imagen"  required/>
                                            </div>
                                            <label for="exampleInputEmail1">Redacción Adicional: </label>
                                            <textarea placeholder="Redactar Respuesta" name="redaccion" required				
                                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
                                                      border: 1px solid #dddddd; padding: 10px;" class="textareaResp"
                                                      maxlength="3"></textarea>
                                            <div id="divAux"></div>
                                            <div hidden="true">
                                                <input type="text" value="OK" id="inputAux" required>
                                            </div>
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
            <script type="text/javascript">
                function limitaMailAdicional(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("mailOpcional");
                    var evento = elEvento || window.event;
                    var codigoCaracter = evento.charCode || evento.keyCode;
                    if (codigoCaracter == 37 || codigoCaracter == 39) {
                        return true;
                    }
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
                function actualizaInfoMailAdicional(maximoCaracteres) {
                    var elemento = document.getElementById("mailOpcional");
                    var info = document.getElementById("rMailAdicional");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxMailAdicional").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxMailAdicional").val("OK");
                    }
                }
                
                function limitaAsunto(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("asunto");
                    var evento = elEvento || window.event;
                    var codigoCaracter = evento.charCode || evento.keyCode;
                    if (codigoCaracter == 37 || codigoCaracter == 39) {
                        return true;
                    }
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
                function actualizaInfoAsunto(maximoCaracteres) {
                    var elemento = document.getElementById("asunto");
                    var info = document.getElementById("rAsunto");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxAsunto").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxAsunto").val("OK");
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