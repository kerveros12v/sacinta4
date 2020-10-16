<?php

namespace Crud;


require_once('conexion.php');
require_once("../clasesphp/SetecCertificacion.php");

use Clasesphp\SetecCertificacion;

class CrudSetecCertificacion
{
  // constructor de la clase
  public function __construct()
  {
  }

  public function mostrar()
  {
    //, , , , , , , , , , , ,
    $db = Db::conectar();
    $seteccertificacion = null;
    $select = $db->query("SELECT * FROM `seteccertificacion`");
    $listaseteccertificacion = null;
    foreach ($select->fetchAll() as $seteccertificacion) {
      $myseteccertificacion = new SetecCertificacion();
      $myseteccertificacion->setIdsetecCertificacion($seteccertificacion['idsetecCertificacion']);
      $myseteccertificacion->setFkidsetecperfil($seteccertificacion['fkidsetecperfil']);
      $myseteccertificacion->setFechaprueba($seteccertificacion['fechaprueba']);
      $myseteccertificacion->setHoraprueba($seteccertificacion['horaprueba']);
      $myseteccertificacion->setCostoCertidicacion($seteccertificacion['costoCertidicacion']);
      $myseteccertificacion->setSetecLugardondeExaminado($seteccertificacion['setecLugardondeExaminado']);
      $myseteccertificacion->setSetecnombreEmpresaLugar($seteccertificacion['setecnombreEmpresaLugar']);
      $myseteccertificacion->setSetecdireccionEmpresa($seteccertificacion['setecdireccionEmpresa']);
      $myseteccertificacion->setSetecTelefonoEmpresa($seteccertificacion['setecTelefonoEmpresa']);
      $myseteccertificacion->setSeteccertificacionOculto($seteccertificacion['seteccertificacionOculto']);
      $myseteccertificacion->setSeteccertificacionAccion($seteccertificacion['seteccertificacionAccion']);
      $myseteccertificacion->setSeteccertificacionfecha($seteccertificacion['seteccertificacionfecha']);
      $myseteccertificacion->setSeteccertificacionuser($seteccertificacion['seteccertificacionuser']);
      ////
      $listaseteccertificacion[] = $myseteccertificacion;
      echo ("Cargando Datos");
    }
    return $listaseteccertificacion;
  }
  public function obtenerSetecCertificacion($id)
  {
    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM `seteccertificacion` WHERE `idsetecCertificacion`=:id;");
    $select->bindValue('id', $id);
    $select->execute();
    $seteccertificacion = $select->fetch();
    $myseteccertificacion = new SetecCertificacion();
    ///
    $myseteccertificacion->setIdsetecCertificacion($seteccertificacion['idsetecCertificacion']);
    $myseteccertificacion->setFkidsetecperfil($seteccertificacion['fkidsetecperfil']);
    $myseteccertificacion->setFechaprueba($seteccertificacion['fechaprueba']);
    $myseteccertificacion->setHoraprueba($seteccertificacion['horaprueba']);
    $myseteccertificacion->setCostoCertidicacion($seteccertificacion['costoCertidicacion']);
    $myseteccertificacion->setSetecLugardondeExaminado($seteccertificacion['setecLugardondeExaminado']);
    $myseteccertificacion->setSetecnombreEmpresaLugar($seteccertificacion['setecnombreEmpresaLugar']);
    $myseteccertificacion->setSetecdireccionEmpresa($seteccertificacion['setecdireccionEmpresa']);
    $myseteccertificacion->setSetecTelefonoEmpresa($seteccertificacion['setecTelefonoEmpresa']);
    $myseteccertificacion->setSeteccertificacionOculto($seteccertificacion['seteccertificacionOculto']);
    $myseteccertificacion->setSeteccertificacionAccion($seteccertificacion['seteccertificacionAccion']);
    $myseteccertificacion->setSeteccertificacionfecha($seteccertificacion['seteccertificacionfecha']);
    $myseteccertificacion->setSeteccertificacionuser($seteccertificacion['seteccertificacionuser']);
    ////
    $listaseteccertificacion[] = $myseteccertificacion;

    return $myseteccertificacion;
  }
  public  function existe($id)
  {
    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM seteccertificacion where idsetecCertificacion=:id ;");
    $select->bindValue('id', $id);
    $select->execute();
    if ($select->fetch() == 0) return 0;
    return 1;
  }
  public function insertar($datos)
  {
    $db = Db::conectar();
    $insert = $db->prepare("INSERT INTO `seteccertificacion`
    (`idsetecCertificacion`,
    `fkidsetecperfil`,
    `fechaprueba`,
    `horaprueba`,
    `costoCertidicacion`,
    `setecLugardondeExaminado`,
    `setecnombreEmpresaLugar`,
    `setecdireccionEmpresa`,
    `setecTelefonoEmpresa`,
    `seteccertificacionOculto`,
    `seteccertificacionAccion`,
    `seteccertificacionfecha`,
    `seteccertificacionuser`)
    VALUES
    (:idsetecCertificacion1,
    :fkidsetecperfil1,
    :fechaprueba1,
    :horaprueba1,
    :costoCertidicacion1,
    :setecLugardondeExaminado1,
    :setecnombreEmpresaLugar1,
    :setecdireccionEmpresa1,
    :setecTelefonoEmpresa1,
    :seteccertificacionOculto1,
    :seteccertificacionAccion1,
    :seteccertificacionfecha1,
    :seteccertificacionuser1);");
    $insert->bindValue('idsetecCertificacion1', $datos->getIdsetecCertificacion());
    $insert->bindValue('fkidsetecperfil1', $datos->getFkidsetecperfil());
    $insert->bindValue('fechaprueba1', $datos->getFechaprueba());
    $insert->bindValue('horaprueba1', $datos->getHoraprueba());
    $insert->bindValue('costoCertidicacion1', $datos->getCostoCertidicacion());
    $insert->bindValue('setecLugardondeExaminado1', $datos->getSetecLugardondeExaminado());
    $insert->bindValue('setecnombreEmpresaLugar1', $datos->getSetecnombreEmpresaLugar());
    $insert->bindValue('setecdireccionEmpresa1', $datos->getSetecdireccionEmpresa());
    $insert->bindValue('setecTelefonoEmpresa1', $datos->getSetecTelefonoEmpresa());
    $insert->bindValue('seteccertificacionOculto1', $datos->getSeteccertificacionOculto());
    $insert->bindValue('seteccertificacionAccion1', $datos->getSeteccertificacionAccion());
    $insert->bindValue('seteccertificacionfecha1', $datos->getSeteccertificacionfecha());
    $insert->bindValue('seteccertificacionuser1', $datos->getSeteccertificacionuser());

    $insert->execute();
  }

  public function actualizar($datos)
  {
    $db = Db::conectar();

    $actualizar = $db->prepare("UPDATE `seteccertificacion`
    SET
    `idsetecCertificacion` = :idsetecCertificacion1,
    `fkidsetecperfil` = :fkidsetecperfil1,
    `fechaprueba` = :fechaprueba1,
    `horaprueba` = :horaprueba1,
    `costoCertidicacion` = :costoCertidicacion1,
    `setecLugardondeExaminado` = :setecLugardondeExaminado1,
    `setecnombreEmpresaLugar` = :setecnombreEmpresaLugar1,
    `setecdireccionEmpresa` = :setecdireccionEmpresa1,
    `setecTelefonoEmpresa` = :setecTelefonoEmpresa1,
    `seteccertificacionOculto` = :seteccertificacionOculto1,
    `seteccertificacionAccion` = :seteccertificacionAccion1,
    `seteccertificacionfecha` = :seteccertificacionfecha1,
    `seteccertificacionuser` = :seteccertificacionuser1
    WHERE `idsetecCertificacion` = :idsetecCertificacion1;");
    $actualizar->bindValue('idsetecCertificacion1', $datos->getIdsetecCertificacion());
    $actualizar->bindValue('fkidsetecperfil1', $datos->getFkidsetecperfil());
    $actualizar->bindValue('fechaprueba1', $datos->getFechaprueba());
    $actualizar->bindValue('horaprueba1', $datos->getHoraprueba());
    $actualizar->bindValue('costoCertidicacion1', $datos->getCostoCertidicacion());
    $actualizar->bindValue('setecLugardondeExaminado1', $datos->getSetecLugardondeExaminado());
    $actualizar->bindValue('setecnombreEmpresaLugar1', $datos->getSetecnombreEmpresaLugar());
    $actualizar->bindValue('setecdireccionEmpresa1', $datos->getSetecdireccionEmpresa());
    $actualizar->bindValue('setecTelefonoEmpresa1', $datos->getSetecTelefonoEmpresa());
    $actualizar->bindValue('seteccertificacionOculto1', $datos->getSeteccertificacionOculto());
    $actualizar->bindValue('seteccertificacionAccion1', $datos->getSeteccertificacionAccion());
    $actualizar->bindValue('seteccertificacionfecha1', $datos->getSeteccertificacionfecha());
    $actualizar->bindValue('seteccertificacionuser1', $datos->getSeteccertificacionuser());
    $actualizar->execute();
  }
  public function eliminar($id)
  {
    $db = Db::conectar();
    $eliminar = $db->prepare('DELETE FROM `seteccertificacion` WHERE idsetecCertificacion=:id');
    $eliminar->bindValue('id', $id);
    $eliminar->execute();
  }
}
