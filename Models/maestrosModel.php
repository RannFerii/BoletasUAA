<?php
class maestros_model{
    private $db;
    private $maestros;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->maestros=array();
    }
    public function get_maestros(){
        $consulta=$this->db->query("select * from maestros;");
        while($filas=$consulta->fetch_assoc()){
            $this->maestros[]=$filas;
        }
        return $this->maestros;
    }
}
?>