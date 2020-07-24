<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/sandstone/bootstrap.min.css">
    <title>Metricas</title>
</head>
<body>
<div class="container">
<div class="col-6">


<h1 class='text-center'>Entendibilidad</h1>
<h3 class='text-center'>Cantidad de veces que el usuario final accede, durante unas sesión, a las funciones de ayuda en línea.</h3>
<table class="table table-hover">
<thead class="card-header">
<th>Fecha</th>
<th>Usuario</th>

</thead>
<tbody>
<tr>
    <?php
     include('conexion.php');
    $chat = "SELECT * FROM veces_chat ";
    $resul = mysqli_query($conexion, $chat);

    while ($fila = mysqli_fetch_array($resul)) {
        
         $fecha = $fila['fecha'];
        $usuario = $fila['usuario'];
        echo "<td>$fecha</td>";
        echo "<td>$usuario</td></tr>";
    }
    
    ?>

</tbody>

</table>
<h3 class="text-center">Numero de veces por Usuario</h3>
<table class="table table-hover">
<thead>
<th>Nuero de Veces</th>
<th>Usuario</th>

</thead>
<tbody>
<tr>
<?php
$chatVeces = "SELECT count(*) as N_Veces, usuario FROM veces_chat group by usuario ";
$resul1 = mysqli_query($conexion, $chatVeces);

    while ($fila = mysqli_fetch_array($resul1)) {
        
        $nveces = $fila['N_Veces'];
        $usuario = $fila['usuario'];
        echo "<td>$nveces</td>";
        echo "<td>$usuario</td></tr>";
    }
?>
</tbody>

</table>
<br>
<br>
<hr style="border:15px;"/>

<h3 class='text-center'>Números de mensajes de error visualizados durante una sesión</h3>
<table class="table table-hover">
<thead>
<th>Mensaje</th>
<th>Fecha</th>
<th>Usuario</th>

</thead>
<tbody>
<tr>
    <?php
     include('conexion.php');
    $msg_error = "SELECT * FROM msg_error1 ";
    $resul = mysqli_query($conexion, $msg_error);

    while ($fila = mysqli_fetch_array($resul)) {
        
         $msg = $fila['msg'];
        $fecha = $fila['fecha'];
        $usuario = $fila['usuario'];
        echo "<td>$msg</td>";
        echo "<td>$fecha</td>";
        echo "<td>$usuario</td></tr>";
    }
    
    ?>

</tbody>

</table>

</table>
<h3 class="text-center">Numero de veces por Usuario</h3>
<table class="table table-hover">
<thead>
<th>Nuero de Veces</th>
<th>Usuario</th>

</thead>
<tbody>
<tr>
<?php
$errorVeces = "SELECT count(*) as N_Veces, usuario FROM msg_error1 group by usuario ";
$resul1 = mysqli_query($conexion, $errorVeces);

    while ($fila = mysqli_fetch_array($resul1)) {
        
        $nveces = $fila['N_Veces'];
        $usuario = $fila['usuario'];
        echo "<td>$nveces</td>";
        echo "<td>$usuario</td></tr>";
    }
?>
</tbody>

</table>
</div>
</div>
</body>
</html>