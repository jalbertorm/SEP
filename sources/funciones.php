<?php
session_start();
include ("config.php");
include ("metodosLuz.php");
include ("metodosRobert.php");
include ("metodosBeto.php");

#Limpia los datos
function __($var)
{
	$dato =	htmlentities($var,ENT_QUOTES,'UTF-8');
	$dato = stripslashes($dato);
	return str_replace("&lt;","<",str_replace("&gt;",">",$dato));
}

function esEmail($email = "")
{
	$car = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
	if (strpos($email, '@') !== false && strpos($email, '.') !== false)
	{
		if (preg_match($car, $email))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else 
	{
		return false;
	}
}

function limpiaEmail($email)
{
	$limpio = preg_replace('/[^a-z0-9+_.@-]/i', '', $email);
	return strtolower($limpio);
}

function codificaMail($email="")
{
	$mailCodificado = "";
    for ($i=0; $i < strlen($email); $i++)
	{
        if(rand(0,1) == 0)
		{
            $mailCodificado .= "&#" . (ord($email[$i])) . ";";
        }
		else
		{
            $mailCodificado .= "&#X" . dechex(ord($email[$i])) . ";";
        }
    }
	return $mailCodificado;
}

function guardaArchivo($carpeta, $titulo)
{
	include_once ("Documento.inc");
	$img = new Documento();
	$img->archivo = $_FILES["imagen"]["tmp_name"];
	$img->error = $_FILES["imagen"]["errono"];
	$img->nombre = $_FILES["imagen"]["name"];
	//echo $img->nombre;
	$img->tamano = $_FILES["imagen"]["size"];
	$img->tipo = $_FILES["imagen"]["type"];
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

function urls_amigables($url) {

// Tranformamos todo a minusculas

$url = strtolower($url);

//Rememplazamos caracteres especiales latinos

$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

$repl = array('a', 'e', 'i', 'o', 'u', 'n');

$url = str_replace ($find, $repl, $url);

// A�aadimos los guiones

$find = array(' ', '&', '\r\n', '\n', '+'); 
$url = str_replace ($find, '-', $url);

// Eliminamos y Reemplazamos dem�s caracteres especiales

$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

$repl = array('', '-', '');

$url = preg_replace ($find, $repl, $url);

return $url;
}

function redireccionar(){
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "function redireccionar(){";
    echo "location.href='index.php';}";
    echo "setTimeout ('redireccionar()', 1)";
    echo "</script>";
}

function eComprobante($folio,$mail){
    echo "<script language='JavaScript' type='text/javascript'>";
    echo "function redireccionar(){";
    echo "location.href='eComprobante.php?folio=".$folio."&mail=".$mail."';}";
    echo "setTimeout ('redireccionar()', 1)";
    echo "</script>";
}
?>                           
