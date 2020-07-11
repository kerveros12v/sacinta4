<?php
require_once("../clasesphp/Estudiantes.php");
require_once("../Crud/CrudEstudiante.php");
use Clasesphp\Estudiantes;
use Crud\CrudEstudiantes;
session_start();
$e1=null;
$crudest2=null;
$nomb="";
if (isset($_SESSION['tipouser'])) {
  switch($_SESSION['tipouser']){
    case "est":{
      $e1=new Estudiantes();
      $crudest2=new CrudEstudiantes();
        $e1=$crudest2->obtenerEstudiantes($_SESSION['user']);
        $nomb=$e1->get_primerApellido()." ".$e1->get_segundoApellido()." ".$e1->get_primerNombre()." ".$e1->get_segundoNombre();
        break;

      }
  }
$a = $_SESSION['user'];
} else {
echo "<script>console.log('Error al acceder a cookie de sesión>>>".$_SESSION['user']."')</script>";
}




?>
<?php
if(!isset($_GET['ancho']) && !isset($_GET['alto']) )
{
echo "<script language=\"JavaScript\">
<!--
document.location=\"$PHP_SELF?ancho=\"+screen.width+\"&alto=\"+screen.height;
//-->
</script>";
}
else {
if(isset($_GET['ancho']) && isset($_GET['alto'])) {
// Resolución de pantalla
 echo "<script>console.log('Esta es tu resolucion de pantalla: Ancho= ".$_GET['ancho']." y Alto= ".$_GET['alto']."')</script>";
 }
 else {
 // Error en la detección
 echo "No se ha podido detectar la resolución de pantalla";
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>SAC-INT</title>
<link rel="stylesheet" type="text/css" href="../css/cssPlantilla.css"/>
<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../js/ajaxsPlantillaBase.js"></script>
</head>

<body>
  <div class="sidebar1">
  <a href="Bienvenida.php" target="contenedor"><img src="../img/logo-principal.png"  name="logo" width="110" height="60" id="logo"  /></a>
  <ul class="nav">
    <li><a href="Bienvenida.php" target="contenedor">INICIO</a></li>
  </ul>
  <ul class="nav" id="nav">
  </ul>
  <ul class="nav-derecho">
  <li><a id="usuario"><?php echo $nomb; ?></a></li>
  <li><a id="salir" onclick="salir()">Salir</a></li>
  </ul>


    <!-- end .sidebar1 -->
  </div>



  <div class="content">
 <iframe id="contenedor" name="contenedor" style="width: 100%; height:<?php echo($_GET['alto']-235); ?>; border: none;"></iframe>
</div>
<!--
  <div class="footer" >
  <a href="#"><img src="../img/pie-de-pagina-1.png" name="pie" width="30%" height="2%" id="pie"  /></a>
   </div>
  -->
</body>
</html>
