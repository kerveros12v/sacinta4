<?php
require_once("ajaxsselectetnia.php");
require_once("../controladores/respuestasgenerales.php");
session_start();
if ($_SESSION['user']!="") {
    echo cargarEtnia(0);
 }

?>