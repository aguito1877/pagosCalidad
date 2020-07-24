<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/sandstone/bootstrap.min.css">
    <title>Verificar</title>
</head>

<?php
require("conexion.php");

$cedula = $_POST['cedula'];
$servicio = $_POST['agua'];
$nombre = '';
$apellido = '';
$valor = 0;
$estado = '';


$consulta= "SELECT * FROM usuario WHERE cedula =$cedula and servicio='$servicio' and estado= 'pendiente'";
$query = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($query)) {
    $nombre = $fila['nombre'];
    $apellido = $fila[ 'apellido'];
    $valor= $fila['valor'];
    $estado = $fila['estado'];

}


    if(mysqli_num_rows($query)>=1){
        session_destroy();
    session_start();
    $_SESSION['cedula'] = $cedula;
    ?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
            <div class="card bg-secondary">
            <div class="card-header">
            <h2 class='text-center'>Verificar Valores</h2>
            </div>

            <div class="card-body">
            <div class="form-group">
            Nombre:
            <label class='form-control' for=""><?php echo $nombre.' '.$apellido ?></label>
            </div>
            <div class="form-group">
            Servicio
            <label class='form-control' for=""><?php echo $servicio ?></label>
            </div>
            <div class="form-group">
            Valor
            <label class='form-control' for="">$<?php echo $valor ?></label>
            </div>
            <div class="form-group">
            Estado:
            <label class='form-control' for=""><?php echo $estado ?></label>
            </div>
            
            </div>
            </div>
            
            <hr>
            <form action="pago.php" method="POST">
            <input type="text" name="servicio" value="<?php echo $servicio ?>" hidden>
            <input type="text" name="valor" value="<?php echo $valor ?>" hidden>
            <input type="text" name="cedula" value="<?php echo $cedula ?>" hidden>
            <input type="text" name="nombre" value="<?php echo $nombre.' '.$apellido ?>" hidden>
            <button type="subtmit" class="btn btn-primary btn-lg btn-block">Pagar</button>
            </form>
            <hr>
            <hr>
            <a href="index.php" class="btn btn-primary btn-lg btn-block">Salir</a>
            

            
            </div>
        </div>
    </div>
<?php
    //echo "<script>alert('Bienvenido $nombre')</script>";
    //echo "<script>location.href='detallePago.php'</script>";
    //echo "Bienvenido" . $nombre;

} else{ 
    
    echo "<script>alert('Usted no Tiene Valores pendientes')</script>";
    echo "<script>location.href='index.php'</script>";
}
?>

