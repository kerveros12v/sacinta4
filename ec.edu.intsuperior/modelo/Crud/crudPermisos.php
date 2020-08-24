<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/Permisos.php");
require_once("../clasesphp/AccesoDepartamentos.php");
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
      $mypermisos->set_codigo($permiso['accesodepartamentocodigo']);
      $mypermisos->set_etiqueta($mydepartamento);
      $mypermisos->set_tusuario($mytipousuario);
      $mypermisos->set_url($myurl);
      $mypermisos->set_codDepartamento($permiso['departamentos_iddepartamentos']);
      $mypermisos->set_departamentosSubdivision($mydepartamentosubdivision);
      $listapermisos[] = $mypermisos;
    }

    return $listapermisos;
  }
  public function listaaccesospermisoscodigo(){

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
      $mydepartamento = ($permiso['departamentos_iddepartamentos']);
      $mytipousuario = $this->mostrarTipoUsuario($permiso['tipousuario_idtipousuario']);
      $myurl = $this->mostrarUrl($permiso['departamentos_iddepartamentos']);
      $mydepartamentosubdivision = $this->mostrarSubDepartamentoporId($permiso['departamentos_iddepartamentos']);
      $mypermisos->set_codigo($permiso['accesodepartamentocodigo']);
      $mypermisos->set_etiqueta($mydepartamento);
      $mypermisos->set_tusuario($mytipousuario);
      $mypermisos->set_url($myurl);
      $mypermisos->set_codDepartamento($permiso['departamentos_iddepartamentos']);
      $mypermisos->set_departamentosSubdivision($mydepartamentosubdivision);
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
      $mydepartamento =($permiso['departamentos_iddepartamentos']);
      $mytipousuario = ($permiso['tipousuario_idtipousuario']);
      $mypermisos->set_accesodepartamentocodigo($permiso['accesodepartamentocodigo']);
      $mypermisos->set_departamentos_iddepartamentos($mydepartamento);
      $mypermisos->set_tipousuario_idtipousuario($mytipousuario);
      $mypermisos->set_idaccesodepartamento($permiso['idaccesodepartamento']);

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
  public function mostrardepartamentosparametro($id){

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
