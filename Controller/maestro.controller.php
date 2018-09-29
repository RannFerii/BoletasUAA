<?php
require_once 'model/maestro.php';
require_once 'BLL/maestrosBLL.php';

class MaestroController{

    private $model;
    private $BLL;

    public function __CONSTRUCT(){
        $this->model = new maestro();
        $this->BLL = new maestrosBLL();
    }

    //Vista por default
    public function Index(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/index.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptDataTableReport.php';
        require_once 'Views/footer/ScriptButton.php';
        require_once 'Views/footer/ScriptSweetAlert.php';
        require_once 'Views/footer/EndFooter.php';
    }

    public function Reporte(){
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/reportes.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptDataTableReport.php';
        require_once 'Views/footer/EndFooter.php';
    }

    //Cargar formulario
    public function Agregar(){
        $maestro = new maestro();
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/agregar.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptValidation.php';
        require_once 'Views/footer/ScriptNotification.php';
        require_once 'Views/footer/ScriptMessageError.php';
        require_once 'Views/footer/EndFooter.php';
    }

    //Guardar form 
    public function Guardar(){
        session_start();
        $maestro = new maestro();
        $maestro->nombre = $_REQUEST['nombre'];
        $maestro->apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $maestro->apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $maestro->email = $_REQUEST['email'];
        $maestro->telefono = $_REQUEST['telefono'];

        $actionResult= "";
        if($this->BLL->checkEmail($maestro->email)==true)
        {
            $_SESSION['mensajeError'] = "correo electrónico existente,prueba con otro";
            $actionResult='Location: index.php?c=maestro&a=Agregar';
            
        }else
        {
            $this->model->Registrar($maestro);
             $actionResult='Location: index.php?c=maestro';
        }

        header($actionResult);
       
    }

    //Cargar Form
    public function Editar(){
        $maestro = new maestro();
        if(isset($_REQUEST['maestroId'])) {
            $maestro = $this->model->Obtener($_REQUEST['maestroId']);
        }
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/Editar.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptValidation.php';
        require_once 'Views/footer/ScriptNotification.php';
        require_once 'Views/footer/EndFooter.php';
    }

    //Guardar nuevos cambios
    public function Actualizar(){
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
