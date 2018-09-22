<?php
//Llamada al modelo
require_once("Models/maestrosModel.php");
$per=new maestros_model();
$datos=$per->get_maestros();
 
//Llamada a la vista
require_once("Views/UpLayoutView.html");
require_once("Views/maestrosView.html");
require_once("Views/DownLayoutView.html");
?>