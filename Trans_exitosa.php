<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/sandstone/bootstrap.min.css">
</head>
<body>

<?php
require 'conexion.php';
$consulta_tiempo = "SELECT id_temp,cliente,AVG(tiempo) FROM transacciones_exitosas WHERE estado = 'Tiempo_total' GROUP BY cliente";
$ejecuta = $conexion->query($consulta_tiempo);


//Consulta de tiempo de transacciones exitosas

echo  "<table class='table table-hover'>
            <tr>
                <th>Cédula Usuario</th>
                <th>Tiempo Promedio</th>
            </tr>
";
$con=0;
$tiempo_total=0;
while ($row = $ejecuta->fetch_assoc()) 
{
    echo  "<tr>";

    echo  "<td>". $row['cliente'] . "</td><td>".$row['AVG(tiempo)'] . " seg</td>";
    $tiempo_total+=$row['AVG(tiempo)'];
    $con++;
    echo "</tr>";
};


echo "<tr><th align='center'>Tiempo General de Todas las transacciones</th>";
echo"<td><b>".$tiempo_total/$con." seg"."</b></td></tr>";
echo "<h3 class='text-center'>Tiempo realizado de Transacciones Exitosas</h3>";

echo  "</table>";

?>
</body>
</html>
