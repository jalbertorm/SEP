<?php
function enviarOficio($noOficio, $mailCiudadano, $mail1, $mail2, $mail3, $mail4, $asunto){
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "function redireccionar(){";
    echo "location.href='enviarOficio.php?noOficio=".$noOficio."&mailCiudadano=".$mailCiudadano." &mail1=".$mail1."&mail2=".$mail2."&mail3=".$mail3."&mail4=".$mail4."&asunto=".$asunto." ';}";
    echo "setTimeout ('redireccionar()', 0)";
    echo "</script>";
}	
?>
