<?php
require_once 'model/producto.php';

class HomeController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new producto();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'Views/header.php';
        require_once 'Views/home/home.php';
        require_once 'Views/footer.php';
    }

  
}
