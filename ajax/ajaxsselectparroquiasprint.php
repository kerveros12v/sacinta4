<?php
require_once("ajaxsselectparroquias.php");
require_once("../controladores/respuestasgenerales.php");
session_start();
if ($_SESSION['user']!="" ||$_SESSION['campbuscarest']!="") {
    echo "<script> console.log('Dato enviado al servidor: ".$_POST['id']."');</script>";
    echo cargarParroquia1($_POST['id']);
 }
