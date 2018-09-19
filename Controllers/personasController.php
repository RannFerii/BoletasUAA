<?php
//Llamada al modelo
require_once("Models/personasModel.php");
$per=new personas_model();
$datos=$per->get_personas();
 
//Llamada a la vista
require_once("Views/UpLayoutView.html");
require_once("Views/personasView.html");
require_once("Views/DownLayoutView.html");
?>