<?php
require_once("ajaxsselectpais.php");
require_once("../controladores/respuestasgenerales.php");
session_start();
//if ($_SESSION['user']!="") {
    echo cargarPais(-1);
 //}
