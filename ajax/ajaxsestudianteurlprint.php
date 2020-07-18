<?php

require_once("../controladores/respuestasgenerales.php");
session_start();

function opcionurlestudiantes(){
    echo '..\Templates\visorDatosEstudiante.php';

}
if ($_SESSION['user']!="") {
	echo opcionurlestudiantes();
 } else
 echo tiempoExedido();

?>