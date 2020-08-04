<?php
include_once './conexion.php';
date_default_timezone_set('America/Bogota');
        
$mensaje=$_POST['mensaje'];
$cedula=$_POST['cedula'];
$fecha=date('d-m-Y H:i:s');
$consulta="INSERT INTO trans_abandonadas VALUES ('$mensaje','$fecha','$cedula')";
$conexion->query($consulta);
  

      
?>