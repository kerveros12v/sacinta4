<?php

namespace Crud;

require_once("conexion.php");
require_once("../clasesphp/PermisosDepartamentos.php");

use Crud\Db;
use Clasesphp\PermisosDepartamentos;

class CrudPermisosDepartamentos
{
  public function __construct()
  {
  }
  public function mostrar()
  {
    $db = Db::conectar();
    $listapermisos = null;
    $select = $db->query("SELECT * FROM departamentos");
    foreach ($select->fetchAll() as $permiso) {
      $mypermisosdep = new PermisosDepartamentos();
      $mypermisosdep->set_iddepartamentos($permiso['iddepartamentos']);
      $mypermisosdep->set_departamento($permiso['departamento']);
      $mypermisosdep->set_departamentosSubdivision($permiso['departamentosSubdivision']);
      $mypermisosdep->set_url($permiso['url']);
      $mypermisosdep->set_departamentosparametro($permiso['departamentosparametro']);
      $mypermisosdep->set_departamentosOculto($permiso['departamentosOculto']);
      $mypermisosdep->set_departamentosAccion($permiso['departamentosAccion']);
      $mypermisosdep->set_departamentosfecha($permiso['departamentosfecha']);
      $mypermisosdep->set_departamentosuser($permiso['departamentosuser']);
      $listapermisos[] = $mypermisosdep;
    }

    return $listapermisos;
  }

  public function mostrarpordepartamentosSubdivision($id)
  {

    $db = Db::conectar();
    $listapermisos = null;
    $select = $db->prepare("SELECT * FROM departamentos WHERE departamentosSubdivision=:id AND departamentosOculto=0;");
    $select->bindValue('id', $id);
    $select->execute();
    foreach ($select->fetchAll() as $permiso) {
      $mypermisosdep = new PermisosDepartamentos();
      $mypermisosdep->set_iddepartamentos($permiso['iddepartamentos']);
      $mypermisosdep->set_departamento($permiso['departamento']);
      $mypermisosdep->set_departamentosSubdivision($permiso['departamentosSubdivision']);
      $mypermisosdep->set_url($permiso['url']);
      $mypermisosdep->set_departamentosparametro($permiso['departamentosparametro']);
      $mypermisosdep->set_departamentosOculto($permiso['departamentosOculto']);
      $mypermisosdep->set_departamentosAccion($permiso['departamentosAccion']);
      $mypermisosdep->set_departamentosfecha($permiso['departamentosfecha']);
      $mypermisosdep->set_departamentosuser($permiso['departamentosuser']);
      $listapermisos[] = $mypermisosdep;
    }
  }
  public function mostrarDepartamento($id)
  {
    $db = Db::conectar();
    $select = $db->prepare("SELECT * FROM departamentos WHERE iddepartamentos=:id;");
    $select->bindValue('id', $id);
    $select->execute();
    $permiso = $select->fetch();
    $mypermisos = $permiso['departamento'];

    return $mypermisos;
  }
}
