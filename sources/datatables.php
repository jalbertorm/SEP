<style type="text/css" title="currentStyle">
        @import "../css/demo_page.css";
        @import "../css/jquery.dataTables_themeroller.css";
        @import "../css/jquery-ui-1.8.4.custom.css";
</style>
<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
                $('#example1').dataTable( {
//                        "bJQueryUI": true,
//                        "sPaginationType": "full_numbers",
                                        "bJQueryUI": true,
					"sPaginationType": "full_numbers",
                                        "sScrollX": "100%",
                                        "sScrollXInner": "100%",
                                        "bScrollCollapse": true
                } );

        } );

</script>
