<?php
function guardarR()
{
    return dialogo("Guardado");
}
function actualizarR()
{
    return dialogo("Registro Actualizado");
}
function eliminarR()
{
    return dialogo("Registro Eliminado");
}
function tiempoExedido()
{
    return dialogo("Su sesión ha excedido el tiempo límite. Por favor, ingrese de nuevo.");
}
function optEliminar()
{
    return 0;
}
function actualizarFoto()
{
    return dialogo("Imagen Subida Correctamente");
}
function boolselect($o)
{
    if ($o == 1) {
        $s = " <option selected='selected' value='1'><label>Verdadero</label></option> <option  value='0'><label>Falso</label></option>";
    } else {
        $s = " <option  value='1'><label>Verdadero</label></option>"
            . " <option selected='selected' value='0'><label>Falso</label></option>";
    }

    return $s;
}
function dialogo($respuesta)
{
    $resultado = '<p>' . $respuesta . '</p>';
    return $resultado;
}
