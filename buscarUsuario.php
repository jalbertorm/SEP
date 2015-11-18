<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador" and $_REQUEST) {
    $usu = strtolower($_REQUEST['usu']);

    require("sources/Query.inc");
    $query = new Query();

    if ($query->select("usuario", "login", "usuario='$usu'")) {
        echo "<font style=' color: #CC0000'>El Usuario ya existe, intente nuevamente</font>";
    }
}else {
    redireccionar();
}
?>