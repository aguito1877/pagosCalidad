<?php
include './conexion.php';
$dato = $_POST['numero_cuenta_agua'];

$consul =mysqli_query($conexion, "SELECT * FROM usuario WHERE id = $dato AND servicio='agua'");

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