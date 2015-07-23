<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.4 -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="css/jquery-ui.css" rel="stylesheet" />

    </head>
    <body class="skin-black-light sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..." />
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Layout Options</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                                <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                                <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                                <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Hot</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                                <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                                <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="label pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                                <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                <li class="active"><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Multilevel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            </ul>
                        </li>
                        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                        <li class="header">LABELS</li>
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blank page
                        <small>it all starts here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Default box -->
                            <div class="box box-solid box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Title</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">

                                    <form action="guardarOficio.php" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="images/oficioHeader.png" width="100%">
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
                                                    LUZ COPIANDO<br>
                                                    REPRESENTANTE DE LA SUBSECRETARIA<br>
                                                    DE EDUCACIÓN MEDIA SUPERIOR EN EL <br>
                                                    ESTADO DE MÉXICO<br>
                                                    PRESENTE
                                                </p>
                                                <div id="otro">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="puesto" id="puesto" placeholder="Puesto" required>
                                                    </div>
                                                    PRESENTE
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select name="redaccion" class="form-control" id="redaccion" required>
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

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="telCiudadano" id="telCiudadano" placeholder="Telfono" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="mailCiodadano" id="mailCiodadano" placeholder="Email" required>
                                                </div>
                                            </div>
                                        </div>    



                                        <div class="row" id="INPUT1">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="mail1" id="mail1" placeholder="Email">  
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="mail2" id="mail2" placeholder="Email">  
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row" id="INPUT2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="mail3" id="mail3" placeholder="Email">  
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="mail4" id="mail4" placeholder="Email">  
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--<a href="#" id="boton1">Agregar Email</a>-->
                                                    <button id="boton1">Agregar mas Emails</button>    
                                                    <button id="boton2">Agregar mas Emails</button>
                                                </div>
                                            </div>     
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="textarea" placeholder="Asunto"					
                                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
                                                              border: 1px solid #dddddd; padding: 10px;"
                                                              id="asnto" name="asunto" required></textarea>
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
                                                    <input placeholder="Referencia" name="referencia" style="width: 150px" type="text" required> 
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

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- /.control-sidebar-menu -->

                    </div><!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div><!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right" />
                                </label>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div><!-- /.form-group -->
                        </form>
                    </div><!-- /.tab-pane -->
                </div>
            </aside><!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js" type="text/javascript"></script>
        <!-- CK Editor -->
        <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

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
                            break;
                        case 'SECRETARIO DE CULTURA Y DEPORTE DEL GOBIERNO DEL ESTADO DE MÉXICO':
                            $('#secEduca').hide();
                            $('#servEduca').hide();
                            $('#secMSup').hide();
                            $('#secCulDep').show();
                            $('#otro').hide();
                            break;
                        case 'DIRECTOR GENERAL DE LOS SERVICIOS EDUCATIVOS INTEGRADOS AL ESTADO DE MÉXICO':
                            $('#secEduca').hide();
                            $('#servEduca').show();
                            $('#secMSup').hide();
                            $('#secCulDep').hide();
                            $('#otro').hide();
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

        <script type="text/javascript">
            $(function () {
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
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

            $(document).ready(function(){
                $("#boton2").hide();
                $("#INPUT1").hide();
                $("#INPUT2").hide();

                $("#boton1").click(function () {
                    $("#INPUT1").show();
                    $("#boton2").show();
                    $("#INPUT2").hide();
                    $("#boton1").hide();
                });
                
                
                $("#boton2").click(function () {
                    $("#INPUT1").show();
                    $("#boton2").hide();
                    $("#INPUT2").show();
                    $("#boton1").hide();
                });

            });
        </script>


    </body>
</html>
