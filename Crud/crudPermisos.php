<?php

namespace Crud;

require_once("conexion.php");
require_once("../ec.edu.intsuperior/modelo/clasesphp/Permisos.php");
require_once("../ec.edu.intsuperior/modelo/clasesphp/AccesoDepartamentos.php");

use Clasesphp\AccesoDepartamentos;
use Crud\Db;
use Clasesphp\Permisos;

class CrudPermisos
{
  public function __construct()
  {
  }
  public function mostrar()
  {
    $db = Db::conectar();
    $listapermisos = null;
    $select = $db->query("SELECT * FROM accesodepartamento");
    foreach ($select->fetchAll() as $permiso) {
      $mypermisos = new Permisos();
      $mydepartamento = $this->mostrarDepartamento($permiso['departamentos_iddepartamentos']);
      $mytipousuario = $this->mostrarTipoUsuario($permiso['tipousuario_idtipousuario']);
      $myurl = $this->mostrarUrl($permiso['departamentos_iddepartamentos']);
      $mydepartamentosubdivision = $this->mostrarSubDepartamentoporId($permiso['departamentos_iddepartamentos']);
      $mypermisos->setCodigo($permiso['accesodepartamentocodigo']);
      $mypermisos->setEtiqueta($mydepartamento);
      $mypermisos->setTusuario($mytipousuario);
      $mypermisos->setUrl($myurl);
      $mypermisos->setCodDepartamento($permiso['departamentos_iddepartamentos']);
      $mypermisos->setDepartamentosSubdivision($mydepartamentosubdivision);
      $listapermisos[] = $mypermisos;
    }

    return $listapermisos;
  }
  public function listaaccesospermisoscodigo()
  {

    $db = Db::conectar();
    $listapermisos = null;
    $select = $db->query(" SELECT accesodepartamentocodigo FROM accesodepartamento GROUP BY accesodepartamentocodigo;");
    foreach ($select->fetchAll() as $permiso) {
      $listapermisos[] = $permiso['accesodepartamentocodigo'];
    }

    return $listapermisos;
  }
  public function mostrarPermiso($id)
  {
    $db = Db::conectar();
    $listapermisos = null;
    $select = $db->prepare("SELECT * FROM accesodepartamento WHERE accesodepartamentocodigo=:id;");
    $select->bindValue('id', $id);
    $select->execute();
    foreach ($select->fetchAll() as $permiso) {
      $mypermisos = new Permisos();
      $mydepartamento = $this->mostrarDepartamento($permiso['departamentos_iddepartamentos']);
      $mytipousuario = $this->mostrarTipoUsuario($permiso['tipousuario_idtipousuario']);
      $myurl = $this->mostrarUrl($permiso['departamentos_iddepartamentos']);
      $mydepartamentosubdivision = $this->mostrarSubDepartamentoporId($permiso['departamentos_iddepartamentos']);
      $mypermisos->setCodigo($permiso['accesodepartamentocodigo']);
      $mypermisos->setEtiqueta($mydepartamento);
      $mypermisos->setTusuario($mytipousuario);
      $mypermisos->setUrl($myurl);
      $mypermisos->setCodDepartamento($permiso['departamentos_iddepartamentos']);
      $mypermisos->setDepartamentosSubdivision($mydepartamentosubdivision);
      $listapermisos[] = $mypermisos;
    }

    return $listapermisos;
  }
  public function mostrarAccessoPermiso($id)
  {
    $db = Db::conectar();
    $listapermisos = null;
    $select = $db->prepare("SELECT * FROM accesodepartamento WHERE accesodepartamentocodigo=:id;");
    $select->bindValue('id', $id);
    $select->execute();
    foreach ($select->fetchAll() as $permiso) {
      $mypermisos = new AccesoDepartamentos();
      $mydepartamento = ($permiso['departamentos_iddepartamentos']);
      $mytipousuario = ($permiso['tipousuario_idtipousuario']);
      $mypermisos->setAccesodepartamentocodigo($permiso['accesodepartamentocodigo']);
      $mypermisos->setDepartamentos_iddepartamentos($mydepartamento);
      $mypermisos->setTipousuario_idtipousuario($mytipousuario);
      $mypermisos->setIdaccesodepartamento($permiso['idaccesodepartamento']);

      $listapermisos[] = $mypermisos;
    }

    return $listapermisos;
  }
  private function mostrarTipoUsuario($id)
  {
    $db = Db::conectar();
    $select = $db->prepare("SELECT tipousuariocodigo FROM tipousuario  WHERE idtipousuario=:id;");
    $select->bindValue('id', $id);
    $select->execute();
    $permiso = $select->fetch();
    $mypermisos = $permiso['tipousuariocodigo'];

    return $mypermisos;
  }
  public function mostrarUrl($id)
  {
    $db = Db::conectar();
    $select = $db->prepare("SELECT `url` from departamentos  WHERE iddepartamentos=:id ;");
    $select->bindValue('id', $id);
    $select->execute();
    $permiso = $select->fetch();
    $mypermisos = $permiso['url'];

    return $mypermisos;
  }
  public function mostrarDepartamento($id)
  {

    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM `departamentos` WHERE iddepartamentos=:id ORDER BY `iddepartamentos`  ASC;");
    $select->bindValue('id', $id);
    $select->execute();
    $lst1 = null;
    $p = ($select->fetch());
    $lst1 = ($p['departamento']);

    return $lst1;
  }
  public function mostrarSubDepartamentoporId($id)
  {

    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM `departamentos` WHERE iddepartamentos= :id ;");
    $select->bindValue('id', $id);
    $select->execute();
    $lst1 = null;
    $p = ($select->fetch());
    $lst1 = ($p['departamentosSubdivision']);
    return $lst1;
  }
  public function mostrardepartamentosparametro($id)
  {

    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM `departamentos` WHERE iddepartamentos=:id ORDER BY `iddepartamentos`  ASC;");
    $select->bindValue('id', $id);
    $select->execute();
    $lst1 = null;
    $p = ($select->fetch());
    $lst1 = ($p['departamentosparametro']);

    return $lst1;
  }
}
