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
        $(".textareaResp").wysihtml5();
        jQuery('.textarea').wysihtml5({
            "events": {
                "load": function () {
                    var editor = this;
                    $(editor.currentView.doc.body).on("keyup", function (event) {
                        var l = event.currentTarget.innerText.length;
                        
                        if (l > 230) {
                            //alert("porfiya");
                            var l2=l-230;
                            $("#divAux").html("<font style='color: red; font-weight: bolder;'>\n\
                                                La redacción del oficio se ha excedido con \n\
                                                <font style='color: red; font-weight: bolder; font-size: 20px;'>\n\
                                                "+l2+" \n\
                                                </font>\n\
                                                <font style='color: red; font-weight: bolder;'>\n\
                                                caracteres. Esto impedirá generar el formato. Por favor verifique su redacción.\n\
                                                </font>")
                            $("#inputAux").val("");
                        }
                        else{
                            $("#divAux").html("")
                            $("#inputAux").val("OK");
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
    $(function () {
        $("#example1").DataTable();
    });
</script>
<script type="text/javascript" src="js/jquery.numeric.js"></script>