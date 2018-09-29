<?php
    require_once 'model/grupo.php';
    require_once 'BLL/gruposBLL.php';

    class GrupoController{
        private $model;
        private $BLL;

        public function __CONSTRUCT(){
            $this->model = new grupo();
            $this->BLL = new gruposBLL();
        }

        //Vista por default
        public function Index(){
            require_once 'Views/header/dataTableReport.php';
            require_once 'Views/grupo/index.php';
            require_once 'Views/footer/dataTableReport.php';
         }

        public function Reporte(){
            require_once 'Views/header/dataTableReport.php';
            require_once 'Views/grupo/reportes.php';
            require_once 'Views/footer/dataTableReport.php';
        }
    
        public function Crud(){
            $grupo = new grupo();
            if(isset($_REQUEST['grupoId'])) {
                $grupo = $this->model->Obtener($_REQUEST['grupoId']);
            }
    
            require_once 'Views/header/dataTableReport.php';
            require_once 'Views/grupo/Editar.php';
            require_once 'Views/footer/dataTableReport.php';
        }

        public function Agregar(){
            $grupo = new grupo();
    
            require_once 'Views/header/dataTableReport.php';
            require_once 'Views/grupo/agregar.php';
            require_once 'Views/footer/form.php';
        }
    
        public function Guardar(){
            $grupo = new grupo();
           
            $grupo->nombreGrupo = $_REQUEST['nombreGrupo'];
    
            $actionResult= "";
            if($this->BLL->checkNombre($grupo->nombreGrupo)==true)
            {
                $actionResult='Location: index.php?c=grupo&a=Agregar';
                
            }else
            {
                $this->model->Registrar($grupo);
                 $actionResult='Location: index.php?c=grupo';
            }
            
            header($actionResult);
           
        }

        public function Editar(){
            $grupo = new grupo();
    
            $grupo->grupoId = $_REQUEST['grupoId'];
            $grupo->nombreGrupo = $_REQUEST['nombreGrupo'];
   
            $this->model->Actualizar($grupo);
    
            header('Location: index.php?c=grupo');
        }
    
        public function Eliminar(){
            $this->model->Eliminar($_REQUEST['grupoId']);
            header('Location: index.php');
        }
    }