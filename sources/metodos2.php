<?php
	session_start();
	function tablaRespuesta(){
    include_once("Query.inc");
    $query=new Query();
	
    $regCupo=$query->select("o.noOficio nOficio, r.asunto asunto, r.fecha fecha", "oficio o, respuesta r", "o.noOficio=r.oficio_idOficio");
		
    if($regCupo){
        $i=0;
        
        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
		echo "<tr>";
		echo "<th>N° DE OFICIO</th>";
		echo "<th>ASUNTO</th>";
		echo "<th>FECHA</th>";
                
                /*
		echo "<th>INFO COMPLETA</th>";
		echo "<th>RE-ENVIAR</th>";
                 */
                
		echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
        
        foreach($regCupo as $regC){
            /*$modulo=i%2;*/
           /* if($modulo==1){ */
                echo "<tr>";
				
				echo "<td>$regC->nOficio</td>";
				echo "<td>$regC->asunto</td>";
				echo "<td>$regC->fecha</td>";
				/*echo "<td>$regC->info_completa</td>";*/
				/*echo "<td>$regC->re_enviar</td>";*/
                                
                                
                                /* AQUI IRAN LOS METODOS PARA VER INFO COMPLETA --LINK DEL BOTON--
                                 * Y TAMBIEN LA FUNCION DE RE-ENVIAR DEL BOTON
                                 */
                                
                                
                                /*
				echo "<td><a href='f_editarEmpleado.php?idEmpleado1=$regC->idEmpleado1'>Editar</a></td>";
                ?><td><a href='eliminarEmpleado.php?idEmpleado1=<?php echo $regC->idEmpleado1; ?>' onClick="return confirm('¿Está seguro?');">Borrar</a></td><?php
                echo "</tr>";
                                 * 
                                 * 
                                 */
                                
                                
            /*}      LLAVE DEL IF*/
                                
                               
                                 
                                echo "</tr>";
                                 
            $i++;
            
        }
        
        
            
        
            echo "</tbody>";
            
            
         /* ANEXANDO EL TFOOT */
            
            echo "<tfoot>";
           /* echo "<table id='example1' class='table table-bordered table-striped'>"; */
        echo "<thead>";
		echo "<tr>";
		echo "<th>N° DE OFICIO</th>";
		echo "<th>ASUNTO</th>";
		echo "<th>FECHA</th>";
                /*
		echo "<th>INFO COMPLETA</th>";
		echo "<th>RE-ENVIAR</th>";
                 */
		echo "</tr>";
        echo "</thead>";
            echo "</tfoot>";
            /* FIN DEL TFOOT */ 
            
            
        	echo "</table>"; 
    }
}

function getRespuesta($id){
    include_once("Query.inc");
    $query = new Query();
    
        
    /*
    $registros=$query->select("nombreEmpleado1, apEmpleado1, amEmpleado1, nacimientoEmpleado1", "empleado1", "idEmpleado1=$id");
     */
    
    $registros=$query->select("o.noOficio nOficio, r.asunto asunto, r.fecha fecha", "oficio o, respuesta r", "idRespuesta=$id and o.noOficio=r.oficio_idOficio");
    
    if($registros){
        foreach($registros as $reg){
           
            return array("1","v_asunto"=>"$reg->asunto", "v_fecha"=>"$reg->fecha");
        }
    }
}


?>