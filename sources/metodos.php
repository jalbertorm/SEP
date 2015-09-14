<?php
	session_start();
	function comboTaller(){
    	include_once("Query.inc");
	    $query= new Query();
    
	    $regLogistica=$query->select("idTaller, nombre, cupoDisponible", "taller", "carrera=1 and cupoDisponible!=0");
		$regMecatronica=$query->select("idTaller, nombre, cupoDisponible", "taller", "carrera=2 and cupoDisponible!=0");
		$regElectronica=$query->select("idTaller, nombre, cupoDisponible", "taller", "carrera=3 and cupoDisponible!=0");
		$regGestion=$query->select("idTaller, nombre, cupoDisponible", "taller", "carrera=4 and cupoDisponible!=0");
		$regIndustrial=$query->select("idTaller, nombre, cupoDisponible", "taller", "carrera=5 and cupoDisponible!=0");
		$regSistemas=$query->select("idTaller, nombre, cupoDisponible", "taller", "carrera=6 and cupoDisponible!=0");
		 
    	echo "<optgroup label='Logística'>";
			if($regLogistica){
	        	foreach($regLogistica as $regL){
					echo "<option value='$regL->idTaller'>$regL->nombre &nbsp;&nbsp;&nbsp;&nbsp; ($regL->cupoDisponible)</option>";
		        }			
    		}
			else{
				echo "<option value=''>No disponible</option>";
			}
		echo "</optgroup>";
		
		echo "<optgroup label='Mecatrónica'>";
			if($regMecatronica){
	        	foreach($regMecatronica as $regM){
					echo "<option value='$regM->idTaller'>$regM->nombre &nbsp;&nbsp;&nbsp;&nbsp; ($regM->cupoDisponible)</option>";
		        }			
    		}
			else{
				echo "<option value=''>No disponible</option>";
			}
		echo "</optgroup>";
		
		echo "<optgroup label='Electrónica'>";
			if($regElectronica){
	        	foreach($regElectronica as $regE){
					echo "<option value='$regE->idTaller'>$regE->nombre &nbsp;&nbsp;&nbsp;&nbsp; ($regE->cupoDisponible)</option>";
		        }			
    		}
			else{
				echo "<option value=''>No disponible</option>";
			}
		echo "</optgroup>";
		
		echo "<optgroup label='Gestión Empresarial'>";
			if($regGestion){
	        	foreach($regGestion as $regG){
					echo "<option value='$regG->idTaller'>$regG->nombre &nbsp;&nbsp;&nbsp;&nbsp; ($regG->cupoDisponible)</option>";
		        }			
    		}
			else{
				echo "<option value=''>No disponible</option>";
			}
		echo "</optgroup>";
		
		echo "<optgroup label='Industrial'>";
			if($regIndustrial){
	        	foreach($regIndustrial as $regI){
					echo "<option value='$regI->idTaller'>$regI->nombre &nbsp;&nbsp;&nbsp;&nbsp; ($regI->cupoDisponible)</option>";
		        }			
    		}
			else{
				echo "<option value=''>No disponible</option>";
			}
		echo "</optgroup>";
		
		echo "<optgroup label='Sistemas Computacionales'>";
			if($regSistemas){
	        	foreach($regSistemas as $regS){
					echo "<option value='$regS->idTaller'>$regS->nombre &nbsp;&nbsp;&nbsp;&nbsp; ($regS->cupoDisponible)</option>";
		        }			
    		}
			else{
				echo "<option value=''>No disponible</option>";
			}
		echo "</optgroup>";
	}
	
	function agregarCupo(){
    	include_once("Query.inc");
	    $query= new Query();
    
	    $regCupo=$query->select("idTaller, nombre, carrera, cupoTotal", "taller", "1");
		echo "<table>";
		echo "<tr>";
		echo "<td><b>Nombre</b></td>";
		echo "<td><b>Carrera</b></td>";
		echo "<td><b>Cupo</b></td>";
		echo "<td>&nbsp;&nbsp;&nbsp;</td>";
		echo "<td><b>Disponibles</b></td>";
		echo "</tr>";
		$i=1;
		foreach($regCupo as $regC){			
			echo "<tr>";
			echo "<td><input type='text' id='id$i' name='id$i' value='$regC->idTaller' hidden> $regC->nombre &nbsp;&nbsp;&nbsp;&nbsp;</td>";
			switch($regC->carrera){
				case 1: echo "<td>Ingeniería Logística</td>";break;
				case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
				case 3: echo "<td>Ingeniería Electrónica</td>";break;
				case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
				case 5: echo "<td>Ingeniería Industrial</td>";break;
				case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
			}
			echo "<td>$regC->cupoTotal</td>";
			echo "<td>&nbsp;&nbsp;&nbsp;</td>";
			echo "<td><input type='text' id='cupoD$i' name='cupoD$i'></td>";
			echo "</tr>";
			$i++;
		}
		echo "</table>";   	
	}
	
	function tablaTaller(){
    include_once("Query.inc");
    $query=new Query();
	
    $regCupo=$query->select("nombre, ponente, carrera, dia, date_format(hora, '%l:%i%p') hr, duracion, cupoTotal, cupoDisponible", "taller", "1");
	
    if($regCupo){
        $i=0;
        
        echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example1' width='100%'>";
        echo "<thead>";
		echo "<tr>";
		echo "<th>Nombre del Taller</th>";
		echo "<th>Ponente</th>";
		echo "<th>Carrera</th>";
		echo "<th>Día</th>";
		echo "<th>Hora</th>";
		echo "<th>Duración</th>";
        echo "<th>Cupo Disponible</th>";
		echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
        
        foreach($regCupo as $regC){
            $modulo=i%2;
            if($modulo==1){
                echo "<tr class='gradeX'>";
				echo "<td>$regC->nombre</td>";
				echo "<td>$regC->ponente</td>";
				switch($regC->carrera){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
				}
				switch($regC->dia){
					case 1: echo "<td>Martes y Miércoles</td>";break;
					case 2: echo "<td>Miércoles, Jueves y Viernes</td>";break;
					case 3: echo "<td>Miércoles</td>";break;
					case 4: echo "<td>Jueves, Viernes</td>";break;
					case 5: echo "<td>Jueves</td>";break;
					case 6: echo "<td>Viernes</td>";break;
				}
				echo "<td>$regC->hr</td>";
				echo "<td>$regC->duracion horas</td>";
                echo "<td>$regC->cupoDisponible</td>";
                echo "</tr>";
            }else{
                echo "<tr class='gradeC'>";
				echo "<td>$regC->nombre</td>";
				echo "<td>$regC->ponente</td>";
				switch($regC->carrera){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
				}
				switch($regC->dia){
					case 1: echo "<td>Martes y Miércoles</td>";break;
					case 2: echo "<td>Miércoles, Jueves y Viernes</td>";break;
					case 3: echo "<td>Miércoles</td>";break;
					case 4: echo "<td>Jueves, Viernes</td>";break;
					case 5: echo "<td>Jueves</td>";break;
					case 6: echo "<td>Viernes</td>";break;
				}
				echo "<td>$regC->hr</td>";
				echo "<td>$regC->duracion horas</td>";
                echo "<td>$regC->cupoDisponible</td>";
                echo "</tr>";
            }
            $i++;
        }
            echo "</tbody>";
        	echo "</table>"; 
    }
}


function tablaAlumno(){
    include_once("Query.inc");
    $query=new Query();
	
    $regCupo=$query->select("a.idAlumno id, a.nombre nom, a.apellidos ap, a.numControl numC, a.carrera c, a.mail m, a.promocion p,a.boucher b, t.nombre tNom, a.regPor regP, date_format(a.registro, '%e %b, %l:%i%p') reg", "alumno a, taller t", "a.taller=t.idTaller");
	
    if($regCupo){
		
		
        $i=0;
        
        echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example1' width='100%'>";
        echo "<thead>";
		echo "<tr>";
		echo "<th>Folio</th>";
		echo "<th>Nombre del Alumno</th>";
		echo "<th>Número de Control</th>";
		echo "<th>Carrera</th>";
		echo "<th>Correo</th>";
		echo "<th>Taller Elegido</th>";
		echo "<th>Promoción</th>";
		echo "<th>Comprobante</th>";
        echo "<th>Inscrito por:</th>";
		echo "<th>Fecha de Registro</th>";
		echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
        
        foreach($regCupo as $regC){
			$numero = $regC->id;
			// Si no se necesita decimales cambiar esta linea
			$decimales = explode(".",$numero);
			//Si no se necesita los decimales cambiar $decimales[0] por $numero
			$diferencia = 5 - strlen($decimales[0]);
			for($i = 0 ; $i < $diferencia; $i++)
			{
	        	$folio .= 0;
			}
			$folio .= $numero;
			
            $modulo=i%2;
            if($modulo==1){
                echo "<tr class='gradeX'>";
				echo "<td>$folio</td>";
				echo "<td>$regC->nom $regC->ap</td>";
				echo "<td>$regC->numC</td>";
				switch($regC->c){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Ingeniería Electromecánica</td>";break;
					case 8: echo "<td>Ingeniería Química</td>";break;
					case 9: echo "<td>Externo</td>";break;
				}
				echo "<td>$regC->m</td>";
				echo "<td>$regC->tNom</td>";
				switch($regC->p){
					case 0: echo "<td>Ninguna</td>";break;
					case 1: echo "<td>- 25%</td>";break;
					case 2: echo "<td>- 15%</td>";break;
					case 3: echo "<td>- 10%</td>";break;
					case 4: echo "<td>- 50%</td>";break;
					case 5: echo "<td>- 100%</td>";break;
					case 6: echo "<td>Grupal</td>";break;
				}
				if($regC->b != 'Pendiente'){
					echo "<td><a href='$regC->b' target='_blank'>Ver</a></td>";
				}
				else{
					echo "<td>$regC->b</td>";
				}
				switch($regC->regP){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Beto</td>";break;
				}
                echo "<td>$regC->reg</td>";
                echo "</tr>";
            }else{
                echo "<tr class='gradeC'>";
				echo "<td>$folio</td>";
				echo "<td>$regC->nom $regC->ap</td>";
				echo "<td>$regC->numC</td>";
				switch($regC->c){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Ingeniería Electromecánica</td>";break;
					case 8: echo "<td>Ingeniería Química</td>";break;
					case 9: echo "<td>Externo</td>";break;
				}
				echo "<td>$regC->m</td>";
				echo "<td>$regC->tNom</td>";
				switch($regC->p){
					case 0: echo "<td>Ninguna</td>";break;
					case 1: echo "<td>- 25%</td>";break;
					case 2: echo "<td>- 15%</td>";break;
					case 3: echo "<td>- 10%</td>";break;
					case 4: echo "<td>- 50%</td>";break;
					case 5: echo "<td>- 100%</td>";break;
					case 6: echo "<td>Grupal</td>";break;
				}
				if($regC->b != 'Pendiente'){
					echo "<td><a href='$regC->b' target='_blank'>Ver</a></td>";
				}
				else{
					echo "<td>$regC->b</td>";
				}
				switch($regC->regP){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Beto</td>";break;
				}
                echo "<td>$regC->reg</td>";
                echo "</tr>";
            }
            $i++;
			$folio=null;
        }
            echo "</tbody>";
        	echo "</table>"; 
    }
}

function tablaAluBoucher(){
    include_once("Query.inc");
    $query=new Query();
	
	if($_SESSION["Tipo_usuario"] == 'root'){
		$regCupo=$query->select("a.idAlumno id, a.nombre nom, a.apellidos ap, a.numControl numC, a.carrera c, a.mail m, date_format(a.registro, '%e %b, %l:%i%p') reg, t.nombre tNom", "alumno a, taller t", "a.taller=t.idTaller and a.boucher = 'Pendiente'");
	}
	else{
		$org=$_SESSION["ID"];
		$regCupo=$query->select("a.idAlumno id, a.nombre nom, a.apellidos ap, a.numControl numC, a.carrera c, a.mail m, date_format(a.registro, '%e %b, %l:%i%p') reg, t.nombre tNom", "alumno a, taller t", "a.taller=t.idTaller and a.regPor=$org and a.boucher = 'Pendiente'");
	}
	
    if($regCupo){
		
		
        $i=0;
        
        echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example1' width='100%'>";
        echo "<thead>";
		echo "<tr>";
		echo "<th>Folio</th>";
		echo "<th>Nombre del Alumno</th>";
		echo "<th>Número de Control</th>";
		echo "<th>Carrera</th>";
		echo "<th>Correo</th>";
		echo "<th>Taller Elegido</th>";
        echo "<th>Fecha de Registro</th>";
		echo "<th>C. de Pago</th>";
		echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
        
        foreach($regCupo as $regC){
			$numero = $regC->id;
			// Si no se necesita decimales cambiar esta linea
			$decimales = explode(".",$numero);
			//Si no se necesita los decimales cambiar $decimales[0] por $numero
			$diferencia = 5 - strlen($decimales[0]);
			for($i = 0 ; $i < $diferencia; $i++)
			{
	        	$folio .= 0;
			}
			$folio .= $numero;
			
            $modulo=i%2;
            if($modulo==1){
                echo "<tr class='gradeX'>";
				echo "<td>$folio</td>";
				echo "<td>$regC->nom $regC->ap</td>";
				echo "<td>$regC->numC</td>";
				switch($regC->c){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Ingeniería Electromecánica</td>";break;
					case 8: echo "<td>Ingeniería Química</td>";break;
					case 9: echo "<td>Externo</td>";break;
				}
				echo "<td>$regC->m</td>";
				echo "<td>$regC->tNom</td>";
                echo "<td>$regC->reg</td>";
				echo "<td><a href='gBoucher.php?id=$regC->id'>Enviar</a></td>";
                echo "</tr>";
            }else{
                echo "<tr class='gradeC'>";
				echo "<td>$folio</td>";
				echo "<td>$regC->nom $regC->ap</td>";
				echo "<td>$regC->numC</td>";
				switch($regC->c){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Ingeniería Electromecánica</td>";break;
					case 8: echo "<td>Ingeniería Química</td>";break;
					case 9: echo "<td>Externo</td>";break;
				}
				echo "<td>$regC->m</td>";
				echo "<td>$regC->tNom</td>";
                echo "<td>$regC->reg</td>";
				echo "<td><a href='gBoucher.php?id=$regC->id'>Enviar</a></td>";
                echo "</tr>";
            }
            $i++;
			$folio=null;
        }
            echo "</tbody>";
        	echo "</table>";
    }
}

function getDatosAlu($id){
    include_once("Query.inc");
    $query = new Query();
    
    $registros=$query->select("a.idAlumno id, a.nombre nom, a.apellidos ap, a.numControl numC, a.carrera c, date_format(a.registro, '%d-%m-%Y, %l:%i%p') reg, t.nombre tNom", "alumno a, taller t", "a.taller=t.idTaller and a.idAlumno=$id");
    
    if($registros){
        foreach($registros as $reg){
			$numero = $reg->id;
			// Si no se necesita decimales cambiar esta linea
			$decimales = explode(".",$numero);
			//Si no se necesita los decimales cambiar $decimales[0] por $numero
			$diferencia = 5 - strlen($decimales[0]);
			for($i = 0 ; $i < $diferencia; $i++)
			{
	        	$folio .= 0;
			}
			$folio .= $numero;
			
			switch($reg->c){
				case 1: $carrera='Ingeniería Logística';break;
				case 2: $carrera='Ingeniería Mecatrónica';break;
				case 3: $carrera='Ingeniería Electrónica';break;
				case 4: $carrera='Ingeniería en Gestión Empresarial';break;
				case 5: $carrera='Ingeniería Industrial';break;
				case 6: $carrera='Ingeniería en Sistemas Computacionales';break;
				case 7: $carrera='Ingeniería Electromecánica';break;
				case 7: $carrera='Ingeniería Química';break;
				case 7: $carrera='Externo';break;
			}
			
            return array("folio"=>"$folio", "nombre"=>"$reg->nom $reg->ap", "nControl"=>"$reg->numC", "carrera"=>"$carrera", "taller"=>"$reg->tNom", "fecha"=>"$reg->reg");
			
			$folio=null;
        }
    }
}

function getMail($id){
    include_once("Query.inc");
    $query = new Query();
    
    $registros=$query->select("mail", "alumno", "idAlumno=$id");
    
    if($registros){
        foreach($registros as $reg){
					
            return array("mail"=>"$reg->mail");
			
        }
    }
}

function actualizaBoucher($id){
    include_once("Query.inc");
    $query = new Query();
    
	$numero = $id;
	// Si no se necesita decimales cambiar esta linea
	$decimales = explode(".",$numero);
	//Si no se necesita los decimales cambiar $decimales[0] por $numero
	$diferencia = 5 - strlen($decimales[0]);
	for($i = 0 ; $i < $diferencia; $i++)
	{
	  	$folio .= 0;
	}
	$folio .= $numero;
	
    $query->update("alumno", "boucher='pagos/pago_".$folio."'", "idAlumno=$id");
}


function checkAlu($nControl){
    include_once("Query.inc");
    $query = new Query();
    
    $regAlu=$query->select("idAlumno", "alumno", "numControl=$nControl");
	$regV=$query->select("idVisita", "visita", "nControlAlu=$nControl");
    $respuesta='';
	
	if($regAlu and $regV){
		$respuesta='registrado';
	}
	elseif($regAlu){
		foreach($regAlu as $rA){
			if($rA->idAlumno <= 1500){
				$respuesta='folioOK';
			}
		}
    }
	return $respuesta;
}

function comboVisita(){
    	include_once("Query.inc");
	    $query= new Query();
    
	    $registro=$query->select("nombre, cupo", "nVisita", "cupo!=0");
		
			if($registro){
	        	foreach($registro as $reg){
					echo "<option value='$reg->nombre'>$reg->nombre &nbsp;&nbsp; ($reg->cupo)</option>";
		        }			
    		}
			else{
				echo "<option value=''>No disponible</option>";
			}
	}
	

function tablaVisitas(){
    include_once("Query.inc");
    $query=new Query();
	
    $regCupo=$query->select("a.numControl nC, a.nombre nom, a.apellidos ap, a.carrera c, v.nVisita nV", "alumno a, visita v", "v.nControlAlu=a.numControl");
	
    if($regCupo){
		
		
        $i=0;
        
        echo "<table cellpadding='0' cellspacing='0' border='0' class='display' id='example1' width='100%'>";
        echo "<thead>";
		echo "<tr>";
		echo "<th>Número de Control</th>";
		echo "<th>Nombre del Alumno</th>";
		echo "<th>Carrera</th>";
		echo "<th>Visita</th>";
		echo "</tr>";
        echo "</thead>";
		echo "<tbody>";
        
        foreach($regCupo as $regC){			
            $modulo=i%2;
            if($modulo==1){
                echo "<tr class='gradeX'>";
				echo "<td>$regC->nC</td>";
				echo "<td>$regC->nom $regC->ap</td>";
				switch($regC->c){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Ingeniería Electromecánica</td>";break;
					case 8: echo "<td>Ingeniería Química</td>";break;
					case 9: echo "<td>Externo</td>";break;
				}
				echo "<td>$regC->nV</td>";
                echo "</tr>";
            }else{
                echo "<tr class='gradeC'>";
				echo "<td>$regC->nC</td>";
				echo "<td>$regC->nom $regC->ap</td>";
				switch($regC->c){
					case 1: echo "<td>Ingeniería Logística</td>";break;
					case 2: echo "<td>Ingeniería Mecatrónica</td>";break;
					case 3: echo "<td>Ingeniería Electrónica</td>";break;
					case 4: echo "<td>Ingeniería en Gestión Empresarial</td>";break;
					case 5: echo "<td>Ingeniería Industrial</td>";break;
					case 6: echo "<td>Ingeniería en Sistemas Computacionales</td>";break;
					case 7: echo "<td>Ingeniería Electromecánica</td>";break;
					case 8: echo "<td>Ingeniería Química</td>";break;
					case 9: echo "<td>Externo</td>";break;
				}
				echo "<td>$regC->nV</td>";
                echo "</tr>";
            }
            $i++;
			$folio=null;
        }
            echo "</tbody>";
        	echo "</table>"; 
    }
}
?>