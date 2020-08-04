<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/sandstone/bootstrap.min.css">
<?php
require 'conexion.php';




//Consulta para transacciones exitosas en un tiempo determinado
$tiempo_realizado = "SELECT tiempo FROM `transacciones_exitosas` WHERE estado = 'Tiempo_total'";
$ejecuta2 = $conexion->query($tiempo_realizado);
$con=0;
while ($row = $ejecuta2->fetch_assoc()) {
    if($row['tiempo']<20){
       $con++; 
    }
}

echo "<h3 class='text-center'>15. Transacciones Exitosas</h3>";
$template = '
        <table class="table table-hover">
            <tr>
                <th>Detalle</th>
                <th>Cantidad</th>
            </tr>
            <tr>
                <td>Transacciòn exitosa</td>
                <td>%s</td>
            </tr>
';
printf($template,$con);






?>