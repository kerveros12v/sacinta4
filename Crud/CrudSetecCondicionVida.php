<?php

namespace Crud;

require_once('conexion.php');
require_once("../clasesphp/SetecCondicionVida.php");

use Clasesphp\SetecCondicionVida;

class CrudSetecCondicionVida
{
    // constructor de la clase
    public function __construct()
    {
        $db = Db::conectar();
        $select = $db->query("SET NAMES 'utf8'");
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listasetec = null;
        $select = $db->query("SELECT * FROM `setecCondiciondeVida`");
        foreach ($select->fetchAll() as $datos) {
            $mydatos = new SetecCondicionVida();
            //, , , , , , , , , , , ,
            $mydatos->setIdSetecCondiciondeVida($datos['idSetecCondiciondeVida']);
            $mydatos->setSetecCondiciondeVidaCedula($datos['setecCondiciondeVidaCedula']);
            $mydatos->setSetecCondiciondeVidaFecha($datos['setecCondiciondeVidaFecha']);
            $mydatos->setSetecjefehogar($datos['setecjefehogar']);
            $mydatos->setSetecseguromedico($datos['setecseguromedico']);
            $mydatos->setSetecnumhijos($datos['setecnumhijos']);
            $mydatos->setSetechijomayor($datos['setechijomayor']);
            $mydatos->setSetecAsistenciaInstitucion($datos['setecAsistenciaInstitucion']);
            $mydatos->setSetecvivienda($datos['setecvivienda']);
            $mydatos->setSetecMienbrosHogar($datos['setecMienbrosHogar']);
            $mydatos->setSetecLuz($datos['setecLuz']);
            $mydatos->setSetecAgua($datos['setecAgua']);
            $mydatos->setSetecInternet($datos['setecInternet']);

            ////
            $listasetec[] = $mydatos;
        }
        return $listasetec;
    }
    public function obtenersetec($cedula, $fecha)
    {
        $db = Db::conectar();
        $select = $db->prepare("SELECT * FROM `setecCondiciondeVida` WHERE `setecCondiciondeVidaCedula`=:id AND setecCondiciondeVidaFecha=:fecha;");
        $select->bindValue('id', $cedula);
        $select->bindValue('fecha', $fecha);
        $select->execute();
        $datos = $select->fetch();
        $mydatos = new SetecCondicionVida();
        ///
        $mydatos->setIdSetecCondiciondeVida($datos['idSetecCondiciondeVida']);
        $mydatos->setSetecCondiciondeVidaCedula($datos['setecCondiciondeVidaCedula']);
        $mydatos->setSetecCondiciondeVidaFecha($datos['setecCondiciondeVidaFecha']);
        $mydatos->setSetecjefehogar($datos['setecjefehogar']);
        $mydatos->setSetecseguromedico($datos['setecseguromedico']);
        $mydatos->setSetecnumhijos($datos['setecnumhijos']);
        $mydatos->setSetechijomayor($datos['setechijomayor']);
        $mydatos->setSetecAsistenciaInstitucion($datos['setecAsistenciaInstitucion']);
        $mydatos->setSetecvivienda($datos['setecvivienda']);
        $mydatos->setSetecMienbrosHogar($datos['setecMienbrosHogar']);
        $mydatos->setSetecLuz($datos['setecLuz']);
        $mydatos->setSetecAgua($datos['setecAgua']);
        $mydatos->setSetecInternet($datos['setecInternet']);
        return $mydatos;
    }

    public function insertar($datos)
    {
        $db = Db::conectar();
        $insert = $db->prepare("INSERT INTO `setecCondiciondeVida`
        (`idSetecCondiciondeVida`,
        `setecCondiciondeVidaCedula`,
        `setecCondiciondeVidaFecha`,
        `setecjefehogar`,
        `setecseguromedico`,
        `setecnumhijos`,
        `setechijomayor`,
        `setecAsistenciaInstitucion`,
        `setecvivienda`,
        `setecMienbrosHogar`,
        `setecLuz`,
        `setecAgua`,
        `setecInternet`)
        VALUES
        (:idSetecCondiciondeVida1,
        :setecCondiciondeVidaCedula1,
        :setecCondiciondeVidaFecha1,
        :setecjefehogar1,
        :setecseguromedico1,
        :setecnumhijos1,
        :setechijomayor1,
        :setecAsistenciaInstitucion1,
        :setecvivienda1,
        :setecMienbrosHogar1,
        :setecLuz1,
        :setecAgua1,
        :setecInternet1);");
        $insert->bindValue('idSetecCondiciondeVida1', $datos->getIdSetecCondiciondeVida());
        $insert->bindValue('setecCondiciondeVidaCedula1', $datos->getSetecCondiciondeVidaCedula());
        $insert->bindValue('setecCondiciondeVidaFecha1', $datos->getSetecCondiciondeVidaFecha());
        $insert->bindValue('setecjefehogar1', $datos->getSetecjefehogar());
        $insert->bindValue('setecseguromedico1', $datos->getSetecseguromedico());
        $insert->bindValue('setecnumhijos1', $datos->getSetecnumhijos());
        $insert->bindValue('setechijomayor1', $datos->getSetechijomayor());
        $insert->bindValue('setecAsistenciaInstitucion1', $datos->getSetecAsistenciaInstitucion());
        $insert->bindValue('setecvivienda1', $datos->getSetecvivienda());
        $insert->bindValue('setecMienbrosHogar1', $datos->getSetecMienbrosHogar());
        $insert->bindValue('setecLuz1', $datos->getSetecLuz());
        $insert->bindValue('setecAgua1', $datos->getSetecAgua());
        $insert->bindValue('setecInternet1', $datos->getSetecInternet());

        $insert->execute();
    }
    public  function existe($id)
    {
        $db = Db::conectar();
        $select = $db->prepare("SELECT * FROM setecCondiciondeVidaCedula where idSetecCondiciondeVida=:id ;");
        $select->bindValue('id', $id);
        $select->execute();
        if ($select->fetch() == 0) return 0;
        return 1;
    }
    public function actualizar($datos)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare("UPDATE `setecCondiciondeVida`
        SET
        `idSetecCondiciondeVida` = :idSetecCondiciondeVida1,
        `setecCondiciondeVidaCedula` = :setecCondiciondeVidaCedula1,
        `setecCondiciondeVidaFecha` = :setecCondiciondeVidaFecha1,
        `setecjefehogar` = :setecjefehogar1,
        `setecseguromedico` = :setecseguromedico1,
        `setecnumhijos` = :setecnumhijos1,
        `setechijomayor` = :setechijomayor1,
        `setecAsistenciaInstitucion` = :setecAsistenciaInstitucion1,
        `setecvivienda` = :setecvivienda1,
        `setecMienbrosHogar` = :setecMienbrosHogar1,
        `setecLuz` = :setecLuz1,
        `setecAgua` = :setecAgua1,
        `setecInternet` = :setecInternet1
        WHERE `idSetecCondiciondeVida` = :idSetecCondiciondeVida1;");
        $actualizar->bindValue('idSetecCondiciondeVida1', $datos->getIdSetecCondiciondeVida());
        $actualizar->bindValue('setecCondiciondeVidaCedula1', $datos->getSetecCondiciondeVidaCedula());
        $actualizar->bindValue('setecCondiciondeVidaFecha1', $datos->getSetecCondiciondeVidaFecha());
        $actualizar->bindValue('setecjefehogar1', $datos->getSetecjefehogar());
        $actualizar->bindValue('setecseguromedico1', $datos->getSetecseguromedico());
        $actualizar->bindValue('setecnumhijos1', $datos->getSetecnumhijos());
        $actualizar->bindValue('setechijomayor1', $datos->getSetechijomayor());
        $actualizar->bindValue('setecAsistenciaInstitucion1', $datos->getSetecAsistenciaInstitucion());
        $actualizar->bindValue('setecvivienda1', $datos->getSetecvivienda());
        $actualizar->bindValue('setecMienbrosHogar1', $datos->getSetecMienbrosHogar());
        $actualizar->bindValue('setecLuz1', $datos->getSetecLuz());
        $actualizar->bindValue('setecAgua1', $datos->getSetecAgua());
        $actualizar->bindValue('setecInternet1', $datos->getSetecInternet());
        $actualizar->execute();
    }

    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM `SetecCondiciondeVida` WHERE idSetecCondiciondeVida=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }
}
