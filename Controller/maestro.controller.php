<?php
require_once 'model/maestro.php';

class MaestroController{

    private $model;
    private $errorMessage;

    public function __CONSTRUCT(){
        $this->model = new maestro();
         $this->errorMessage ="";
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/index.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Reporte(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/reportes.php';
        require_once 'Views/footer/dataTableReport.php';
    }

    public function Crud(){
        $maestro = new maestro();

        if(isset($_REQUEST['maestroId'])){
            $maestro = $this->model->Obtener($_REQUEST['maestroId']);
        }

        require_once 'Views/header.php';
        require_once 'Views/maestro/Editar.php';
        require_once 'Views/footer.php';
    }

    public function Agregar(){
        $maestro = new maestro();

        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/agregar.php';
        require_once 'Views/footer/form.php';
    }

    public function Guardar(){
        $maestro = new maestro();

        $maestro->nombre = $_REQUEST['nombre'];
        $maestro->apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $maestro->apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $maestro->email = $_REQUEST['email'];
        $maestro->telefono = $_REQUEST['telefono'];

        $this->model->Registrar($maestro);
        // try
        // {
        //     $this->model->Registrar($maestro);
        // }
        // catch(Exception $e)
        // {
        //      return   $e->getMessage();
        // }

        

        header('Location: index.php?c=maestro');
    }

    public function Editar(){
        $maestro = new maestro();

        $maestro->maestroId = $_REQUEST['maestroId'];
        $maestro->nombre = $_REQUEST['nombre'];
        $maestro->apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $maestro->apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $maestro->email = $_REQUEST['email'];
        $maestro->telefono = $_REQUEST['telefono'];

        $this->model->Actualizar($maestro);

        header('Location: index.php?c=maestro');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['maestroId']);
        header('Location: index.php');
    }
}
