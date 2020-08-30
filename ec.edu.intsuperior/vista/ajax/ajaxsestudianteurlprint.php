<?php

require_once("../controladores/respuestasgenerales.php");
session_start();

function opcionurlestudiantes(){
    $_SESSION['campbuscarest']=$_POST['id'];
    echo '..\Templates\actualizarEstudiante.php';

}
if ($_SESSION['user']!="") {
	echo opcionurlestudiantes();
 } else
 echo tiempoExedido();

?>