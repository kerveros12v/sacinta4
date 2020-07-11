<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/TipoUsuario.php");

use Clasesphp\TipoUsuario;

class CrudTipoUsuario
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
        $listatipousuario = null;
        $select = $db->query("SELECT * FROM tipousuario;");
        foreach ($select->fetchAll() as $tipousuario) {
            $mytipousuario = new TipoUsuario();
            $mytipousuario->set_idtipousuario($tipousuario['idtipousuario']);
            $mytipousuario->set_tipousuariocodigo($tipousuario['tipousuariocodigo']);
            $mytipousuario->set_tipousuario($tipousuario['tipousuario']);
            $mytipousuario->set_tipousuarioOculto($tipousuario['tipousuarioOculto']);
            $mytipousuario->set_tipousuarioAccion($tipousuario['tipousuarioAccion']);
            $mytipousuario->set_tipousuariofecha($tipousuario['tipousuariofecha']);
            $mytipousuario->set_tipousuariouser($tipousuario['tipousuariouser']);
            $mytipousuario->set_tipousuariopemisos($tipousuario['tipousuariopemisos']);
            $listatipousuario[] = $mytipousuario;
        }
        return $listatipousuario;
    }
    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM `tipousuario` WHERE `idtipousuario`= :id;');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }
    public function obtenerUsuario($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM tipousuario  WHERE `idtipousuario`= :id;');
        $select->bindValue('id', $id);
        $select->execute();
        $tipousuario = $select->fetch();
        $mytipousuario = new TipoUsuario();
        $mytipousuario->set_idtipousuario($tipousuario['idtipousuario']);
        $mytipousuario->set_tipousuariocodigo($tipousuario['tipousuariocodigo']);
        $mytipousuario->set_tipousuario($tipousuario['tipousuario']);
        $mytipousuario->set_tipousuarioOculto($tipousuario['tipousuarioOculto']);
        $mytipousuario->set_tipousuarioAccion($tipousuario['tipousuarioAccion']);
        $mytipousuario->set_tipousuariofecha($tipousuario['tipousuariofecha']);
        $mytipousuario->set_tipousuariouser($tipousuario['tipousuariouser']);
        $mytipousuario->set_tipousuariopemisos($tipousuario['tipousuariopemisos']);
        return $mytipousuario;
    }
    public function obtenerDato($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM tipousuario  WHERE `idtipousuario`= :id;');
        $select->bindValue('id', $id);
        $select->execute();
        $tipousuario = $select->fetch();
        $mytipousuario = ($tipousuario['tipousuario']);

        return $mytipousuario;
    }
    public function actualizar($tipousuario)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE `tipousuario`
        SET
        `idtipousuario` = :idtipousuario1,
        `tipousuariocodigo` = :tipousuariocodigo1,
        `tipousuario` = :tipousuario1,
        `tipousuariopemisos` = :tipousuariopemisos1,
        `tipousuarioOculto` = :tipousuarioOculto1,
        `tipousuarioAccion` = :tipousuarioAccion1,
        `tipousuariofecha` = :tipousuariofecha1,
        `tipousuariouser` = :tipousuariouser1
        WHERE `idtipousuario` = :idtipousuario1;
			');
        $actualizar->bindValue('idtipousuario1', $tipousuario->get_idtipousuario());
        $actualizar->bindValue('tipousuariocodigo1', $tipousuario->get_tipousuariocodigo());
        $actualizar->bindValue('tipousuario1', $tipousuario->get_tipousuario());
        $actualizar->bindValue('tipousuarioOculto1', $tipousuario->get_tipousuarioOculto());
        $actualizar->bindValue('tipousuarioAccion1', $tipousuario->get_tipousuarioAccion());
        $actualizar->bindValue('tipousuariofecha1', $tipousuario->get_tipousuariofecha());
        $actualizar->bindValue('tipousuariouser1', $tipousuario->get_tipousuariouser());
        $actualizar->bindValue('tipousuariopemisos1', $tipousuario->get_tipousuariopemisos());
        $actualizar->execute();
    }
    public function insertar($tipousuario)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO `tipousuario`
        (`idtipousuario`,
        `tipousuariocodigo`,
        `tipousuario`,
        `tipousuariopemisos`,
        `tipousuarioOculto`,
        `tipousuarioAccion`,
        `tipousuariofecha`,
        `tipousuariouser`)
        VALUES
        (:idtipousuario1,
        :tipousuariocodigo1,
        :tipousuario1,
        :tipousuariopemisos1,
        :tipousuarioOculto1,
        :tipousuarioAccion1,
        :tipousuariofecha1,
        :tipousuariouser1);
        ');

        $insert->bindValue('idtipousuario1', $tipousuario->get_idtipousuario());
        $insert->bindValue('tipousuariocodigo1', $tipousuario->get_tipousuariocodigo());
        $insert->bindValue('tipousuario1', $tipousuario->get_tipousuario());
        $insert->bindValue('tipousuarioOculto1', $tipousuario->get_tipousuarioOculto());
        $insert->bindValue('tipousuarioAccion1', $tipousuario->get_tipousuarioAccion());
        $insert->bindValue('tipousuariofecha1', $tipousuario->get_tipousuariofecha());
        $insert->bindValue('tipousuariouser1', $tipousuario->get_tipousuariouser());
        $insert->bindValue('tipousuariopemisos1', $tipousuario->get_tipousuariopemisos());

        $insert->execute();
    }
}
