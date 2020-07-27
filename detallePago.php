<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/sandstone/bootstrap.min.css">
    <title>Detalle Pago</title>
</head>
<body>
<?php
 include('conexion.php');
 
$valor='';
$servicio='';
$cedula = $_POST['cedula'];

$nombre= '';
$_SESSION['cedula'] = $cedula;
$estado = $_POST['estado'];

$consulta = "SELECT * FROM usuario WHERE cedula='$cedula'";
    $resul = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resul)) {
        
        $nombre = $fila['nombre'];
        $servicio = $fila['servicio'];
        $valor = $fila['valor'];

    }

    // transacciones exitosas
    $cantidad = 0;
    $dato_produ = "SELECT * FROM transacciones_exitosas";
    $r2 = $conexion->query($dato_produ);
    
    foreach ($r2 as $r1) {
        $cantidad++;
    }
    
    $total_tiempo = "SELECT * FROM transacciones_exitosas WHERE `transacciones_exitosas`.`id_temp` = " . $cantidad . ";";
    $r3 = $conexion->query($total_tiempo);
    $row2 = $r3->fetch_assoc();
    echo $fecha = date("H:i:s");
    $porciones = explode(":", $fecha);
    
    
          $porciones[1]; 
          $seg1=$porciones[1] + $porciones[2]/60; 
          $seg2=$seg1*60;
    
    if($row2["estado"]!="Tiempo_total"){
       $seg =($seg2-$row2["tiempo"]);
    
    $q = "UPDATE  `transacciones_exitosas` SET `tiempo`='" . $seg . "'" . ", `estado` = 'Tiempo_total' WHERE `transacciones_exitosas`.`id_temp` = " . $cantidad . ";";
    //print_r($q);
    $resource = $conexion->query($q); 
    }
    //fin de conteo



$actualizar = " Update usuario Set estado='$estado' Where cedula='$cedula' ";
mysqli_query($conexion, $actualizar);
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
            <div class="card">
            <div class="card-header">
            <h2 class='alert alert-dismissible alert-success'>
                Gracias por usar nuestros servicios
            </h2>
            </div>
            </div>
            <div class="card bg-secondary">
            <div class="card-header">
            <h2 class='text-center'><b>Detalle del Pago</b>  </h2>
            </div>

            <div class="card-body">
            <div class="form-group">
            <b>Nombre:</b>
            <label class='form-control' for=""><?php echo $nombre ?></label>
            </div>
            <div class="form-group">
            <b>Servicio</b>
            <label class='form-control' for=""><?php echo $servicio ?></label>
            </div>
            <div class="form-group">
            <b>Valor</b>
            <label class='form-control' for="">$<?php echo $valor ?></label>
            </div>
            <div class="form-group">
            <b>Estado</b>
            <label class='form-control' for=""><?php echo $estado ?></label>
            </div>
            
            </div>
            </div>
            
            <hr>
            <a href='index.php' class="btn btn-primary btn-lg btn-block"><h4>Salir</h4></a>
            
            </div>
        </div>
    </div>

    <?php 
    
    
    ?>
</body>
</html>