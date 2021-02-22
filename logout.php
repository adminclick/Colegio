<?php

session_start();

//insertar LogConect

echo "prueba";


require_once("db/db.php");
require_once 'models/Mlogin.php';
$idlogin = $_SESSION["idlogin"];
ini_set('date.timezone','America/Guatemala'); 
$fecha= date("Y-m-d");
$hora= date("H:i:s");
$fechor= date("Y-m-d H:i:s");
$accion= "Cerrar Sesión";
$rob1=new Mlogin();
$iniciar1=$rob1->set_logconect($idlogin, $fecha, $hora, $fechor, $accion);
$iniciar2=$rob1->set_StatusConect($idlogin, $fechor, 0);
		
//$_SESSION = array();

session_destroy();

$respuesta="";

 header("location:index.php");


 


?>
 