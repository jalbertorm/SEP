<?php
session_start();
include("sources/funciones.php");
if ($_SESSION["Activa"]) {
    ?>
    <!--ESTE ARCHIVO ES EL FORMULARIO PARA EL PDF-->
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
                                    <li><a href="consultarOficio.php"><i class="fa fa-circle-o"></i> Oficios Enviados</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-envelope"></i> <span>Respuestas</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="generarRespuesta.php"><i class="fa fa-circle-o"></i> Redactar Respuesta</a></li>
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
                                    <div class="box-body">

                                        <form action="guardarOficio.php" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="images/oficioHeader.PNG" width="100%">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        Oficio número SEP / DFSEPMEX / 
                                                        <input name="noOficio" style="width: 40px" type="text" required>
                                                        /
                                                        <input name="ano" style="width: 40px" type="text" required>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="text-align: right">
                                                        Toluca, México.,
                                                        <input name="fecha" id="fecha" type="text" required>
                                                        .
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select class="form-control" name="destinatario" id="destinatario" required>
                                                        <option value="">Seleccione Dependencia</option>
                                                        <option value="SECRETARIO DE EDUCACIÓN DEL GOBIERNO DEL ESTADO DE MÉXICO">
                                                            SECRETARIO DE EDUCACIÓN DEL GOBIERNO DEL ESTADO DE MÉXICO
                                                        </option>
                                                        <option value="REPRESENTANTE DE LA SUBSECRETARIA DE EDUCACIÓN MEDIA SUPERIOR EN EL ESTADO DE MÉXCO">
                                                            REPRESENTANTE DE LA SUBSECRETARIA DE EDUCACIÓN MEDIA SUPERIOR EN EL ESTADO DE MÉXCO
                                                        </option>
                                                        <option value="SECRETARIO DE CULTURA Y DEPORTE DEL GOBIERNO DEL ESTADO DE MÉXICO">
                                                            SECRETARIO DE CULTURA Y DEPORTE DEL GOBIERNO DEL ESTADO DE MÉXICO
                                                        </option>
                                                        <option value="DIRECTOR GENERAL DE LOS SERVICIOS EDUCATIVOS INTEGRADOS AL ESTADO DE MÉXICO">
                                                            DIRECTOR GENERAL DE LOS SERVICIOS EDUCATIVOS INTEGRADOS AL ESTADO DE MÉXICO
                                                        </option>
                                                        <option value="otro">OTRO</option>
                                                    </select>

                                                    <p id="secEduca">
                                                        <br>
                                                        INGENIERO<br>
                                                        SIMÓN IVÁN VILLAR MARTÍNEZ<br>
                                                        SECRETARIO DE EDUCACIÓN DEL<br>
                                                        GOBIERNO DEL ESTADO DE MÉXICO<br>
                                                        PRESENTE
                                                    </p>
                                                    <p id="servEduca">
                                                        <br>
                                                        INGENIERO<br>
                                                        CARLOS AURIEL ESTÉVEZ HERRERA<br>
                                                        DIRECTOR GENERAL DE LOS SERVICIOS EDUCATIVOS<br>
                                                        INTEGRADOS AL ESTADO DE MÉXICO<br>
                                                        PRESENTE
                                                    </p>
                                                    <p id="secMSup">
                                                        <br>
                                                        DRA. CLAUDIA MAGDALENA RIOS PEÑA<br>
                                                        REPRESENTANTE DE LA SUBSECRETARIA<br>
                                                        DE EDUCACIÓN MEDIA SUPERIOR EN EL <br>
                                                        ESTADO DE MÉXICO<br>
                                                        PRESENTE
                                                    </p>
                                                    <p id="secCulDep">
                                                        <br>
                                                        DR. EN C.<br>
                                                        EDUARDO GASCA PLIEGO<br>
                                                        SECRETARIO DE CULTURA Y DEPORTE<br>
                                                        DEL GOBIERNO DEL ESTADO DE MÉXICO<br>
                                                        PRESENTE
                                                    </p>
                                                    <div id="otro">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="puesto" id="puesto" placeholder="Puesto">
                                                        </div>
                                                        PRESENTE
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select name="redaccion" class="form-control" id="redaccion"required>
                                                        <option value="">Seleccione Remitente</option>    
                                                        <option value="Anteponiendo un cordial saludo, me permito remitir a Usted,  petición formulada al Lic. Enrique Peña Nieto, Presidente Constitucional de los Estados Unidos  Mexicanos, enviada a esta Delegación por la Coordinación de atención Ciudadana de la Secretaría de Educación Pública Cual se detalla a continuación:">
                                                            Lic. Enrique Peña Nieto
                                                        </option>

                                                        <option value="Anteponiendo un cordial saludo, me permito remitir a Usted, petición formulada al Lic. Emilio Cuayffet Chemor, Secretario de Educación Pública, misma que se detalla a continuación:">
                                                            Lic. Emilio Emilio Chuayffet Chemor
                                                        </option>
                                                    </select>
                                                    <p id="LicEnrique" class="text-justify">
                                                        <br>
                                                        Anteponiendo un cordial saludo, me permito remitir a Usted,  petición formulada al Lic. Enrique
                                                        Peña Nieto, Presidente Constitucional de los Estados Unidos  Mexicanos, enviada a esta
                                                        Delegación por la Coordinación de atención Ciudadana de la Secretaría de Educación Pública, la
                                                        Cual se detalla a continuación:
                                                    </p>
                                                    <p id="LicEmilio" class="text-justify">
                                                        <br>
                                                        Anteponiendo un cordial saludo, me permito remitir a Usted, petición formulada al Lic. Emilio
                                                        Cuayffet Chemor, Secretario de Educación Pública, misma que se detalla a continuación:
                                                    </p>
                                                </div>
                                            </div>


                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="ciudadano" id="ciudadano" placeholder="Ciudadano(a)" required>
                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="telCiudadano" id="telCiudadano" placeholder="Telefono: (722) 222-4444" required>
                                                    </div>
                                                </div>
                                            </div>



                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="mailCiudadano" id="mailCiudadano" placeholder="Email: ejemplo@ejemplo.com" required>
                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            <div class="row" id="renglon1">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="mail1" id="mail1" placeholder="Email: ejemplo@ejemplo.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="mail2" id="mail2" placeholder="Email: ejemplo@ejemplo.com">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row" id="renglon2">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="mail3" id="mail3" placeholder="Email: ejemplo@ejemplo.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="mail4" id="mail4" placeholder="Email: ejemplo@ejemplo.com">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row" id="boton1">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button id="hide">Agregar Emails</button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row" id="boton2">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button id="hide">Agregar mas Emails</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        
                                                        <div id="info">Puede escribir Maximo 100 caracteres</div>
                                                        <textarea 
                                                                  rows="6" cols="30" 
                                                                  class="textarea" placeholder="Asunto" maxlength="50"					
                                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
                                                                  border: 1px solid #dddddd; padding: 10px;"
                                                                  name="asunto" required></textarea>
                                                    </div>
                                                </div>  
                                            </div>


                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="text-justify">
                                                        Por lo anterior, solicito de no existir inconveniente, gire sus amables instrucciones al área 
                                                        Correspondiente a fin de brindar la atención que proceda a dicho requerimiento, rogando 
                                                        Respetuosamente sea tan gentil de enviar a esta Delegación el seguimiento del presente asunto.
                                                    </p>                    
                                                </div>  
                                            </div>


                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        Sin otra particular, me retiro a sus órdenes.<br>
                                                    </p>                    
                                                </div>  
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        ATENTAMENTE<br>
                                                        SUFRAGIO EFECTIVO. NO RELECCIÓN<br>
                                                    </p>                    
                                                </div>  
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        MTRO. GUILLERMO LEGORRETA MAETÍNEZ<br>
                                                        DELEGADO<br>
                                                    </p>                    
                                                </div>  
                                            </div>


                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 10px">
                                                        C.C.P Lic. Rubén Jesús Lara León.-  Coordinador General de Delegaciones Federales de la Secretaria de Educación pública.- Presente.<br>
                                                        Lic. Miguel Salcedo Hernández.-   Coordinador General de Atención Ciudadano(a).-
                                                        <input placeholder="Referencia" name="referencia" style="width: 150px" type="text"required> 
                                                    </p>                    
                                                </div>  
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 10px">
                                                        Lic. Edgar Israel Gutiérrez Paredes.- Jefe del Departamento de Vinculación y Apoyo institucional de la coordinación General de Delegaciones Federales.- SEP
                                                        <br>Folio: 
                                                        <input placeholder="Folio" name="folio" style="width: 150px" type="text" required>
                                                    </p>                    
                                                </div>  
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p style="font-size: 10px">
                                                        C.
                                                        <input placeholder="Ciudadano(a)" id="ciudadanoFooter" style="width: 150px" type="text"><br>
                                                        GLM/arll*
                                                    </p>
                                                </div>  
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <p style="font-size: 10px">
                                                        Av. Dr. Nicolás San Juan S/N, Parque administrativo Cuauhtémoc, Col. Ex Hacienda La Magdalena, Toluca Estado de México, CP 50010.
                                                        Teléfono: 01 (722) 272-94-70, delegación.mex@nube.sep.gob.mx  www.sep.gob.mx
                                                    </p>
                                                </div>  
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

            <script>
                $(function () {
                    $('#secEduca').hide();
                    $('#servEduca').hide();
                    $('#secMSup').hide();
                    $('#secCulDep').hide();
                    $('#otro').hide();
                    $('#destinatario').change(function () {
                        switch ($('#destinatario').val()) {
                            case 'SECRETARIO DE EDUCACIÓN DEL GOBIERNO DEL ESTADO DE MÉXICO':
                                $('#secEduca').show();
                                $('#servEduca').hide();
                                $('#secMSup').hide();
                                $('#secCulDep').hide();
                                $('#otro').hide();
                                $('#titulo').val('INGENIERO');
                                $('#nombre').val('SIMÓN IVÁN VILLAR MARTÍNEZ');
                                $('#puesto').val('SECRETARIO DE EDUCACIÓN DEL<br> GOBIERNO DEL ESTADO DE MÉXICO<br>');
                                break;
                            case 'REPRESENTANTE DE LA SUBSECRETARIA DE EDUCACIÓN MEDIA SUPERIOR EN EL ESTADO DE MÉXCO':
                                $('#secEduca').hide();
                                $('#servEduca').hide();
                                $('#secMSup').show();
                                $('#secCulDep').hide();
                                $('#otro').hide();
                                $('#titulo').val('DRA.');
                                $('#nombre').val('CLAUDIA MAGDALENA RIOS PEÑA');
                                $('#puesto').val('REPRESENTANTE DE LA SUBSECRETARIA<br> DE EDUCACIÓN MEDIA SUPERIOR EN EL<br> ESTADO DE MÉXCO<br>');
                                break;
                            case 'SECRETARIO DE CULTURA Y DEPORTE DEL GOBIERNO DEL ESTADO DE MÉXICO':
                                $('#secEduca').hide();
                                $('#servEduca').hide();
                                $('#secMSup').hide();
                                $('#secCulDep').show();
                                $('#otro').hide();
                                $('#titulo').val('DR. EN C.');
                                $('#nombre').val('EDUARDO GASCA PLIEGO');
                                $('#puesto').val('SECRETARIO DE CULTURA Y DEPORTE<br> DEL GOBIERNO DEL ESTADO DE MÉXICO<br>');
                                break;
                            case 'DIRECTOR GENERAL DE LOS SERVICIOS EDUCATIVOS INTEGRADOS AL ESTADO DE MÉXICO':
                                $('#secEduca').hide();
                                $('#servEduca').show();
                                $('#secMSup').hide();
                                $('#secCulDep').hide();
                                $('#otro').hide();
                                $('#titulo').val('INGENIERO');
                                $('#nombre').val('CARLOS AURIEL ESTÉVEZ HERRERA');
                                $('#puesto').val('DIRECTOR GENERAL DE LOS SERVICIOS EDUCATIVOS<br> INTEGRADOS AL ESTADO DE MÉXICO<br>');
                                break;
                            case 'otro':
                                $('#secEduca').hide();
                                $('#servEduca').hide();
                                $('#secMSup').hide();
                                $('#secCulDep').hide();
                                $('#otro').show();
                                $('#titulo').val('');
                                $('#nombre').val('');
                                $('#puesto').val('');
                                break;
                            default:
                                $('#secEduca').hide();
                                $('#servEduca').hide();
                                $('#secMSup').hide();
                                $('#secCulDep').hide();
                                $('#otro').hide();
                        }
                    });
                });
            </script>

            <script>
                $(function () {
                    $('#LicEnrique').hide();
                    $('#LicEmilio').hide();
                    $('#redaccion').change(function () {
                        switch ($('#redaccion').val()) {
                            case 'Anteponiendo un cordial saludo, me permito remitir a Usted,  petición formulada al Lic. Enrique Peña Nieto, Presidente Constitucional de los Estados Unidos  Mexicanos, enviada a esta Delegación por la Coordinación de atención Ciudadana de la Secretaría de Educación Pública Cual se detalla a continuación:':
                                $('#LicEnrique').show();
                                $('#LicEmilio').hide();
                                break;

                            case 'Anteponiendo un cordial saludo, me permito remitir a Usted, petición formulada al Lic. Emilio Cuayffet Chemor, Secretario de Educación Pública, misma que se detalla a continuación:':
                                $('#LicEnrique').hide();
                                $('#LicEmilio').show();
                                break;
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
                });
            </script>

            <script type="text/javascript" src="js/jquery-ui.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#fecha").datepicker({
                        dateFormat: "yy-mm-dd",
                        dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
                        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                        monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
                    });
                });
            </script> 

            <script>
                $('#renglon1').hide();
                $('#renglon2').hide();
                $('#boton1').show();
                $('#boton2').hide();

                $(document).ready(function () {
                    $("#boton1").click(function () {
                        $('#renglon1').show();
                        $('#renglon2').hide();
                        $('#boton1').hide();
                        $('#boton2').show();
                    });

                    $("#boton2").click(function () {
                        $('#renglon1').show();
                        $('#renglon2').show();
                        $('#boton1').hide();
                        $('#boton2').hide();
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
