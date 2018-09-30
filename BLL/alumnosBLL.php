<?php
require_once 'model/alumno.php';

class alumnosBLL{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new alumno();
    }

    //AGREGAR
    //Verificar si existe matriculaUAA repetida
    public function checkMatriculaUAA($matriculaUAA){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->matriculaUAA==$matriculaUAA)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }

    //Verificar si existe matriculaUAA repetida
    public function checkMatriculaUNAM($matriculaUNAM){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->matriculaUNAM==$matriculaUNAM)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }

    //Verificar si existe email repetido
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

    //EDITAR

    //Verificar si existe matriculaUAA repetida
    public function checkEditMatriculaUAA($matriculaUAA){
        $result=false;
        $cont=0;
            foreach($this->model->Listar() as $r):
                if($r->matriculaUAA==$matriculaUAA)
                {
                    $cont++;
                }
            endforeach;
            if($cont==2)
            {
                $result= true;
            }
        return $result;
    }

    //Verificar si existe matriculaUAA repetida
    public function checkEditMatriculaUNAM($matriculaUNAM,$matriculaUAA){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->matriculaUNAM==$matriculaUNAM && $r->matriculaUAA != $matriculaUAA)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }

    //Verificar si existe email repetido
    public function checkEditEmail($email,$matriculaUAA){
        $result=false;
            foreach($this->model->Listar() as $r):
                if($r->email==$email && $r->matriculaUAA != $matriculaUAA)
                {
                    $result= true;
                }
            endforeach;
        return $result;
    }
}
