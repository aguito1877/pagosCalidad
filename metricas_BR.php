<link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/sandstone/bootstrap.min.css">
<?php
require 'conexion.php';

<<<<<<< HEAD
$consulta_tiempo = "SELECT id_temp,cliente,AVG(tiempo) FROM tmp_entre_paginas WHERE estado = 'Tiempo_total' GROUP BY cliente";
$ejecuta = $conexion->query($consulta_tiempo);

echo "<h3 class='text-center'>Tiempo promedio de transacción por usuario</h3>";
echo  "<table class='table table-hover'>
            <tr>
                <th>Cédula Usuario</th>
                <th>Tiempo Promedio</th>
            </tr>
";

while ($row = $ejecuta->fetch_assoc()) {
    echo  "<tr>";

    echo  "<td>". $row['cliente'] . "</td><td>".$row['AVG(tiempo)'] . " seg</td>";
    echo "</tr>";
};
echo"</table>";
=======

>>>>>>> 8c6bbcff876ef30bf8db96c183c9903f983a3d7c


//Consulta para transacciones exitosas en un tiempo determinado
$tiempo_realizado = "SELECT tiempo FROM `transacciones_exitosas` WHERE estado = 'Tiempo_total'";
$ejecuta2 = $conexion->query($tiempo_realizado);
$con=0;
while ($row = $ejecuta2->fetch_assoc()) {
    if($row['tiempo']<20){
       $con++; 
    }
}

<<<<<<< HEAD
echo "<h3 class='text-center'>Transacciones Exitosas</h3>";
=======
echo "<h3 class='text-center'>15. Transacciones Exitosas</h3>";
>>>>>>> 8c6bbcff876ef30bf8db96c183c9903f983a3d7c
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