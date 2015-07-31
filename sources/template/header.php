<!-- Logo -->
<a href="http://www.sep.gob.mx/" target="_blank" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="images/foto.png" width="100%"></span>
    <!-- logo for regular state and mobile devices -->
    <!--<span class="logo-lg"><b>Admin</b>LTE</span>-->
    <span class="logo-lg"><img src="images/logo.png" width="140"></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="images/foto.png" class="user-image" alt="User Image" />
                    <span class="hidden-xs"><?php echo $_SESSION["Usuario"]; ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="images/foto.png" class="img-circle" alt="User Image" />
                        <p>
                            <?php echo $_SESSION["Usuario"]; ?>
                            <small>En línea</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-right">
                            <a href="salir.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
