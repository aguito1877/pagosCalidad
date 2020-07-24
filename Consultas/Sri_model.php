<?php
include './conexion.php';
$dato = $_POST['cedula'];

$consul =mysqli_query($conexion, "SELECT * FROM usuario WHERE cedula = $dato AND servicio='sri'");

$valor;
$estado;
if(mysqli_num_rows($consul)>0){

    while($row = mysqli_fetch_assoc($consul)){
           $valor = $row['valor'];
            $estado = $row['estado'];
    }
    
    if($estado =='pendiente'){
        echo "Su valor a pagar es: " . $valor;
    }else{
        echo "No tiene valores pendientes";
    }

}else{
    echo "No existe el usuario con ese dato";
}





?>