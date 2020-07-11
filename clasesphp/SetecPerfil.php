<?php
namespace Clasesphp;

class SetecPerfil{
private $idsetecperfil, $setecperfilnombre;
public function __construct(){ }
public function set_idsetecperfil($idsetecperfil){$this->idsetecperfil=$idsetecperfil;}
public function set_setecperfilnombre($setecperfilnombre){$this->setecperfilnombre=$setecperfilnombre;}
public function get_idsetecperfil(){return $this->idsetecperfil;}
public function get_setecperfilnombre(){return $this->setecperfilnombre;}
public function formatoJSON(){
    $myarray=array(
        'idsetecperfil'=>$this->idsetecperfil,
        'setecperfilnombre'=>$this->setecperfilnombre
    );
    return json_encode($myarray);
}
}

?>