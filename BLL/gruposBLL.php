<?php
require_once 'model/grupo.php';

class gruposBLL{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new grupo();
    }

    //Verificar si existe un nombre existente
    public function checkNombre($nombreGrupo){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->nombreGrupo==$nombreGrupo)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }
}
