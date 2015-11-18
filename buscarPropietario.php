<?php
include("sources/funciones.php");
if ($_SESSION["Activa"] and $_SESSION["Tipo_usuario"] == "administrador" and $_REQUEST) {
    $propietario = __($_REQUEST['propietario']);

    require("sources/Query.inc");
    $query = new Query();

    if ($query->select("propietario", "redaccion", "propietario='$propietario'")) {
        echo "<font style=' color: #CC0000'>El Propietario ya existe, intente nuevamente</font>";
    }
} else {
    redireccionar();
}
?>