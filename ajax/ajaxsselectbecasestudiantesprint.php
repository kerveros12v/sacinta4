<?php
require_once("ajaxsselectbecasestudiantes.php");
session_start();
//$_SESSION['campbuscarest'] = $_POST['id'];
//echo "<script>console.log('Estudiante a Buscar:" . $_SESSION['campbuscarest']  . "');</script>";
echo cargarbecaestudiantes($_SESSION['campbuscarest']);
