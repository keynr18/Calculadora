<?php

  require_once 'Controlador/vistaControlador.php';

  $plantilla = new vistaControlador();
  //$plantilla->obtenerPlantillaControlador();
  $vista = $plantilla->obtenerVistaControlador();

  if ($vista == "vistacalculadora") {

  	require_once 'Vista/vistacalculadora.php';
 
  }else{
   
  session_start();
  require_once $vista;
  }
  
?> 