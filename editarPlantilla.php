<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador" and $_GET) {
    $id = $_GET['id'];
    $datos = getPlantilla($id);
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
                            <div class="col-md-12 col-md-offset-0">
                                <!-- Default box -->
                                <div class="box box-solid box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Editar Plantilla</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <form action="guardarEPlantilla.php" method="POST" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <img src="<?php echo $datos['logo']; ?>" width="30%">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="encabezadoRn1" id="encabezadoRn1" value="<?php echo $datos['encabezadoRn1']; ?>" onkeypress="return limitaencabezadoRn1(event, 66);" onkeyup="actualizaInfoencabezadoRn1(66)" required />
                                                    <div id="rencabezadoRn1"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="file" class="form-control" name="logo" id="logo" />
                                                    <input type="hidden" name="auxNombreLogo" value="logo">
                                                    <div id="rlogo"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="encabezadoRn2" id="encabezadoRn2" value="<?php echo $datos['encabezadoRn2']; ?>" onkeypress="return limitaencabezadoRn2(event, 41);" onkeyup="actualizaInfoencabezadoRn2(41)" required />
                                                    <div id="rencabezadoRn2"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla2" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 pull-right">
                                                <input type="text" class="form-control" name="encabezadoRn3" id="encabezadoRn3" value="<?php echo $datos['encabezadoRn3']; ?>" onkeypress="return limitaencabezadoRn3(event, 52);" onkeyup="actualizaInfoencabezadoRn3(52)" required />
                                                <div id="rencabezadoRn3"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla3" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 pull-right">
                                                <input type="text" class="form-control" name="encabezadoRn4" id="encabezadoRn4" value="<?php echo $datos['encabezadoRn4']; ?>" onkeypress="return limitaencabezadoRn4(event, 52);" onkeyup="actualizaInfoencabezadoRn4(52)" required />
                                                <div id="rencabezadoRn4"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla4" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 pull-right">
                                                <input type="text" class="form-control" name="encabezadoRn5" id="encabezadoRn5" value="<?php echo $datos['encabezadoRn5']; ?>" onkeypress="return limitaencabezadoRn5(event, 52);" onkeyup="actualizaInfoencabezadoRn5(52)" required />
                                                <div id="rencabezadoRn5"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla5" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 pull-right">
                                                <input type="text" class="form-control" name="encabezadoRn6" id="encabezadoRn6" value="<?php echo $datos['encabezadoRn6']; ?>" onkeypress="return limitaencabezadoRn6(event, 52);" onkeyup="actualizaInfoencabezadoRn6(52)" required />
                                                <div id="rencabezadoRn6"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla6" required>
                                                </div>
                                            </div>
                                            <!-- ==================================================================================================== -->
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <input type="text" class="form-control" name="oficioNumero" id="oficioNumero" value="<?php echo $datos['oficioNumero']; ?>" onkeypress="return limitaoficioNumero(event, 28);" onkeyup="actualizaInfooficioNumero(28)" required />
                                                <div id="roficioNumero"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla7" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 pull-right">
                                                <input type="text" class="form-control" name="lugar" id="lugar" value="<?php echo $datos['lugar']; ?>" onkeypress="return limitalugar(event, 18);" onkeyup="actualizaInfolugar(18)" required />
                                                <div id="rlugar"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla8" required>
                                                </div>
                                            </div>
                                            <!-- ==================================================================================================== -->
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="encabezadoCol1" id="encabezadoCol1" value="<?php echo $datos['encabezadoCol1']; ?>" onkeypress="return limitaencabezadoCol1(event, 16);" onkeyup="actualizaInfoencabezadoCol1(16)" required />
                                                    <div id="rencabezadoCol1"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla9" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" name="encabezadoCol2" id="encabezadoCol2" value="<?php echo $datos['encabezadoCol2']; ?>" onkeypress="return limitaencabezadoCol2(event, 21);" onkeyup="actualizaInfoencabezadoCol2(21)" required />
                                                    <div id="rencabezadoCol2"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla10" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ==================================================================================================== -->
                                            <div class="form-group col-md-12 col-md-offset-0">
                                                <textarea name="despedidaRn1" id="despedidaRn1" class="form-control" onkeypress="return limitadespedidaRn1(event, 280);" onkeyup="actualizaInfodespedidaRn1(280)"><?php echo $datos['despedidaRn1']; ?></textarea>
                                                <div id="rdespedidaRn1"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla11" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <input type="text" class="form-control" name="despedidaRn2" id="despedidaRn2" value="<?php echo $datos['despedidaRn2']; ?>" onkeypress="return limitadespedidaRn2(event, 91);" onkeyup="actualizaInfodespedidaRn2(91)" required />
                                                <div id="rdespedidaRn2"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla12" required>
                                                </div>
                                            </div>
                                            <!-- ==================================================================================================== -->
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <input type="text" class="form-control" name="att" id="att" value="<?php echo $datos['att']; ?>" required onkeypress="return limitaatt(event, 31);" onkeyup="actualizaInfoatt(31)" />
                                                <div id="ratt"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla13" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <input type="text" class="form-control" name="sloganAtt" id="sloganAtt" value="<?php echo $datos['sloganAtt']; ?>" onkeypress="return limitasloganAtt(event, 51);" onkeyup="actualizaInfosloganAtt(51)" required />
                                                <div id="rsloganAtt"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla14" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <img src="<?php echo $datos['firma']; ?>" width="20%">
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <input type="file" class="form-control" name="firma" id="firma" />
                                                <input type="hidden" name="auxNombreFirma" value="firma">
                                                <div id="rfirma"></div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <input type="text" class="form-control" name="encargadoAtt" id="encargadoAtt" value="<?php echo $datos['encargadoAtt']; ?>" onkeypress="return limitaencargadoAtt(event, 51);" onkeyup="actualizaInfoencargadoAtt(51)" required />
                                                <div id="rencargadoAtt"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla15" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-md-offset-3 margin">
                                                <input type="text" class="form-control" name="puestoAtt" id="puestoAtt" value="<?php echo $datos['puestoAtt']; ?>" onkeypress="return limitapuestoAtt(event, 31);" onkeyup="actualizaInfopuestoAtt(31)" required />
                                                <div id="rpuestoAtt"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla16" required>
                                                </div>
                                            </div>
                                            <!-- ==================================================================================================== -->
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="ccpRn1col1" id="ccpRn1col1" value="<?php echo $datos['ccpRn1col1']; ?>" onkeypress="return limitaccpRn1col1(event, 11);" onkeyup="actualizaInfoccpRn1col1(11)" required />
                                                    <div id="rccpRn1col1"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla17" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="ccpRn1col2" id="ccpRn1col2" value="<?php echo $datos['ccpRn1col2']; ?>" onkeypress="return limitaccpRn1col2(event, 51);" onkeyup="actualizaInfoccpRn1col2(51)" required />
                                                    <div id="rccpRn1col2"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla18" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control" name="ccpRn1col3" id="ccpRn1col3" value="<?php echo $datos['ccpRn1col3']; ?>" onkeypress="return limitaccpRn1col3(event, 131);" onkeyup="actualizaInfoccpRn1col3(131)" required />
                                                    <div id="rccpRn1col3"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla19" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="ccpRn2col1" id="ccpRn2col1" value="<?php echo $datos['ccpRn2col1']; ?>" onkeypress="return limitaccpRn2col1(event, 51);" onkeyup="actualizaInfoccpRn2col1(51)" required />
                                                    <div id="rccpRn2col1"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla20" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control" name="ccpRn2col2" id="ccpRn2col2" value="<?php echo $datos['ccpRn2col2']; ?>" onkeypress="return limitaccpRn2col2(event, 131);" onkeyup="actualizaInfoccpRn2col2(131)" required />
                                                    <div id="rccpRn2col2"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla21" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="ccpRn3col1" id="ccpRn3col1" value="<?php echo $datos['ccpRn3col1']; ?>" onkeypress="return limitaccpRn3col1(event, 51);" onkeyup="actualizaInfoccpRn3col1(51)" required />
                                                    <div id="rccpRn3col1"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla22" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control" name="ccpRn3col2" id="ccpRn3col2" value="<?php echo $datos['ccpRn3col2']; ?>" onkeypress="return limitaccpRn3col2(event, 131);" onkeyup="actualizaInfoccpRn3col2(131)" required />
                                                    <div id="rccpRn3col2"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla23" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="rnFolio" id="rnFolio" value="<?php echo $datos['rnFolio']; ?>" onkeypress="return limitarnFolio(event, 11);" onkeyup="actualizaInfornFolio(11)" required />
                                                    <div id="rrnFolio"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla24" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="ciudadanoCol1" id="ciudadanoCol1" value="<?php echo $datos['ciudadanoCol1']; ?>" onkeypress="return limitaciudadanoCol1(event, 11);" onkeyup="actualizaInfociudadanoCol1(11)" required />
                                                    <div id="rciudadanoCol1"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla25" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <p>Nombre de Ciudadano</p>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="ciudadanoCol2" id="ciudadanoCol2" value="<?php echo $datos['ciudadanoCol2']; ?>" onkeypress="return limitaciudadanoCol2(event, 21);" onkeyup="actualizaInfociudadanoCol2(21)" required />
                                                    <div id="rciudadanoCol2"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla26" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <input type="text" class="form-control" name="ccpRn6" id="ccpRn6" value="<?php echo $datos['ccpRn6']; ?>" onkeypress="return limitaccpRn6(event, 26);" onkeyup="actualizaInfoccpRn6(26)" required />
                                                    <div id="rccpRn6"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxPlantilla27" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ==================================================================================================== -->
                                            <div class="clearfix"></div>
                                            <div class="form-group col-md-12 col-md-offset-0">
                                                <input type="text" class="form-control" name="piePagRn1" id="piePagRn1" value="<?php echo $datos['piePagRn1']; ?>" onkeypress="return limitapiePagRn1(event, 141);" onkeyup="actualizaInfopiePagRn1(141)" required />
                                                <div id="rpiePagRn1"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla28" required>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group col-md-10 col-md-offset-1">
                                                <input type="text" class="form-control" name="piePagRn2" id="piePagRn2" value="<?php echo $datos['piePagRn2']; ?>" onkeypress="return limitapiePagRn2(event, 131);" onkeyup="actualizaInfopiePagRn2(131)" required />
                                                <div id="rpiePagRn2"></div>
                                                <div hidden="true">
                                                    <input type="text" value="OK" id="inputAuxPlantilla29" required>
                                                </div>
                                            </div>
                                        </div><!-- /.box-body -->
                                        <div class="box-footer text-right">
                                            <a class="btn btn-default" href="consultarPlantilla.php"  onClick="return confirm('¿Está seguro que desea cancelar?, No se guardará ningún cambio!');">Cancelar</a>
                                            &nbsp;
                                            <button type="submit" class="btn btn-default">Guardar</button>
                                        </div><!-- /.box-footer-->
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
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
                function limitaencabezadoRn1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn1");
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
                function actualizaInfoencabezadoRn1(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn1");
                    var info = document.getElementById("rencabezadoRn1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla").val("OK");
                    }
                }

                function limitaencabezadoRn2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn2");
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
                function actualizaInfoencabezadoRn2(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn2");
                    var info = document.getElementById("rencabezadoRn2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla2").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla2").val("OK");
                    }
                }

                function limitaencabezadoRn3(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn3");
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
                function actualizaInfoencabezadoRn3(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn3");
                    var info = document.getElementById("rencabezadoRn3");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla3").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla3").val("OK");
                    }
                }

                function limitaencabezadoRn4(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn4");
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
                function actualizaInfoencabezadoRn4(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn4");
                    var info = document.getElementById("rencabezadoRn4");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla4").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla4").val("OK");
                    }
                }

                function limitaencabezadoRn5(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn5");
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
                function actualizaInfoencabezadoRn5(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn5");
                    var info = document.getElementById("rencabezadoRn5");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla5").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla5").val("OK");
                    }
                }

                function limitaencabezadoRn6(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn6");
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
                function actualizaInfoencabezadoRn6(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoRn6");
                    var info = document.getElementById("rencabezadoRn6");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla6").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla6").val("OK");
                    }
                }

                function limitaoficioNumero(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("oficioNumero");
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
                function actualizaInfooficioNumero(maximoCaracteres) {
                    var elemento = document.getElementById("oficioNumero");
                    var info = document.getElementById("roficioNumero");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla7").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla7").val("OK");
                    }
                }

                function limitalugar(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("lugar");
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
                function actualizaInfolugar(maximoCaracteres) {
                    var elemento = document.getElementById("lugar");
                    var info = document.getElementById("rlugar");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla8").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla8").val("OK");
                    }
                }

                function limitaencabezadoCol1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoCol1");
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
                function actualizaInfoencabezadoCol1(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoCol1");
                    var info = document.getElementById("rencabezadoCol1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla9").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla9").val("OK");
                    }
                }

                function limitaencabezadoCol2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoCol2");
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
                function actualizaInfoencabezadoCol2(maximoCaracteres) {
                    var elemento = document.getElementById("encabezadoCol2");
                    var info = document.getElementById("rencabezadoCol2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla10").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla10").val("OK");
                    }
                }

                function limitadespedidaRn1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("despedidaRn1");
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
                function actualizaInfodespedidaRn1(maximoCaracteres) {
                    var elemento = document.getElementById("despedidaRn1");
                    var info = document.getElementById("rdespedidaRn1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla11").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla11").val("OK");
                    }
                }

                function limitadespedidaRn2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("despedidaRn2");
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
                function actualizaInfodespedidaRn2(maximoCaracteres) {
                    var elemento = document.getElementById("despedidaRn2");
                    var info = document.getElementById("rdespedidaRn2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla12").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla12").val("OK");
                    }
                }

                function limitaatt(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("att");
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
                function actualizaInfoatt(maximoCaracteres) {
                    var elemento = document.getElementById("att");
                    var info = document.getElementById("ratt");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla13").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla13").val("OK");
                    }
                }

                function limitasloganAtt(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("sloganAtt");
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
                function actualizaInfosloganAtt(maximoCaracteres) {
                    var elemento = document.getElementById("sloganAtt");
                    var info = document.getElementById("rsloganAtt");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla14").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla14").val("OK");
                    }
                }

                function limitaencargadoAtt(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("encargadoAtt");
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
                function actualizaInfoencargadoAtt(maximoCaracteres) {
                    var elemento = document.getElementById("encargadoAtt");
                    var info = document.getElementById("rencargadoAtt");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla15").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla15").val("OK");
                    }
                }

                function limitapuestoAtt(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("puestoAtt");
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
                function actualizaInfopuestoAtt(maximoCaracteres) {
                    var elemento = document.getElementById("puestoAtt");
                    var info = document.getElementById("rpuestoAtt");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla16").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla16").val("OK");
                    }
                }

                function limitaccpRn1col1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn1col1");
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
                function actualizaInfoccpRn1col1(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn1col1");
                    var info = document.getElementById("rccpRn1col1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla17").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla17").val("OK");
                    }
                }

                function limitaccpRn1col2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn1col2");
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
                function actualizaInfoccpRn1col2(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn1col2");
                    var info = document.getElementById("rccpRn1col2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla18").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla18").val("OK");
                    }
                }

                function limitaccpRn1col3(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn1col3");
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
                function actualizaInfoccpRn1col3(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn1col3");
                    var info = document.getElementById("rccpRn1col3");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla19").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla19").val("OK");
                    }
                }

                function limitaccpRn2col1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn2col1");
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
                function actualizaInfoccpRn2col1(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn2col1");
                    var info = document.getElementById("rccpRn2col1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla20").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla20").val("OK");
                    }
                }

                function limitaccpRn2col2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn2col2");
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
                function actualizaInfoccpRn2col2(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn2col2");
                    var info = document.getElementById("rccpRn2col2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla21").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla21").val("OK");
                    }
                }

                function limitaccpRn3col1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn3col1");
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
                function actualizaInfoccpRn3col1(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn3col1");
                    var info = document.getElementById("rccpRn3col1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla22").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla22").val("OK");
                    }
                }

                function limitaccpRn3col2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn3col2");
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
                function actualizaInfoccpRn3col2(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn3col2");
                    var info = document.getElementById("rccpRn3col2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla23").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla23").val("OK");
                    }
                }

                function limitarnFolio(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("rnFolio");
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
                function actualizaInfornFolio(maximoCaracteres) {
                    var elemento = document.getElementById("rnFolio");
                    var info = document.getElementById("rrnFolio");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla24").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla24").val("OK");
                    }
                }

                function limitaciudadanoCol1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ciudadanoCol1");
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
                function actualizaInfociudadanoCol1(maximoCaracteres) {
                    var elemento = document.getElementById("ciudadanoCol1");
                    var info = document.getElementById("rciudadanoCol1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla25").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla25").val("OK");
                    }
                }

                function limitaciudadanoCol2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ciudadanoCol2");
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
                function actualizaInfociudadanoCol2(maximoCaracteres) {
                    var elemento = document.getElementById("ciudadanoCol2");
                    var info = document.getElementById("rciudadanoCol2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla26").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla26").val("OK");
                    }
                }

                function limitaccpRn6(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn6");
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
                function actualizaInfoccpRn6(maximoCaracteres) {
                    var elemento = document.getElementById("ccpRn6");
                    var info = document.getElementById("rccpRn6");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla27").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla27").val("OK");
                    }
                }

                function limitapiePagRn1(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("piePagRn1");
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
                function actualizaInfopiePagRn1(maximoCaracteres) {
                    var elemento = document.getElementById("piePagRn1");
                    var info = document.getElementById("rpiePagRn1");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla28").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla28").val("OK");
                    }
                }

                function limitapiePagRn2(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("piePagRn2");
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
                function actualizaInfopiePagRn2(maximoCaracteres) {
                    var elemento = document.getElementById("piePagRn2");
                    var info = document.getElementById("rpiePagRn2");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
                        $("#inputAuxPlantilla29").val("");
                    }
                    else {
                        info.innerHTML = "";
                        $("#inputAuxPlantilla29").val("OK");
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
