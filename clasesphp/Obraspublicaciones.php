<?php
namespace Clasesphp;

class Obraspublicaciones
{
private $obrasPublicacionescId;
private $fkpubRevistasCienInIndexadasId;
private $fknumPubRevistasCientifIndexadasId;
private $docentes_numeroIdentificacion;
public function set_obrasPublicacionescId($obrasPublicacionescId){$this->obrasPublicacionescId=$obrasPublicacionescId;}
public function get_obrasPublicacionescId(){return $this->obrasPublicacionescId;}
public function set_fkpubRevistasCienInIndexadasId($fkpubRevistasCienInIndexadasId){$this->fkpubRevistasCienInIndexadasId=$fkpubRevistasCienInIndexadasId;}
public function get_fkpubRevistasCienInIndexadasId(){return $this->fkpubRevistasCienInIndexadasId;}
public function set_fknumPubRevistasCientifIndexadasId($fknumPubRevistasCientifIndexadasId){$this->fknumPubRevistasCientifIndexadasId=$fknumPubRevistasCientifIndexadasId;}
public function get_fknumPubRevistasCientifIndexadasId(){return $this->fknumPubRevistasCientifIndexadasId;}
public function set_docentes_numeroIdentificacion($docentes_numeroIdentificacion){$this->docentes_numeroIdentificacion=$docentes_numeroIdentificacion;}
public function get_docentes_numeroIdentificacion(){return $this->docentes_numeroIdentificacion;}

}
?>