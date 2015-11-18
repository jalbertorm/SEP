<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
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

<script type="text/javascript">
    $(function () {
        //bootstrap WYSIHTML5 - text editor
        jQuery('.textareaResp').wysihtml5({
            "events": {
                "load": function () {
                    var editor = this;
                    $(editor.currentView.doc.body).on("keyup", function (event) {
                        var l = event.currentTarget.innerText.length;

                        if (l > 230) {
                            //alert("porfiya");
                            var l2 = l - 230;
                            $("#divAux").html("<font style='color: red; font-weight: bolder;'>\n\
                                                La redacción del oficio se ha excedido con \n\
                                                <font style='color: red; font-weight: bolder; font-size: 20px;'>\n\
                                                " + l2 + " \n\
                                                </font>\n\
                                                <font style='color: red; font-weight: bolder;'>\n\
                                                caracteres. Esto impedirá generar el formato. Por favor verifique su redacción.\n\
                                                </font>")
                            $("#inputAux").val("");
                        }
                        else {
                            $("#divAux").html("")
                            $("#inputAux").val("OK");
                        }
                    });
                }
            }
        });
        jQuery('.textarea').wysihtml5({
            "events": {
                "load": function () {
                    var editor = this;
                    $(editor.currentView.doc.body).on("keyup", function (event) {
                        var l = event.currentTarget.innerText.length;

                        if (l > 230) {
                            //alert("porfiya");
                            var l2 = l - 230;
                            $("#divAux").html("<font style='color: red; font-weight: bolder;'>\n\
                                                La redacción del oficio se ha excedido con \n\
                                                <font style='color: red; font-weight: bolder; font-size: 20px;'>\n\
                                                " + l2 + " \n\
                                                </font>\n\
                                                <font style='color: red; font-weight: bolder;'>\n\
                                                caracteres. Esto impedirá generar el formato. Por favor verifique su redacción.\n\
                                                </font>")
                            $("#inputAux").val("");
                        }
                        else {
                            $("#divAux").html("")
                            $("#inputAux").val("OK");
                        }
                    });
                }
            }
        });
        jQuery('.textareaRedaccion').wysihtml5({
            "events": {
                "load": function () {
                    var editor = this;
                    $(editor.currentView.doc.body).on("keyup", function (event) {
                        var l = event.currentTarget.innerText.length;

                        if (l > 320) {
                            //alert("porfiya");
                            var l2 = l - 320;
                            $("#divAuxRedaccion").html("<font style='color: red; font-weight: bolder;'>\n\
                                                La redacción del oficio se ha excedido con \n\
                                                <font style='color: red; font-weight: bolder; font-size: 20px;'>\n\
                                                " + l2 + " \n\
                                                </font>\n\
                                                <font style='color: red; font-weight: bolder;'>\n\
                                                caracteres. Esto impedirá generar el formato. Por favor verifique su redacción.\n\
                                                </font>")
                            $("#inputAuxRedaccion").val("");
                        }
                        else {
                            $("#divAuxRedaccion").html("")
                            $("#inputAuxRedaccion").val("OK");
                        }
                    });
                }
            }
        });
        jQuery('.textareaNotOficios').wysihtml5({
            "events": {
                "load": function () {
                    var editor = this;
                    $(editor.currentView.doc.body).on("keyup", function (event) {
                        var l = event.currentTarget.innerText.length;

                        if (l > 400) {
                            //alert("porfiya");
                            var l2 = l - 400;
                            $("#divAuxNotOficios").html("<font style='color: red; font-weight: bolder;'>\n\
                                                La redacción del oficio se ha excedido con \n\
                                                <font style='color: red; font-weight: bolder; font-size: 20px;'>\n\
                                                " + l2 + " \n\
                                                </font>\n\
                                                <font style='color: red; font-weight: bolder;'>\n\
                                                caracteres. Esto impedirá generar el formato. Por favor verifique su redacción.\n\
                                                </font>")
                            $("#inputAuxNotOficios").val("");
                        }
                        else {
                            $("#divAuxNotOficios").html("")
                            $("#inputAuxNotOficios").val("OK");
                        }
                    });
                }
            }
        });
        jQuery('.textareaNotRespuestas').wysihtml5({
            "events": {
                "load": function () {
                    var editor = this;
                    $(editor.currentView.doc.body).on("keyup", function (event) {
                        var l = event.currentTarget.innerText.length;

                        if (l > 400) {
                            //alert("porfiya");
                            var l2 = l - 400;
                            $("#divAuxNotRespuestas").html("<font style='color: red; font-weight: bolder;'>\n\
                                                La redacción del oficio se ha excedido con \n\
                                                <font style='color: red; font-weight: bolder; font-size: 20px;'>\n\
                                                " + l2 + " \n\
                                                </font>\n\
                                                <font style='color: red; font-weight: bolder;'>\n\
                                                caracteres. Esto impedirá generar el formato. Por favor verifique su redacción.\n\
                                                </font>")
                            $("#inputAuxNotRespuestas").val("");
                        }
                        else {
                            $("#divAuxNotRespuestas").html("")
                            $("#inputAuxNotRespuestas").val("OK");
                        }
                    });
                }
            }
        });
    });



</script>

<!-- DATA TABES SCRIPT -->
<script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#example1').dataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>
<script type="text/javascript" src="js/jquery.numeric.js"></script>