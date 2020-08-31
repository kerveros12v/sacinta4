<?php
require ("ajaxsselecttipousuario.php");
try{
    echo cargartipoUsuario($_POST['id']);
}
catch(Exception $ex){
    echo $ex;
}

?>