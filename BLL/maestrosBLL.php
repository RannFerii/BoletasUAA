<?php
require_once 'model/maestro.php';

class maestrosBLL{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new maestro();
    }

    //Verificar si existe un email existente
    public function checkEmail($email){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->email==$email)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }
}
