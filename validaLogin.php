<?php
include("sources/funciones.php");
if ($_POST) {
    $usu = __(strtolower($_POST["usu"]));
    $pass = __($_POST["pass"]);
    $passEncriptado = sha1($pass);

    require("sources/Query.inc");
    $query = new Query();

    $login = $query->select("idLogin, usuario, password, tipoUsu", "login", "usuario='$usu' and password='$passEncriptado'");
    if ($login) {
        foreach ($login as $l) {
            switch ($l->tipoUsu) {
                case 2:
                    $_SESSION["Activa"] = true;
                    $_SESSION["ID"] = $l->idLogin;
                    $_SESSION["Usuario"] = $l->usuario;
                    $_SESSION["Tipo_usuario"] = "normal";
                    break;
                case 3:
                    $_SESSION["Activa"] = true;
                    $_SESSION["ID"] = $l->idLogin;
                    $_SESSION["Usuario"] = $l->usuario;
                    $_SESSION["Tipo_usuario"] = "administrador";
                    break;
            }
        }

        $respuesta = '
                    <img src="images/ok.png" width="100">
                    <h4>
                        Bienvenido ' . $_SESSION["Usuario"] . '
                    </h4>
                    ';
    } else {
        $respuesta = '
                    <img src="images/error.png" width="100">
                    <h4>
                        Error, Usuario o Contraseña incorrectos
                    </h4>
                    ';
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <?php include ('sources/template/head.php'); ?>
            <?php if ($login) { ?>
                <meta http-equiv="Refresh" content="2;url=generarOficio.php" />
            <?php } else { ?>
                <meta http-equiv="Refresh" content="2;url=login.php" />
            <?php } ?>
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
                                        <h3 class="box-title">Title</h3>
                                    </div>
                                    <div class="box-body text-center">
                                        <?php
                                        echo $respuesta;
                                        echo $res1;
                                        echo $res2;
                                        ?>
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