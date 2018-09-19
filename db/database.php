<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "123456", "prueba");
        $conexion->query("prueba'utf8'");
        return $conexion;
    }
}
?>