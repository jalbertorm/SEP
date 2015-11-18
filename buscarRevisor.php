<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador" and $_REQUEST) {
    $mail = __($_REQUEST['mail']);

    require("sources/Query.inc");
    $query = new Query();

    if ($query->select("correo", "revisor", "correo='$mail'")) {
        echo "<font style=' color: #CC0000'>El correo electrónico ya existe, intente nuevamente</font>";
    }
}else {
    redireccionar();
}
?>