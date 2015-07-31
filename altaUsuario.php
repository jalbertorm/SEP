<!DOCTYPE html>
<html>
    <head>
        <?php include ('sources/template/head.php'); ?>
    </head>
    <body class="lockscreen">
        <!-- Automatic element centering -->
        <div class="lockscreen-wrapper">
            <div class="lockscreen-logo">
                <h1>
                    Coordinación General de Atención Ciudadana<br>
                    <small>Delegación SEP Estado de México</small>
                </h1>
            </div>
            <br><br>
            <!-- User name -->
            <div class="lockscreen-name">Alta de Usuarios</div>

            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                    <img src="images/userLogin.png"/>
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <form class="lockscreen-credentials" action="guardarUsuario.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" name="usu" placeholder="Usuario" required />
                        <input type="password" class="form-control" name="pass" placeholder="Contraseña" required />
                        <div class="input-group-btn">
                            <button class="btn" type="submit"><i class="fa fa-arrow-right text-muted"></i></button>
                        </div>
                    </div>
                </form><!-- /.lockscreen credentials -->

            </div><!-- /.lockscreen-item -->
            <div class="help-block text-center">
                Por favor ingrese sus datos
            </div>
            <br><br>
            <div class="lockscreen-footer text-center">
                Copyright &copy; 2014-2015 <b><a href="http://almsaeedstudio.com" class="text-black">Almsaeed Studio</a></b><br/>
                All rights reserved
            </div>
        </div><!-- /.center -->
        <?php include ('sources/template/scripts.php'); ?>
    </body>
</html>