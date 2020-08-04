<?php include('conexion.php')?>
</table>

<hr style="border:15px;"/>
<h1 class='text-center'>Efectividad</h1>
<h3 class="text-center">12. Numero de transaciones abandonadas</h3>
<table class="table table-hover">
<thead>
<th>Nuero de Veces</th>
<th>Usuario</th>

</thead>
<tbody>
<tr>
<?php
$errorVeces = "SELECT count(*) as N_Veces, usuario FROM trans_abandonadas group by usuario ";
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
<hr style="border:15px;"/>
<h3 class="text-center">13. Numero de sesiones de trabajo abandonadas</h3>
<table class="table table-hover">
<thead>
<th>Nuero de Veces</th>
<th>Fecha</th>

</thead>
<tbody>
<tr>
<?php
$errorVeces = "SELECT count(*) as N_Veces, fecha FROM pag_abandonadas group by DAY(fecha) ";
$resul1 = mysqli_query($conexion, $errorVeces);

    while ($fila = mysqli_fetch_array($resul1)) {
        
        $nveces = $fila['N_Veces'];
        $usuario = $fila['fecha'];
        echo "<td>$nveces</td>";
        echo "<td>$usuario</td></tr>";
    }
?>
</tbody>

</table>