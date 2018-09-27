<?php
require_once 'model/fecha.php';

class fechasBLL{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new fecha();
    }

    //Validar que las fechas no sean nulas
    public function dateNotNull($fecha){
        $fechaBLL = new fecha();
        $fechaBLL=$fecha;
        if($fechaBLL->primerDepartamental = "0000-00-00")
        {
            $fechaBLL->primerDepartamental= "2001-01-01";
        }
         if($fechaBLL->segundoDepartamental = "0000-00-00")
        {
            $fechaBLL->segundoDepartamental= "2001-01-01";
        }
        if($fechaBLL->parcial = "0000-00-00")
        {
            $fechaBLL->parcial= "2001-01-01";
        }
         if($fechaBLL->finalA = "0000-00-00")
        {
            $fechaBLL->finalA= "2001-01-01";
        }
         if($fechaBLL->finalB = "0000-00-00")
        {
            $fechaBLL->finalB= "2001-01-01";
        }
        return $fechaBLL;
    }
}
