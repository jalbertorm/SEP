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
                <?php include ('sources/template/menu.php'); ?>
            </aside>

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
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Start creating your amazing application!
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    Footer
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