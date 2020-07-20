<?php

require_once("../controladores/respuestasgenerales.php");
session_start();

function opcionmatriculaestudiantes(){
    echo '..\Templates\visorDatosEstudiante.php';

}
if ($_SESSION['user']!="") {
    $_SESSION['campbuscarest']=$_POST['id'];
	echo opcionmatriculaestudiantes();
 } else
 echo tiempoExedido();

?>