<?php
session_start();

function tablaUsuarios() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idLogin, usuario", "login", "tipoUsu=2");

    if ($regConsulta) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nombre de Usuario</th>";
        echo "<th>Editar</th>";
        echo "<th>Eliminar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>$regC->usuario</td>";
            echo "<td><a href='editarUsuario.php?id=$regC->idLogin'><i class='fa fa-edit' title='Editar Usuario'></i></a></td>";
            ?><td><a href='eliminarUsuario.php?id=<?php echo $regC->idLogin; ?>' onClick="return confirm('¿Está seguro de eliminar este Usuario?');"><i class='fa fa-close' title='Eliminar Usuario'></i></a></td><?php
            echo "</tr>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nombre de Usuario</th>";
        echo "<th>Editar</th>";
        echo "<th>Eliminar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function getUsuario($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("usuario", "login", "idLogin=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("usuario" => "$reg->usuario");
        }
    }
}

function tablaSaludos() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRedaccion, propietario", "redaccion", "1");

    if ($regConsulta) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Propietario</th>";
        echo "<th>Editar</th>";
        echo "<th>Eliminar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>$regC->propietario</td>";
            echo "<td><a href='editarRedaccion.php?id=$regC->idRedaccion'><i class='fa fa-edit' title='Editar Saludo'></i></a></td>";
            ?><td><a href='eliminarRedaccion.php?id=<?php echo $regC->idRedaccion; ?>' onClick="return confirm('¿Está seguro de eliminar este Saludo?');"><i class='fa fa-close' title='Eliminar Saludo'></i></a></td><?php
                    echo "</tr>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "<tfoot>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Propietario</th>";
                echo "<th>Editar</th>";
                echo "<th>Eliminar</th>";
                echo "</tr>";
                echo "</thead>";
                echo "</tfoot>";
                echo "</table>";
            }
        }

function getSaludo($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("propietario, texto", "redaccion", "idRedaccion=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("propietario" => "$reg->propietario", "texto" => "$reg->texto");
        }
    }
}

function tablaDependencias() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idDependencia, titulo, nombre, puestoRn1, puestoRn2, correo", "dependencia", "1");

    if ($regConsulta) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Dependencia</th>";
        echo "<th>Editar</th>";
        echo "<th>Eliminar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>"
                    . "$regC->titulo<br>"
                    . "$regC->nombre<br>"
                    . "$regC->puestoRn1<br>"
                    . "$regC->puestoRn2<br>"
                    . "Correo electrónico: $regC->correo"
                . "</td>";
            echo "<td><a href='editarDependencia.php?id=$regC->idDependencia'><i class='fa fa-edit' title='Editar Dependencia'></i></a></td>";
            ?><td><a href='eliminarDependencia.php?id=<?php echo $regC->idDependencia; ?>' onClick="return confirm('¿Está seguro de eliminar esta Dependencia?');"><i class='fa fa-close' title='Eliminar Dependencia'></i></a></td><?php
            echo "</tr>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Dependencia</th>";
        echo "<th>Editar</th>";
        echo "<th>Eliminar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function getDependencia($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("titulo, nombre, puestoRn1, puestoRn2, rnPresente, correo", "dependencia", "idDependencia=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("titulo" => "$reg->titulo", "nombre" => "$reg->nombre", "puestoRn1" => "$reg->puestoRn1", "puestoRn2" => "$reg->puestoRn2", "rnPresente" => "$reg->rnPresente", "correo" => "$reg->correo");
        }
    }
}

function tablaNotificacionesOficio() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRedNotificacion, redaccionOficios", "redNotificacion", "1");

    if ($regConsulta) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Notificación</th>";
        echo "<th>Editar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>$regC->redaccionOficios</td>";
            echo "<td><a href='editarNotOficios.php?id=$regC->idRedNotificacion'><i class='fa fa-edit' title='Editar Notifiación'></i></a></td>";
            echo "</tr>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Notificación</th>";
        echo "<th>Editar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function getNotOficio($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("redaccionOficios", "redNotificacion", "idRedNotificacion=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("redaccionOficios" => "$reg->redaccionOficios");
        }
    }
}

function tablaNotificacionesRespuesta() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRedNotificacion, redaccionRespuestas", "redNotificacion", "1");

    if ($regConsulta) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Notificación</th>";
        echo "<th>Editar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>$regC->redaccionRespuestas</td>";
            echo "<td><a href='editarNotRespuestas.php?id=$regC->idRedNotificacion'><i class='fa fa-edit' title='Editar Notifiación'></i></a></td>";
            echo "</tr>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Notificación</th>";
        echo "<th>Editar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function getNotRespuesta($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("redaccionRespuestas", "redNotificacion", "idRedNotificacion=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("redaccionRespuestas" => "$reg->redaccionRespuestas");
        }
    }
}

function tablaRevisores() {
    include_once("Query.inc");
    $query = new Query();

    $regConsulta = $query->select("idRevisor, nombre, correo", "revisor", "1");

    if ($regConsulta) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Editar</th>";
        echo "<th>Eliminar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>$regC->nombre</td>";
            echo "<td>$regC->correo</td>";
            echo "<td><a href='editarRevisor.php?id=$regC->idRevisor'><i class='fa fa-edit' title='Editar Revisor'></i></a></td>";
            ?><td><a href='eliminarRevisor.php?id=<?php echo $regC->idRevisor; ?>' onClick="return confirm('¿Está seguro de eliminar a este Revisor?');"><i class='fa fa-close' title='Eliminar Revisor'></i></a></td><?php
                    echo "</tr>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "<tfoot>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Correo Electrónico</th>";
                echo "<th>Editar</th>";
                echo "<th>Eliminar</th>";
                echo "</tr>";
                echo "</thead>";
                echo "</tfoot>";
                echo "</table>";
            }
        }
        
function getRevisor($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("nombre, correo", "revisor", "idRevisor=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("nombre" => "$reg->nombre", "correo" => "$reg->correo");
        }
    }
}

function tablaPlantilla() {
    include_once("Query.inc");
    $query = new Query();
    
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

    $regConsulta = $query->select("idPlantilla, fechaMod", "plantilla", "1");

    if ($regConsulta) {
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Última Modificación</th>";
        echo "<th>Editar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($regConsulta as $regC) {
            echo "<tr>";
            echo "<td>".date('d',strtotime($regC->fechaMod)).' de '.$meses[date('n' ,strtotime($regC->fechaMod))-1].' de '.date('Y',strtotime($regC->fechaMod))."</td>";
            echo "<td><a href='editarPlantilla.php?id=$regC->idPlantilla'><i class='fa fa-edit' title='Editar Plantilla'></i></a></td>";
            echo "</tr>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "<tfoot>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Última Modificación</th>";
        echo "<th>Editar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        echo "</table>";
    }
}

function getPlantilla($id) {
    include_once("Query.inc");
    $query = new Query();

    $registros = $query->select("logo, encabezadoRn1, encabezadoRn2, encabezadoRn3, encabezadoRn4, encabezadoRn5, encabezadoRn6, oficioNumero, lugar, encabezadoCol1, encabezadoCol2, despedidaRn1, despedidaRn2, att, sloganAtt, firma, encargadoAtt, puestoAtt, ccpRn1col1, ccpRn1col2, ccpRn1col3, ccpRn2col1, ccpRn2col2, ccpRn3col1, ccpRn3col2, rnFolio, ciudadanoCol1, ciudadanoCol2, ccpRn6, piePagRn1, piePagRn2, fechaMod", "plantilla", "idPlantilla=$id");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("logo" => "$reg->logo", "encabezadoRn1" => "$reg->encabezadoRn1", "encabezadoRn2" => "$reg->encabezadoRn2", "encabezadoRn3" => "$reg->encabezadoRn3", "encabezadoRn4" => "$reg->encabezadoRn4", "encabezadoRn5" => "$reg->encabezadoRn5", "encabezadoRn6" => "$reg->encabezadoRn6", "oficioNumero" => "$reg->oficioNumero", "lugar" => "$reg->lugar", "encabezadoCol1" => "$reg->encabezadoCol1", "encabezadoCol2" => "$reg->encabezadoCol2", "despedidaRn1" => "$reg->despedidaRn1", "despedidaRn2" => "$reg->despedidaRn2", "att" => "$reg->att", "sloganAtt" => "$reg->sloganAtt", "firma" => "$reg->firma", "encargadoAtt" => "$reg->encargadoAtt", "puestoAtt" => "$reg->puestoAtt", "ccpRn1col1" => "$reg->ccpRn1col1", "ccpRn1col2" => "$reg->ccpRn1col2", "ccpRn1col3" => "$reg->ccpRn1col3", "ccpRn2col1" => "$reg->ccpRn2col1", "ccpRn2col2" => "$reg->ccpRn2col2", "ccpRn3col1" => "$reg->ccpRn3col1", "ccpRn3col2" => "$reg->ccpRn3col2", "rnFolio" => "$reg->rnFolio", "ciudadanoCol1" => "$reg->ciudadanoCol1", "ciudadanoCol2" => "$reg->ciudadanoCol2", "ccpRn6" => "$reg->ccpRn6", "piePagRn1" => "$reg->piePagRn1", "piePagRn2" => "$reg->piePagRn2", "fechaMod" => "$reg->fechaMod");
        }
    }
}

function guardaLogo($carpeta, $titulo)
{
	include_once ("Documento.inc");
	$img = new Documento();
	$img->archivo = $_FILES["logo"]["tmp_name"];
	$img->error = $_FILES["logo"]["errono"];
	$img->nombre = $_FILES["logo"]["name"];
	//echo $img->nombre;
	$img->tamano = $_FILES["logo"]["size"];
	$img->tipo = $_FILES["logo"]["type"];
	$img->titulo = $titulo;
	$img->destino = $carpeta;
	
	if($img->verificaError()){
		if($img->verificarExtension()){
			//echo "\nextension correcta";
		}
			if($img->cambiarNombre()){
				//echo "\nNombre cambiado";
			}
				if($img->copia()){
					//echo "  Archivo subido";
				}
	}
	
	$ruta = $img->destino."/".$img->nombre;
	return  $ruta;
}

function guardaFirma($carpeta, $titulo)
{
	include_once ("Documento.inc");
	$img = new Documento();
	$img->archivo = $_FILES["firma"]["tmp_name"];
	$img->error = $_FILES["firma"]["errono"];
	$img->nombre = $_FILES["firma"]["name"];
	//echo $img->nombre;
	$img->tamano = $_FILES["firma"]["size"];
	$img->tipo = $_FILES["firma"]["type"];
	$img->titulo = $titulo;
	$img->destino = $carpeta;
	
	if($img->verificaError()){
		if($img->verificarExtension()){
			//echo "\nextension correcta";
		}
			if($img->cambiarNombre()){
				//echo "\nNombre cambiado";
			}
				if($img->copia()){
					//echo "  Archivo subido";
				}
	}
	
	$ruta = $img->destino."/".$img->nombre;
	return  $ruta;
}
?>

