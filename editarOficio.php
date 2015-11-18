<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] = "normal" and $_GET) {
    $idOficio = $_GET ['idOficio'];
    $oficio = getOficio($idOficio);
    $plantilla = getPlantillaRobert();
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
                            <li class="treeview active">
                                <a href="#">
                                    <i class="fa fa-file-text"></i> <span>Oficios</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="generarOficio.php"><i class="fa fa-circle-o"></i> Redactar Oficio</a></li>
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
                            <div class="col-md-10 col-md-offset-1">
                                <!-- Default box -->
                                <div class="box box-solid box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Redactar Oficio</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <form action="guardarEOficio.php" method="post">
                                    <div class="box-body">

                                        
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <img src="<?php echo $plantilla['logo']; ?>" width="60%">
                                                </div>
                                                <div class="col-md-5">
                                                    <p style="font-size: 12px;"><?php echo $plantilla['encabezadoRn1']; ?></p>
                                                    <p style="font-weight: bold;"><?php echo $plantilla['encabezadoRn2']; ?></p>
                                                    <p style="font-weight: bold;"><?php echo $plantilla['encabezadoRn3']; ?></p>
                                                    <p style="font-weight: bold;"><?php echo $plantilla['encabezadoRn4']; ?></p>
                                                    <p style="font-weight: bold;"><?php echo $plantilla['encabezadoRn5']; ?></p>
                                                    <p style="font-weight: bold;"><?php echo $plantilla['encabezadoRn6']; ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <?php echo $plantilla['oficioNumero']; ?> /                                                     
                                                </div>
                                                <div class="col-md-2">
                                                    <?php echo $oficio['noOficio']; ?>
                                                    <input type="hidden" name="noOficio" value="<?php echo $oficio['noOficio']; ?>">
                                                    &nbsp;&nbsp;&nbsp;/
                                                </div>
                                                <div class="col-md-2">
                                                    <input value="<?php echo $oficio['anio']; ?>" id="anio" name="anio" style="width: 40px" type="text" onkeypress="return limitaanio(event, 5);" onkeyup="actualizaInfoanio(5)" required>
                                                    <div id="ranio"></div>
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxOficio2" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="text-align: right">
                                                        <?php echo $plantilla['lugar']; ?>
                                                        <input value="<?php echo $oficio['fecha']; ?>" name="fecha" id="fecha" type="text" required>
                                                        .
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?php comboDependencia(); ?>                                                    
                                                    <?php getDependenciaRobert() ?>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php comboRedaccion(); ?>                                                    
                                                    <?php getRedaccionRobert() ?>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><?php echo $plantilla['encabezadoCol1']; ?></label>
                                                        <input value="<?php echo $oficio['ciudadano']; ?>" type="text" class="form-control" name="ciudadano" id="ciudadano" placeholder="Ciudadano(a)" onkeypress="return limitaciudadano(event, 36);" onkeyup="actualizaInfociudadano(36)" required>
                                                        <div id="rciudadano"></div>
                                                        <div hidden="true">
                                                            <input type="text" value="OK" id="inputAuxOficio3" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><?php echo $plantilla['encabezadoCol2']; ?></label>
                                                        <textarea 
                                                            rows="6" cols="30" 
                                                            class="textarea" placeholder="Asunto"					
                                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
                                                            border: 1px solid #dddddd; padding: 10px;"
                                                            name="asunto" required><?php echo $oficio['asunto']; ?></textarea>
                                                        <div id="divAux"></div>
                                                        <div hidden="true">
                                                            <input type="text" value="OK" id="inputAux" required>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="text-justify">
                                                        <?php echo $plantilla['despedidaRn1']; ?>
                                                    </p>                    
                                                </div>  
                                            </div>


                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        <?php echo $plantilla['despedidaRn2']; ?><br>
                                                    </p>                    
                                                </div>  
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        <?php echo $plantilla['att']; ?><br>
                                                        <?php echo $plantilla['sloganAtt']; ?><br>
                                                    </p>                    
                                                </div>  
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p><b><big>¿Desea generar el oficio con firma?</big></b></p>
                                                    <input type="radio" name="conFirma" value="si" required> Si<br>
                                                    <input type="radio" name="conFirma" value="no"> No                  
                                                </div>  
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        <?php echo $plantilla['encargadoAtt']; ?><br>
                                                        <?php echo $plantilla['puestoAtt']; ?><br>
                                                    </p>                    
                                                </div>  
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 10px">
                                                        <?php
                                                        echo $plantilla['ccpRn1col1'] . " ";
                                                        echo $plantilla['ccpRn1col2'];
                                                        echo $plantilla['ccpRn1col3'];
                                                        ?><br>
                                                        <?php
                                                        echo $plantilla['ccpRn2col1'];
                                                        echo $plantilla['ccpRn2col2'];
                                                        ?>
                                                        <input value="<?php echo $oficio['referencia']; ?>" placeholder="Referencia" name="referencia" id="referencia" style="width: 150px" type="text" onkeypress="return limitareferencia(event, 31);" onkeyup="actualizaInforeferencia(31)" required> 
                                                        <div id="rreferencia"></div>
                                                    </p>                                                    
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxOficio4" required>
                                                    </div>
                                                </div>  
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 10px">
                                                        <?php
                                                        echo $plantilla['ccpRn3col1'];
                                                        echo $plantilla['ccpRn3col2'];
                                                        ?>
                                                        <br><?php echo $plantilla['rnFolio']; ?>
                                                        <input value="<?php echo $oficio['folio']; ?>" placeholder="Folio" name="folio" id="folio" style="width: 150px" type="text" onkeypress="return limitafolio(event, 31);" onkeyup="actualizaInfofolio(31)" required>
                                                    </p>
                                                    <div id="rfolio"></div>                                                   
                                                    <div hidden="true">
                                                        <input type="text" value="OK" id="inputAuxOficio5" required>
                                                    </div>
                                                </div>  
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 10px">
                                                        <?php echo $plantilla['ciudadanoCol1']; ?>
                                                        <input value="<?php echo $oficio['ciudadano']; ?>" placeholder="Ciudadano(a)" id="ciudadanoFooter" disabled style="width: 150px" type="text">
                                                        <?php echo $plantilla['ciudadanoCol2']; ?><br>
                                                        <?php echo $plantilla['ccpRn6']; ?>
                                                    </p>
                                                </div>  
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <p style="font-size: 10px">
                                                        <?php echo $plantilla['piePagRn1']; ?><br>
                                                        <?php echo $plantilla['piePagRn2']; ?>
                                                    </p>
                                                </div>  
                                            </div>

                                            <br>
                                            <br>

                                            <p><b><big>Datos de contacto del Ciudadano</big></b></p>
                                            
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input value="<?php echo $oficio['telCiudadano']; ?>" type="text" class="form-control" name="telCiudadano" id="telCiudadano" placeholder="Telefono: (722) 222-4444" onkeypress="return limitatelCiudadano (event, 15);" onkeyup="actualizaInfotelCiudadano (15)" required>
                                                        <div id="rtelCiudadano"></div>                                                   
                                                        <div hidden="true">
                                                            <input type="text" value="OK" id="inputAuxOficio6" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input value="<?php echo $oficio['mailCiudadano']; ?>" type="email" class="form-control" name="mailCiudadano" id="mailCiudadano" placeholder="Email: ejemplo@ejemplo.com" onkeypress="return limitamailCiudadano(event, 66);" onkeyup="actualizaInfomailCiudadano(66)" required>
                                                        <div id="rmailCiudadano"></div>                                                   
                                                        <div hidden="true">
                                                            <input type="text" value="OK" id="inputAuxOficio7" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-right">
                                        <a class="btn btn-default" href="consultarOficio.php"  onClick="return confirm('¿Está seguro que desea cancelar?, No se guardará ningún cambio!');">Cancelar</a>
                                        &nbsp;
                                        <button type="submit" class="btn btn-default">Guardar</button>
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

            <script>
                $(function () {
                <?php getRedaccionRobertScriptHide(); ?>
                $('#redaccion').change(function () {
                        <?php getRedaccionRobertScriptHide(); ?>
                switch ($('#redaccion').val()) {
                        <?php getRedaccionRobertScriptCase(); ?>
                        default:
                                <?php getRedaccionRobertScriptHide(); ?>
                }
                });
                });
            </script>

            <script>
                        $(document).ready(function () {
                $("#ciudadano").keyup(function () {
                var ciudadano = $('#ciudadano');
                        $('#ciudadanoFooter').val(ciudadano.val());
                });
                });</script>

            <script type="text/javascript" src="js/jquery-ui.js"></script>
            <script type="text/javascript">
                        $(document).ready(function () {
                $("#fecha").datepicker({
                dateFormat: "yy-mm-dd",
                        dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
                        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                        monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
                });
                });</script> 
            
            <script type="text/javascript">
                        $(document).ready(function () {
                $('#anio').numeric({decimal: false, negative: false});
                });
            </script>
            <script type="text/javascript">
                        $(document).ready(function () {
                $('#telCiudadano').numeric({decimal: false, negative: false});
                });
            </script>
            <script type="text/javascript">                
                function limitaanio(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("anio");
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
                function actualizaInfoanio(maximoCaracteres) {
                    var elemento = document.getElementById("anio");
                    var info = document.getElementById("ranio");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
			$("#inputAuxOficio2").val("");
                    }
                    else {
                        info.innerHTML = "";
			$("#inputAuxOficio2").val("OK");
                    }
                }
                
                function limitaciudadano(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("ciudadano");
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
                function actualizaInfociudadano(maximoCaracteres) {
                    var elemento = document.getElementById("ciudadano");
                    var info = document.getElementById("rciudadano");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
			$("#inputAuxOficio3").val("");
                    }
                    else {
                        info.innerHTML = "";
			$("#inputAuxOficio3").val("OK");
                    }
                }
                
                function limitareferencia(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("referencia");
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
                function actualizaInforeferencia(maximoCaracteres) {
                    var elemento = document.getElementById("referencia");
                    var info = document.getElementById("rreferencia");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
			$("#inputAuxOficio4").val("");
                    }
                    else {
                        info.innerHTML = "";
			$("#inputAuxOficio4").val("OK");
                    }
                }
                
                function limitafolio(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("folio");
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
                function actualizaInfofolio(maximoCaracteres) {
                    var elemento = document.getElementById("folio");
                    var info = document.getElementById("rfolio");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
			$("#inputAuxOficio5").val("");
                    }
                    else {
                        info.innerHTML = "";
			$("#inputAuxOficio5").val("OK");
                    }
                }
                
                function limitatelCiudadano(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("telCiudadano");
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
                function actualizaInfotelCiudadano(maximoCaracteres) {
                    var elemento = document.getElementById("telCiudadano");
                    var info = document.getElementById("rtelCiudadano");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
			$("#inputAuxOficio6").val("");
                    }
                    else {
                        info.innerHTML = "";
			$("#inputAuxOficio6").val("OK");
                    }
                }
                
                function limitamailCiudadano(elEvento, maximoCaracteres) {
                    var elemento = document.getElementById("mailCiudadano");
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
                function actualizaInfomailCiudadano(maximoCaracteres) {
                    var elemento = document.getElementById("mailCiudadano");
                    var info = document.getElementById("rmailCiudadano");

                    if (elemento.value.length >= maximoCaracteres) {
                        info.innerHTML = "<font style=' color: #CC0000'>Alcanzó el máximo número de caracteres permitido.</font>";
			$("#inputAuxOficio7").val("");
                    }
                    else {
                        info.innerHTML = "";
			$("#inputAuxOficio7").val("OK");
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
