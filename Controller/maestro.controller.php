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

    //formulario  reutilizable
    public function FormAgregar($maestro){
        $maestro=$maestro;
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/agregar.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptValidation.php';
        require_once 'Views/footer/ScriptNotification.php';
        require_once 'Views/footer/ScriptMessageError.php';
        require_once 'Views/footer/EndFooter.php';
    }
    
    //formulario  reutilizable
    public function FormEditar($maestro){
       $maestro=$maestro;
        require_once 'Views/header/dataTableReport.php';
        require_once 'Views/maestro/editar.php';
        require_once 'Views/footer/BeginFooter.php';
        require_once 'Views/footer/ScriptValidation.php';
        require_once 'Views/footer/ScriptNotification.php';
        require_once 'Views/footer/ScriptMessageError.php';
        require_once 'Views/footer/EndFooter.php';
    }

    //Cargar formulario
    public function Agregar(){
        $maestro = new maestro();
        $this->FormAgregar($maestro);
    }

    //Guardar form 
    public function Guardar(){
        $maestro = new maestro();
        $maestro->nombre = $_REQUEST['nombre'];
        $maestro->apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $maestro->apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $maestro->email = $_REQUEST['email'];
        $maestro->telefono = $_REQUEST['telefono'];

        $actionResult= "";

        //Validaciones
        if($this->BLL->checkEmail($maestro->email)==true)
        {  
             $_SESSION['mensajeError'] = "Correo electrónico existente,prueba con otro";
             $actionResult='Location: index.php?c=maestro&a=Agregar';
        } 

        if($actionResult=="")
        {
            $this->model->Registrar($maestro);
             header('Location: index.php?c=maestro');

        }else
        {
            $this->FormAgregar($maestro);
        }
       
    }

    //Cargar Form
    public function Editar(){
        $maestro = new maestro();
        if(isset($_REQUEST['maestroId'])) {
            $maestro = $this->model->Obtener($_REQUEST['maestroId']);
        }
        $this->FormEditar($maestro);
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

        $actionResult= "";

         //Validaciones
        if($this->BLL->checkEditEmail($maestro->email,$maestro->maestroId)==true)
        {  
             $_SESSION['mensajeError'] = "Correo electrónico existente,prueba con otro";
             $actionResult='Location: index.php?c=maestro&a=Agregar';
        } 

        if($actionResult=="")
        {
            $this->model->Actualizar($maestro);
             header('Location: index.php?c=maestro');

        }else
        {
            $this->FormEditar($maestro);
        }
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['maestroId']);
        header('Location: index.php');
    }
}
