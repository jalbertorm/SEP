<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador" and $_POST) {
    $auxNombreLogo = __($_POST['auxNombreLogo']);
    if ($_FILES["logo"]["name"]) {
        $conLogo = true;
        $logo = guardaLogo("images", "$auxNombreLogo");
    } else {
        $conLogo = false;
    }
    $encabezadoRn1 = __($_POST["encabezadoRn1"]);
    $encabezadoRn2 = __($_POST["encabezadoRn2"]);
    $encabezadoRn3 = __($_POST["encabezadoRn3"]);
    $encabezadoRn4 = __($_POST["encabezadoRn4"]);
    $encabezadoRn5 = __($_POST["encabezadoRn5"]);
    $encabezadoRn6 = __($_POST["encabezadoRn6"]);
    $oficioNumero = __($_POST["oficioNumero"]);
    $lugar = __($_POST["lugar"]);
    $encabezadoCol1 = __($_POST["encabezadoCol1"]);
    $encabezadoCol2 = __($_POST["encabezadoCol2"]);
    $despedidaRn1 = __($_POST["despedidaRn1"]);
    $despedidaRn2 = __($_POST["despedidaRn2"]);
    $att = __($_POST["att"]);
    $sloganAtt = __($_POST["sloganAtt"]);
    $auxNombreFirma = __($_POST['auxNombreFirma']);
    if ($_FILES["firma"]["name"]) {
        $conFirma = true;
        $firma = guardaFirma("images", $auxNombreFirma);
    } else {
        $conFirma = false;
    }
    $encargadoAtt = __($_POST["encargadoAtt"]);
    $puestoAtt = __($_POST["puestoAtt"]);
    $ccpRn1col1 = __($_POST["ccpRn1col1"]);
    $ccpRn1col2 = __($_POST["ccpRn1col2"]);
    $ccpRn1col3 = __($_POST["ccpRn1col3"]);
    $ccpRn2col1 = __($_POST["ccpRn2col1"]);
    $ccpRn2col2 = __($_POST["ccpRn2col2"]);
    $ccpRn3col1 = __($_POST["ccpRn3col1"]);
    $ccpRn3col2 = __($_POST["ccpRn3col2"]);
    $rnFolio = __($_POST["rnFolio"]);
    $ciudadanoCol1 = __($_POST["ciudadanoCol1"]);
    $ciudadanoCol2 = __($_POST["ciudadanoCol2"]);
    $ccpRn6 = __($_POST["ccpRn6"]);
    $piePagRn1 = __($_POST["piePagRn1"]);
    $piePagRn2 = __($_POST["piePagRn2"]);

    $id = $_POST['id'];

    require("sources/Query.inc");
    $query = new Query();

    if ($conFirma and $conLogo) {
        if ($query->update("plantilla", "fechaMod=now(), logo='$logo', encabezadoRn1='$encabezadoRn1', encabezadoRn2='$encabezadoRn2', encabezadoRn3='$encabezadoRn3', encabezadoRn4='$encabezadoRn4', encabezadoRn5='$encabezadoRn5', encabezadoRn6='$encabezadoRn6', oficioNumero='$oficioNumero', lugar='$lugar', encabezadoCol1='$encabezadoCol1', encabezadoCol2='$encabezadoCol2', despedidaRn1='$despedidaRn1', despedidaRn2='$despedidaRn2', att='$att', sloganAtt='$sloganAtt', firma='$firma', encargadoAtt='$encargadoAtt', puestoAtt='$puestoAtt', ccpRn1col1='$ccpRn1col1', ccpRn1col2='$ccpRn1col2', ccpRn1col3='$ccpRn1col3', ccpRn2col1='$ccpRn2col1', ccpRn2col2='$ccpRn2col2', ccpRn3col1='$ccpRn3col1', ccpRn3col2='$ccpRn3col2', rnFolio='$rnFolio', ciudadanoCol1='$ciudadanoCol1', ciudadanoCol2='$ciudadanoCol2', ccpRn6='$ccpRn6', piePagRn1='$piePagRn1', piePagRn2='$piePagRn2'", "idPlantilla=$id")) {
            $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Datos actualizados correctamente.
                    </h4>
                    ';
        } else {
            $respuesta = '
                    <img src="images/error.png" width="100">
                    <h4>
                        Ha ocurrido un error.
                    </h4>
                    ';
        }
    }
    elseif ($conFirma and $conLogo==FALSE) {
        if ($query->update("plantilla", "fechaMod=now(), encabezadoRn1='$encabezadoRn1', encabezadoRn2='$encabezadoRn2', encabezadoRn3='$encabezadoRn3', encabezadoRn4='$encabezadoRn4', encabezadoRn5='$encabezadoRn5', encabezadoRn6='$encabezadoRn6', oficioNumero='$oficioNumero', lugar='$lugar', encabezadoCol1='$encabezadoCol1', encabezadoCol2='$encabezadoCol2', despedidaRn1='$despedidaRn1', despedidaRn2='$despedidaRn2', att='$att', sloganAtt='$sloganAtt', firma='$firma', encargadoAtt='$encargadoAtt', puestoAtt='$puestoAtt', ccpRn1col1='$ccpRn1col1', ccpRn1col2='$ccpRn1col2', ccpRn1col3='$ccpRn1col3', ccpRn2col1='$ccpRn2col1', ccpRn2col2='$ccpRn2col2', ccpRn3col1='$ccpRn3col1', ccpRn3col2='$ccpRn3col2', rnFolio='$rnFolio', ciudadanoCol1='$ciudadanoCol1', ciudadanoCol2='$ciudadanoCol2', ccpRn6='$ccpRn6', piePagRn1='$piePagRn1', piePagRn2='$piePagRn2'", "idPlantilla=$id")) {
            $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Datos actualizados correctamente.
                    </h4>
                    ';
        } else {
            $respuesta = '
                    <img src="images/error.png" width="100">
                    <h4>
                        Ha ocurrido un error.
                    </h4>
                    ';
        }
    }
    elseif ($conLogo and $conFirma==FALSE) {
        if ($query->update("plantilla", "fechaMod=now(), logo='$logo', encabezadoRn1='$encabezadoRn1', encabezadoRn2='$encabezadoRn2', encabezadoRn3='$encabezadoRn3', encabezadoRn4='$encabezadoRn4', encabezadoRn5='$encabezadoRn5', encabezadoRn6='$encabezadoRn6', oficioNumero='$oficioNumero', lugar='$lugar', encabezadoCol1='$encabezadoCol1', encabezadoCol2='$encabezadoCol2', despedidaRn1='$despedidaRn1', despedidaRn2='$despedidaRn2', att='$att', sloganAtt='$sloganAtt', encargadoAtt='$encargadoAtt', puestoAtt='$puestoAtt', ccpRn1col1='$ccpRn1col1', ccpRn1col2='$ccpRn1col2', ccpRn1col3='$ccpRn1col3', ccpRn2col1='$ccpRn2col1', ccpRn2col2='$ccpRn2col2', ccpRn3col1='$ccpRn3col1', ccpRn3col2='$ccpRn3col2', rnFolio='$rnFolio', ciudadanoCol1='$ciudadanoCol1', ciudadanoCol2='$ciudadanoCol2', ccpRn6='$ccpRn6', piePagRn1='$piePagRn1', piePagRn2='$piePagRn2'", "idPlantilla=$id")) {
            $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Datos actualizados correctamente.
                    </h4>
                    ';
        } else {
            $respuesta = '
                    <img src="images/error.png" width="100">
                    <h4>
                        Ha ocurrido un error.
                    </h4>
                    ';
        }
    }
    else{
        if ($query->update("plantilla", "fechaMod=now(), encabezadoRn1='$encabezadoRn1', encabezadoRn2='$encabezadoRn2', encabezadoRn3='$encabezadoRn3', encabezadoRn4='$encabezadoRn4', encabezadoRn5='$encabezadoRn5', encabezadoRn6='$encabezadoRn6', oficioNumero='$oficioNumero', lugar='$lugar', encabezadoCol1='$encabezadoCol1', encabezadoCol2='$encabezadoCol2', despedidaRn1='$despedidaRn1', despedidaRn2='$despedidaRn2', att='$att', sloganAtt='$sloganAtt', encargadoAtt='$encargadoAtt', puestoAtt='$puestoAtt', ccpRn1col1='$ccpRn1col1', ccpRn1col2='$ccpRn1col2', ccpRn1col3='$ccpRn1col3', ccpRn2col1='$ccpRn2col1', ccpRn2col2='$ccpRn2col2', ccpRn3col1='$ccpRn3col1', ccpRn3col2='$ccpRn3col2', rnFolio='$rnFolio', ciudadanoCol1='$ciudadanoCol1', ciudadanoCol2='$ciudadanoCol2', ccpRn6='$ccpRn6', piePagRn1='$piePagRn1', piePagRn2='$piePagRn2'", "idPlantilla=$id")) {
            $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Datos actualizados correctamente.
                    </h4>
                    ';
        } else {
            $respuesta = '
                    <img src="images/error.png" width="100">
                    <h4>
                        Ha ocurrido un error.
                    </h4>
                    ';
        }
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
    <?php include ('sources/template/head.php'); ?>
            <meta http-equiv="Refresh" content="2;url=consultarPlantilla.php" />
        </head>
        <body class="skin-black-light sidebar-mini sidebar-collapse">
            <!-- Site wrapper -->
            <div class="wrapper">

                <header class="main-header">
    <?php include ('sources/template/header.php'); ?>
                </header>

                <!-- =============================================== -->

                <!--aquí no hay menú-->           

                <!-- =============================================== -->

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
    <?php include ('sources/template/titulo.php'); ?>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6 col-md-offset-3">
                                <!-- Default box -->
                                <div class="box box-solid box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Editar Dependencia</h3>
                                    </div>
                                    <div class="box-body text-center">
    <?php echo $respuesta; ?>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-center">
                                        <h4>
                                            <small>Redireccionando...</small>
                                        </h4>
                                        <img src="images/cargando.gif" width="20">
                                        <br>
                                        &nbsp;
                                    </div><!-- /.box-footer-->
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
} else {
    redireccionar();
}
?>