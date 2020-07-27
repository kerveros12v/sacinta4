<?php
function guardarR(){
    return "Guardado";
}
function actualizarR(){
    return "Registro Actualizado";
}
function eliminarR(){
    return "Registro Eliminado";
}
function tiempoExedido(){
    return "Su sesión ha excedido el tiempo límite. Por favor, ingrese de nuevo.";
}
function optEliminar(){
    return 0;
}
function actualizarFoto(){
    return "Imagen Subida Correctamente";
}
function boolselect($o){
if($o==1)
    $s=" <option selected='selected' value='1'><label>Verdadero</label></option>"
        ." <option  value='0'><label>Falso</label></option>";
        else {
            $s=" <option  value='1'><label>Verdadero</label></option>"
        ." <option selected='selected' value='0'><label>Falso</label></option>";
        }
    return $s;
}
?>