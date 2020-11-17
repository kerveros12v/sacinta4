<?php
require_once("../controladores/respuestasgenerales.php");

session_start();
$_SESSION['campbuscarest'] = $_POST['id'];
function opcionurlestudiantes()
{
    echo '..\Templates\visorBecasEstudiante.php';
}
if ($_SESSION['user'] != "") {

    echo opcionurlestudiantes();
} else
    echo tiempoExedido();
