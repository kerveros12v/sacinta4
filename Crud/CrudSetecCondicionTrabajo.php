<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecCondicionLaboral.php");

use Clasesphp\SeteCondicionLaboral;

class CrudSeteCondicionLaboral
{
    // constructor de la clase
    public function __construct()
    {
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listasetec = null;
        $select = $db->query("SELECT * FROM `SeteCondicionLaboral`");
        foreach ($select->fetchAll() as $datos) {
            $mydatos = new SeteCondicionLaboral();
            ///, , , , , , , , , , , , ,
            $mydatos->setEmpresa($datos['seteCondicionLaboralEmpresa']);
            $mydatos->setCedula($datos['seteCondicionLaboralCedula']);
            $mydatos->setFecharegistro($datos['seteCondicionLaboralFecharegistro']);
            $mydatos->setAcenso($datos['seteCondicionLaboralacenso']);
            $mydatos->setSatisfaccion($datos['seteCondicionLaboralsatisfaccion']);
            $mydatos->setAgotamiento($datos['seteCondicionLaboralAgotamiento']);
            $mydatos->setRespeto($datos['seteCondicionLaboralRespeto']);
            $mydatos->setReconocimiento($datos['seteCondicionLaboralReconocimiento']);
            $mydatos->setRiesgo($datos['seteCondicionLaboralRiesgo']);
            $mydatos->setCambio($datos['seteCondicionLaboralCambio']);
            $mydatos->setBonificacion($datos['seteCondicionLaboralBonificacion']);
            $mydatos->setTransporte($datos['seteCondicionLaboralTransporte']);
            $mydatos->setCapacitacion($datos['seteCondicionLaboralCapacitacion']);
            $mydatos->setIdSeteCondicionLaboral($datos['idSeteCondicionLaboral']);
            ////
            $listasetec[] = $mydatos;
        }
        return $listasetec;
    }
    public function obtenersetec($id, $fecha)
    {
        $db = Db::conectar();
        $select = $db->prepare("SELECT * FROM `SeteCondicionLaboral` WHERE `seteCondicionLaboralCedula`=:id AND seteCondicionLaboralFecharegistro=:fecha;");
        $select->bindValue('id', $id);
        $select->bindValue('fecha', $fecha);
        $select->execute();
        $datos = $select->fetch();
        $mydatos = new SeteCondicionLaboral();
        ///
        $mydatos->setEmpresa($datos['seteCondicionLaboralEmpresa']);
        $mydatos->setCedula($datos['seteCondicionLaboralCedula']);
        $mydatos->setFecharegistro($datos['seteCondicionLaboralFecharegistro']);
        $mydatos->setAcenso($datos['seteCondicionLaboralacenso']);
        $mydatos->setSatisfaccion($datos['seteCondicionLaboralsatisfaccion']);
        $mydatos->setAgotamiento($datos['seteCondicionLaboralAgotamiento']);
        $mydatos->setRespeto($datos['seteCondicionLaboralRespeto']);
        $mydatos->setReconocimiento($datos['seteCondicionLaboralReconocimiento']);
        $mydatos->setRiesgo($datos['seteCondicionLaboralRiesgo']);
        $mydatos->setCambio($datos['seteCondicionLaboralCambio']);
        $mydatos->setBonificacion($datos['seteCondicionLaboralBonificacion']);
        $mydatos->setTransporte($datos['seteCondicionLaboralTransporte']);
        $mydatos->setCapacitacion($datos['seteCondicionLaboralCapacitacion']);
        $mydatos->setIdSeteCondicionLaboral($datos['idSeteCondicionLaboral']);
        return $mydatos;
    }

    public function insertar($datos)
    {
        $db = Db::conectar();
        $insert = $db->prepare("INSERT INTO `SeteCondicionLaboral`
        (`idSeteCondicionLaboral`,
        `seteCondicionLaboralEmpresa`,
        `seteCondicionLaboralCedula`,
        `seteCondicionLaboralFecharegistro`,
        `seteCondicionLaboralacenso`,
        `seteCondicionLaboralsatisfaccion`,
        `seteCondicionLaboralAgotamiento`,
        `seteCondicionLaboralRespeto`,
        `seteCondicionLaboralReconocimiento`,
        `seteCondicionLaboralRiesgo`,
        `seteCondicionLaboralCambio`,
        `seteCondicionLaboralBonificacion`,
        `seteCondicionLaboralTransporte`,
        `seteCondicionLaboralCapacitacion`)
        VALUES
        (:idSeteCondicionLaboral1,
        :seteCondicionLaboralEmpresa1,
        :seteCondicionLaboralCedula1,
        :seteCondicionLaboralFecharegistro1,
        :seteCondicionLaboralacenso1,
        :seteCondicionLaboralsatisfaccion1,
        :seteCondicionLaboralAgotamiento1,
        :seteCondicionLaboralRespeto1,
        :seteCondicionLaboralReconocimiento1,
        :seteCondicionLaboralRiesgo1,
        :seteCondicionLaboralCambio1,
        :seteCondicionLaboralBonificacion1,
        :seteCondicionLaboralTransporte1,
        :seteCondicionLaboralCapacitacion1);");
        $insert->bindValue('idSeteCondicionLaboral1', $datos->getIdSeteCondicionLaboral());
        $insert->bindValue('seteCondicionLaboralEmpresa1', $datos->getEmpresa());
        $insert->bindValue('seteCondicionLaboralCedula1', $datos->getCedula());
        $insert->bindValue('seteCondicionLaboralFecharegistro1', $datos->getFecharegistro());
        $insert->bindValue('seteCondicionLaboralacenso1', $datos->getAcenso());
        $insert->bindValue('seteCondicionLaboralsatisfaccion1', $datos->getSatisfaccion());
        $insert->bindValue('seteCondicionLaboralAgotamiento1', $datos->getAgotamiento());
        $insert->bindValue('seteCondicionLaboralRespeto1', $datos->getRespeto());
        $insert->bindValue('seteCondicionLaboralReconocimiento1', $datos->getReconocimiento());
        $insert->bindValue('seteCondicionLaboralRiesgo1', $datos->getRiesgo());
        $insert->bindValue('seteCondicionLaboralCambio1', $datos->getCambio());
        $insert->bindValue('seteCondicionLaboralBonificacion1', $datos->getBonificacion());
        $insert->bindValue('seteCondicionLaboralTransporte1', $datos->getTransporte());
        $insert->bindValue('seteCondicionLaboralCapacitacion1', $datos->getCapacitacion());
        $insert->execute();
    }
    public function actualizar($datos)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare("UPDATE `SeteCondicionLaboral`
        SET
        `idSeteCondicionLaboral` = :idSeteCondicionLaboral1,
        `seteCondicionLaboralEmpresa` = :seteCondicionLaboralEmpresa1,
        `seteCondicionLaboralCedula` = :seteCondicionLaboralCedula1,
        `seteCondicionLaboralFecharegistro` = :seteCondicionLaboralFecharegistro1,
        `seteCondicionLaboralacenso` = :seteCondicionLaboralacenso1,
        `seteCondicionLaboralsatisfaccion` = :seteCondicionLaboralsatisfaccion1,
        `seteCondicionLaboralAgotamiento` = :seteCondicionLaboralAgotamiento1,
        `seteCondicionLaboralRespeto` = :seteCondicionLaboralRespeto1,
        `seteCondicionLaboralReconocimiento` = :seteCondicionLaboralReconocimiento1,
        `seteCondicionLaboralRiesgo` = :seteCondicionLaboralRiesgo1,
        `seteCondicionLaboralCambio` = :seteCondicionLaboralCambio1,
        `seteCondicionLaboralBonificacion` = :seteCondicionLaboralBonificacion1,
        `seteCondicionLaboralTransporte` = :seteCondicionLaboralTransporte1,
        `seteCondicionLaboralCapacitacion` = :seteCondicionLaboralCapacitacion1
        WHERE `idSeteCondicionLaboral` = :idSeteCondicionLaboral1;");
        $actualizar->bindValue('idSeteCondicionLaboral1', $datos->getIdSeteCondicionLaboral());
        $actualizar->bindValue('seteCondicionLaboralEmpresa1', $datos->getEmpresa());
        $actualizar->bindValue('seteCondicionLaboralCedula1', $datos->getCedula());
        $actualizar->bindValue('seteCondicionLaboralFecharegistro1', $datos->getFecharegistro());
        $actualizar->bindValue('seteCondicionLaboralacenso1', $datos->getAcenso());
        $actualizar->bindValue('seteCondicionLaboralsatisfaccion1', $datos->getSatisfaccion());
        $actualizar->bindValue('seteCondicionLaboralAgotamiento1', $datos->getAgotamiento());
        $actualizar->bindValue('seteCondicionLaboralRespeto1', $datos->getRespeto());
        $actualizar->bindValue('seteCondicionLaboralReconocimiento1', $datos->getReconocimiento());
        $actualizar->bindValue('seteCondicionLaboralRiesgo1', $datos->getRiesgo());
        $actualizar->bindValue('seteCondicionLaboralCambio1', $datos->getCambio());
        $actualizar->bindValue('seteCondicionLaboralBonificacion1', $datos->getBonificacion());
        $actualizar->bindValue('seteCondicionLaboralTransporte1', $datos->getTransporte());
        $actualizar->bindValue('seteCondicionLaboralCapacitacion1', $datos->getCapacitacion());
        $actualizar->execute();
    }
    public  function existe($id)
    {
        $db = Db::conectar();
        $select = $db->prepare("SELECT * FROM SeteCondicionLaboral where idSeteCondicionLaboral=:id ");
        $select->bindValue('id', $id);

        $select->execute();
        if ($select->fetch() == 0) return 0;
        return 1;
    }
    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM `SeteCondicionLaboral` WHERE idSeteCondicionLaboral=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }
}
