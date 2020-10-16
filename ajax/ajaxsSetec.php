<?php

require_once("../Crud/CrudSetec.php");
require_once("ajaxsselectEncuestador.php");
require_once("ajaxsselectCondicionVida.php");
require_once("ajaxsselectCondicionLaboral.php");
require_once("ajaxsselectSetecCertificacion.php");
require_once("ajaxsselectSetecestadoCertificacion.php");

use Crud\CrudSetec;

function cargaSetec()
{
    $lista = '';
    $crud = new CrudSetec();
    $lstdato = $crud->mostrar();

    $lista .= '
    <tr class="ui-widget-header">
    <th>Cedula</th>
    <th>Encuestador</th>
    <th>Condicion de Vida</th>
    <th>Condicion Laboral</th>
    <th>Cerificacion</th>
    <th>Estado de Certificacion</th>

    </tr>
    <tr>
    <td>
        <input type="text" id="setecAspiranteNumeroidentificacionsetec"  required="required"  />
    </td>
    <td>
    <select class="selector" id="fksetecEncuestador">
    ' . cargarEncuestador(0) . '
        </select>
        </td>
    <td>
    <select class="selector" id="setecfkcondiciondevida">
    ' . cargarSetecCondicionVida(0) . '
        </select>
        </td>
    <td>
    <select class="selector" id="setecfkcondicionlaboral">
    ' . cargarSetecCondicionlaboral(0) . '
        </select>
    </td>
    <td>
    <select class="selector" id="setecCertificacionIdsetecCertificacion">
    ' . cargarSetecCertificacion(0) . '
        </select>
        </td>
        <td>
        <select class="selector" id="fksecestadocertificacion">
        ' . cargarSetecestadoscertificacion(0) . '
            </select>
            </td>
    <td>
        <input type="button" value="Guardar" id="btnguardar" onclick="registro()">
    </td>
</tr>';
    foreach ($lstdato as $datos) {
        $lista .= '<tr>
   <td>
       <input type="text" id="setecAspiranteNumeroidentificacionsetec' . $datos->getIdsetec() . '"  required="required"  />
   </td>
   <td>
   <select class="selector" id="fksetecEncuestador' . $datos->getIdsetec() . '">
   ' . cargarEncuestador($datos->getFksetecEncuestador()) . '
       </select>
       </td>
   <td>
   <select class="selector" id="setecfkcondiciondevida' . $datos->getIdsetec() . '">
   ' . cargarSetecCondicionVida($datos->getSetecfkcondiciondevida()) . '
       </select>
       </td>
   <td>
   <select class="selector" id="setecfkcondicionlaboral' . $datos->getIdsetec() . '">
   ' . cargarSetecCondicionlaboral($datos->getSetecfkcondicionlaboral()) . '
       </select>
   </td>
   <td>
   <select class="selector" id="setecCertificacionIdsetecCertificacion' . $datos->getIdsetec() . '">
   ' . cargarSetecCertificacion($datos->getSetecCertificacionIdsetecCertificacion()) . '
       </select>
       </td>
       <td>
       <select class="selector" id="fksecestadocertificacion' . $datos->getIdsetec() . '">
       ' . cargarSetecestadoscertificacion($datos->getFksecestadocertificacion()) . '
           </select>
           </td>
    <td>
<input type="button" value="Actualizar" id="btnactualizar" onclick="actualizar(' . $datos->getIdsetec() . ')">
 <input type="button" value="Eliminar" id="btneliminar" onclick="eliminar(' . $datos->getIdsetec() . ')">
</td>
</tr>';
    }

    return $lista;
}
try {
    echo cargaSetec();
} catch (\Throwable $e) {
    echo $e;
}
