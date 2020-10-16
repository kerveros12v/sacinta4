<?php

require_once("../Crud/CrudSetecAspirante.php");
require_once("ajaxsselectgeneros.php");
require_once("ajaxsselectFormacionArtesanal.php");
require_once("ajaxsselectniveldeformacion.php");
require_once("ajaxsselectprovincia.php");
require_once("ajaxsselectcanton.php");
require_once("ajaxsselectparroquias.php");
require_once("ajaxsselectdiscapacidad.php");
require_once("ajaxsselecttipodiscapacidad.php");
require_once("ajaxsselectSetecSocioEmpleo.php");
require_once("../Crud/CrudParroquia.php");
require_once("../Crud/CrudCanton.php");
require_once("../Crud/CrudProvincia.php");

use Crud\CrudCantones;
use Crud\CrudParroquia;
use Crud\CrudProvincias;
use Crud\CrudSetecAspirante;

function cargaSetecAspirante()
{
    $lista = '';
    $crud = new CrudSetecAspirante();
    $lstdato = $crud->mostrar();

    $lista .= '<tr>
    <td>
        <input type="text" id="numeroidentificacionsetec" required="required"  />
    </td>
    <td>
        <input type="text" id="primerApellidosetec"  required="required"  />
    </td>
    <td>
        <input type="text" id="segundoApellidosetec"   required="required"  />
    </td>
    <td>
        <input type="text" id="primerNombresetec"  required="required"  />
    </td>
    <td>
        <input type="text" id="segundoNombresetec"   required="required"  />
    </td>
    <td>
        <input type="date" id="fechanacimiento"  required="required"  />
    </td>
    <td>
        <select class="selector" id="fkgenerosetec">
    ' . cargarGeneros(0) . '
        </select>
    </td>
    <td>
        <select class="selector" id="fkformacionArtesano">
        ' . cargarFormacionArtesanal(0) . '

        </select>
    </td>
    <td>
        <select class="selector" id="instruccionRegistroCivil">
        ' . cargarNivelFormacion(0) . '
        </select>
    </td>
    <td>
        <input type="text" id="setecaspiinstriccionseleccionada" required="required"  />
    </td>
    <td>
        <select class="selector" id="fkprovinciasetec">
    ' . cargarProvinciasporpais(56) . '
        </select>
    </td>
    <td>
        <select class="selector" id="fkcantonsetec">
        ' . cargarCanton(0, 0) . '
        </select>
    <td>
        <select class="selector" id="parroquiasetec">
        ' . cargarParroquia(0, 0) . '
        </select>
    </td>
    <td>
        <input type="text" id="direccionsetec"  required="required"  />
    </td>
    <td>
        <input type="text" id="correoelectronicoSetec"  required="required"  />
    </td>
    <td>
        <input type="text" id="telefonosetec"  required="required"  />
    </td>
    <td>
        <input type="text" id="celularsetec"  required="required"  />
    </td>
    <td>
        <select class="selector" id="fktipodiscapacidad">
    ' . cargarTipoDiscapacidad(0) . '
        </select>
    </td>
    <td>
        <select class="selector" id="fksocioempleo">
        ' . cargarSetecSocioEmpleo(0) . '
        </select>
    </td>

    <td>
        <input type="button" value="Guardar" id="btnguardar" onclick="registro()">
    </td>
</tr>';
    foreach ($lstdato as $datos) {
        $crudparroquia = new CrudParroquia();
        $crudcanton = new CrudCantones();
        $crudprovincia = new CrudProvincias();
        $parroquia = $crudparroquia->obtenerParroquia($datos->getParroquiasetec());
        $canton1 = $crudcanton->obtenerCanton($parroquia->getParroquiasCanton());
        $provincia1 = $crudprovincia->obtenerProvincia($canton1->getCantonprovincia());
        $lista .= '<tr>
   <td>
       <input type="text" id="numeroidentificacionsetec' . $datos->getNumeroidentificacionsetec() . '" required="required" value="' . $datos->getNumeroidentificacionsetec() . '" />
   </td>
   <td>
       <input type="text" id="primerApellidosetec' . $datos->getNumeroidentificacionsetec() . '"  required="required" value="' . $datos->getPrimerApellidosetec() . '" />
   </td>
   <td>
       <input type="text" id="segundoApellidosetec' . $datos->getNumeroidentificacionsetec() . '"   required="required"  value="' . $datos->getSegundoApellidosetec() . '"/>
   </td>
   <td>
       <input type="text" id="primerNombresetec' . $datos->getNumeroidentificacionsetec() . '"  required="required"  value="' . $datos->getPrimerNombresetec() . '"/>
   </td>
   <td>
       <input type="text" id="segundoNombresetec' . $datos->getNumeroidentificacionsetec() . '"   required="required"  value="' . $datos->getSegundoNombresetec() . '"/>
   </td>
   <td>
       <input type="date" id="fechanacimiento' . $datos->getNumeroidentificacionsetec() . '"  required="required"  value="' . $datos->getFechanacimiento() . '"/>
   </td>
   <td>
       <select class="selector" id="fkgenerosetec' . $datos->getNumeroidentificacionsetec() . '">
       ' . cargarGeneros($datos->getFkgenerosetec()) . '
       </select>
   </td>
   <td>
       <select class="selector" id="fkformacionArtesano' . $datos->getNumeroidentificacionsetec() . '">
       ' . cargarFormacionArtesanal($datos->getFkformacionArtesano()) . '
       </select>
   </td>
   <td>
       <select class="selector" id="instruccionRegistroCivil' . $datos->getNumeroidentificacionsetec() . '">

       ' . cargarNivelFormacion($datos->getInstruccionRegistroCivil()) . '
       </select>
   </td>
   <td>
       <input type="text" id="setecaspiinstriccionseleccionada' . $datos->getNumeroidentificacionsetec() . '" required="required"  value="' . $datos->getSetecaspiinstriccionseleccionada() . '"/>
   </td>
   <td>
       <select class="selector" id="fkprovinciasetec' . $datos->getNumeroidentificacionsetec() . '">
   ' . cargarProvincias($provincia1->getProvinciaId(), $provincia1->getProvinciapais()) . '
       </select>
   </td>
   <td>
       <select class="selector" id="fkcantonsetec' . $datos->getNumeroidentificacionsetec() . '">
       ' . cargarCanton($provincia1->getProvinciaId(), $canton1->getCantonId()) . '
       </select>
   <td>
       <select class="selector" id="parroquiasetec' . $datos->getNumeroidentificacionsetec() . '">
       ' . cargarParroquia($canton1->getCantonId(), $parroquia->getIdparroquias()) . '
       </select>
   </td>
   <td>
       <input type="text" id="direccionsetec' . $datos->getNumeroidentificacionsetec() . '"  required="required"  value="' . $datos->getDireccionsetec() . '"/>
   </td>
   <td>
       <input type="text" id="correoelectronicoSetec' . $datos->getNumeroidentificacionsetec() . '"  required="required"  value="' . $datos->getCorreoelectronicoSetec() . '"/>
   </td>
   <td>
       <input type="text" id="telefonosetec' . $datos->getNumeroidentificacionsetec() . '"  required="required"  value="' . $datos->getTelefonosetec() . '"/>
   </td>
   <td>
       <input type="text" id="celularsetec' . $datos->getNumeroidentificacionsetec() . '"  required="required"  value="' . $datos->getCelularsetec() . '"/>
   </td>
   <td>
       <select class="selector" id="fktipodiscapacidad' . $datos->getNumeroidentificacionsetec() . '">
       ' . cargarTipoDiscapacidad($datos->getFktipodiscapacidad()) . '
       </select>
   </td>
   <td>
       <select class="selector" id="fksocioempleo' . $datos->getNumeroidentificacionsetec() . '">
   ' . cargarSetecSocioEmpleo($datos->getFksocioempleo()) . '
       </select>
   </td>

    <td>
<input type="button" value="Actualizar" id="btnactualizar" onclick="actualizar(' . $datos->getNumeroidentificacionsetec() . ')">
 <input type="button" value="Eliminar" id="btneliminar" onclick="eliminar(' . $datos->getNumeroidentificacionsetec() . ')">
</td>
</tr>';
    }
    return $lista;
}
try {
    echo cargaSetecAspirante();
} catch (\Throwable $e) {
    echo $e;
}
