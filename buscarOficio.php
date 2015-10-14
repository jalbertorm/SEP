<?php
include("sources/funciones.php");
if ($_REQUEST) {
    $nOficio = strtolower($_REQUEST['nOficio']);
    
    if($nOficio){
    
    require("sources/Query.inc");
    $query = new Query();
    $regCupo = $query->select("idOficio idOficio,noOficio nOficio,asunto asunto,fecha fecha, status status", "oficio", "noOficio=$nOficio and status=2");
    $regCupo2 = $query->select("idOficio idOficio,noOficio nOficio,status status", "oficio", "noOficio=$nOficio and status=3");
    if ($regCupo) {
        
        $i = 0;
        echo "<table class='table table-condensed'>";
        echo "<thead>";
        echo "<tr>";
        
        echo "<th>N° de Oficio</th>";
        echo "<th>ASUNTO</th>";
        echo "<th>FECHA</th>";

        /* HABILTANDO 1 */
        echo "<th style='text-align:center'>GENERAR RESPUESTA</th>";
        /* FIN HABILTANDO 1 */


        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($regCupo as $regC) {
            $fechaFormato=$regC->fecha;
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            
            echo "<tr>";
            echo "<td>$regC->nOficio</td>";
            /*echo "<td>$regC->idOficio</td>";*/
            echo "<td>$regC->asunto</td>";
            echo "<td>".date('d',strtotime($fechaFormato))." de ".$meses[date('n' ,strtotime($fechaFormato))-1]." de ".date('Y',strtotime($fechaFormato))."</td>";
            ?><td style="text-align:center"><a href='generarRespuesta.php?idOficio=<?php echo $regC->idOficio ?>'><i  class='fa fa-pencil-square-o' title='Generar Respueta'></i></a></td><?php
            echo "</tr>";
            echo "</tr>";

            $i++;
        }
        echo "</tbody>";
        echo "</table>";
    }
    elseif($regCupo2){
        echo "<center>Ya ha sido atendido el No. de Oficio</center>";
    }
    
    else{
		echo "<center>No se encontro el No. de Oficio</center>";
	}
    }
    else{
        echo "<center>Debe Ingresar un No. de Oficio</center>";
    }
}
