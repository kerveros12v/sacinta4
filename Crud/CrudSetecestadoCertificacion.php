<?php

namespace Crud;


require_once('conexion.php');
require_once("../clasesphp/Setecestadoscertificacion.php");

use Clasesphp\Setecestadoscertificacion;

class CrudSetecestadoscertificacion
{
  // constructor de la clase
  public function __construct()
  {
  }

  public function mostrar()
  {
    $db = Db::conectar();
    $seteccertificacion = null;
    $select = $db->query("SELECT * FROM `setecestadoscertificacion`");
    $listaseteccertificacion = null;
    foreach ($select->fetchAll() as $seteccertificacion) {
      $myseteccertificacion = new Setecestadoscertificacion();
      $myseteccertificacion->setIdsec($seteccertificacion['idsec']);
      $myseteccertificacion->setSeccodigo($seteccertificacion['seccodigo']);
      $myseteccertificacion->setSecdetalle($seteccertificacion['secdetalle']);
      $myseteccertificacion->setSecOculto($seteccertificacion['secOculto']);
      $myseteccertificacion->setSecAccion($seteccertificacion['secAccion']);
      $myseteccertificacion->setSecFecha($seteccertificacion['secFecha']);
      $myseteccertificacion->setSecUser($seteccertificacion['secUser']);
      ////
      $listaseteccertificacion[] = $myseteccertificacion;
      // echo ("Cargando Datos");
    }
    return $listaseteccertificacion;
  }
  public function obtenerSetecEstadoCertificacion($id)
  {
    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM `setecestadoscertificacion` WHERE `idsec`=:id;");
    $select->bindValue('id', $id);
    $select->execute();
    $seteccertificacion = $select->fetch();
    $myseteccertificacion = new Setecestadoscertificacion();
    $myseteccertificacion->setIdsec($seteccertificacion['idsec']);
    $myseteccertificacion->setSeccodigo($seteccertificacion['seccodigo']);
    $myseteccertificacion->setSecdetalle($seteccertificacion['secdetalle']);
    $myseteccertificacion->setSecOculto($seteccertificacion['secOculto']);
    $myseteccertificacion->setSecAccion($seteccertificacion['secAccion']);
    $myseteccertificacion->setSecFecha($seteccertificacion['secFecha']);
    $myseteccertificacion->setSecUser($seteccertificacion['secUser']);
    ////
    $listaseteccertificacion[] = $myseteccertificacion;

    return $myseteccertificacion;
  }
  public  function existe($id)
  {
    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM setecestadoscertificacion where idsec=:id ;");
    $select->bindValue('id', $id);
    $select->execute();
    if ($select->fetch() == 0) return 0;
    return 1;
  }
  public function insertar($datos)
  {
    $db = Db::conectar();
    $insert = $db->prepare("INSERT INTO `setecestadoscertificacion`
    (`idsec`,
    `seccodigo`,
    `secdetalle`,
    `secOculto`,
    `secAccion`,
    `secFecha`,
    `secUser`)
    VALUES
    (:idsec1,
    :seccodigo1,
    :secdetalle1,
    :secOculto1,
    :secAccion1,
    :secFecha1,
    :secUser1);");
    $insert->bindValue('idsec1', $datos->getIdsec());
    $insert->bindValue('seccodigo1', $datos->getSeccodigo());
    $insert->bindValue('secdetalle1', $datos->getSecdetalle());
    $insert->bindValue('secOculto1', $datos->getSecOculto());
    $insert->bindValue('secAccion1', $datos->getSecAccion());
    $insert->bindValue('secFecha1', $datos->getSecFecha());
    $insert->bindValue('secUser1', $datos->getSecUser());
    $insert->execute();
    //echo ("-Termino");
  }

  public function actualizar($datos)
  {
    $db = Db::conectar();

    $actualizar = $db->prepare("UPDATE `setecestadoscertificacion`
    SET
    `idsec` = :idsec1,
    `seccodigo` = :seccodigo1,
    `secdetalle` = :secdetalle1,
    `secOculto` = :secOculto1,
    `secAccion` = :secAccion1,
    `secFecha` = :secFecha1,
    `secUser` = :secUser1
    WHERE `idsec` = :idsec1;");
    $actualizar->bindValue('idsec1', $datos->getIdsec());
    $actualizar->bindValue('seccodigo1', $datos->getSeccodigo());
    $actualizar->bindValue('secdetalle1', $datos->getSecdetalle());
    $actualizar->bindValue('secOculto1', $datos->getSecOculto());
    $actualizar->bindValue('secAccion1', $datos->getSecAccion());
    $actualizar->bindValue('secFecha1', $datos->getSecFecha());
    $actualizar->bindValue('secUser1', $datos->getSecUser());
    $actualizar->execute();
  }
  public function eliminar($id)
  {
    $db = Db::conectar();
    $eliminar = $db->prepare('DELETE FROM `setecestadoscertificacion` WHERE idsec=:id');
    $eliminar->bindValue('id', $id);
    $eliminar->execute();
  }
}
