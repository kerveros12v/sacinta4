<?php
echo ("Bienvenido al sistema Academico del INT");
session_start();
if (isset($_SESSION['user'])) {
    $a = $_SESSION['user'];
    } else {
    echo "<script>console.log('Error al acceder a cookie de sesión>>>')</script>";
    }
?>