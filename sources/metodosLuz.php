<?php
session_start();

function tablaRespuesta() {
    include_once("Query.inc");
    $query = new Query();





    $regCupo = $query->select("r.idRespuesta idR, o.folio folio, r.asunto asunto, r.fecha fecha", "oficio o, respuesta r", "o.noOficio=r.oficio_idOficio");

    if ($regCupo) {
        $i = 0;

        echo "<table id='example1' class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>FOLIO</th>";
        echo "<th>ASUNTO</th>";
        echo "<th>FECHA</th>";

        /* HABILTANDO 1 */
        echo "<th>VER</th>";
        echo "<th>RE-ENVIAR</th>";
        /* FIN HABILTANDO 1 */


        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($regCupo as $regC) {
            /* $modulo=i%2; */
            /* if($modulo==1){ */
            echo "<tr>";

            echo "<td>$regC->folio</td>";
            echo "<td>$regC->asunto</td>";
            echo "<td>$regC->fecha</td>";

            /* HABILTANDO 2  
              /echo "<td>$regC->info_completa</td>";
             * echo "<td>$regC->re_enviar</td>"
              /* FIN HABILTANDO 2 */

            /* AQUI IRAN LOS METODOS PARA VER INFO COMPLETA --LINK DEL BOTON--
             * Y TAMBIEN LA FUNCION DE RE-ENVIAR DEL BOTON
             * <i class="fa fa-minus"></i>
             *  <i class='fa fa-share'></i>
			 fa-share
             * title='Click para Ver'>
             */




            echo "<td><a class='iframe' href='consultaColorBox.php?id=$regC->idR'><i class='fa fa-clipboard' title='Click para Ver'></i></a></td>";




            /*
              echo "<td><a  href='f_editarEmpleado.php?idEmpleado1=$regC->idEmpleado1'>Editar</a></td>";
              <p><a class='iframe' href="consultaColorBox.php?id=3">Inline HTML</a></p>

             * **error de consulta en el contenedor***
              echo "<td><a  class='iframe' href='consultaColorBox.php?id=idRespuesta=$regC->idRespuesta'>Editar</a></td>";
             */
            ?><td><a href='eliminarEmpleado.php?idEmpleado1=<?php echo $regC->idEmpleado1; ?>' onClick="return confirm('¿Está seguro?');"><i class='fa fa-share fa' title='Click para Re-enviar'></i></a></td><?php
            echo "</tr>";



            /* }      LLAVE DEL IF */



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

        echo "<th>VER</th>";
        echo "<th>RE-ENVIAR</th>";

        echo "</tr>";
        echo "</thead>";
        echo "</tfoot>";
        /* FIN DEL TFOOT */


        echo "</table>";
    }
}

function getRespuesta($id) {
    include_once("Query.inc");
    $query = new Query();


    /*
      $registros=$query->select("nombreEmpleado1, apEmpleado1, amEmpleado1, nacimientoEmpleado1", "empleado1", "idEmpleado1=$id");
     */


    $registros = $query->select("o.folio folio, r.asunto asunto, r.fecha fecha", "oficio o, respuesta r", "idRespuesta=$id and o.noOficio=r.oficio_idOficio");

    if ($registros) {
        foreach ($registros as $reg) {

            return array("1", "v_asunto" => "$reg->asunto", "v_fecha" => "$reg->fecha");
        }
    }
}
?>