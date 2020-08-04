<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/sandstone/bootstrap.min.css">
        <title>Verificar</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    </head>

    <?php
    require("conexion.php");
     

    $cedula = $_POST['cedula'];
    $servicio = $_POST['claro'];
    $nombre = '';
    $apellido = '';
    $valor = 0;
    $estado = '';


    $consulta = "SELECT * FROM usuario WHERE cedula =$cedula and servicio='$servicio' and estado= 'pendiente'";
    $query = mysqli_query($conexion, $consulta);
    while ($fila = mysqli_fetch_array($query)) {
        $nombre = $fila['nombre'];
        $apellido = $fila['apellido'];
        $valor = $fila['valor'];
        $estado = $fila['estado'];
    }


    if (mysqli_num_rows($query) >= 1) {
        session_start();
        $_SESSION['cedula'] = $cedula;
        ?>

        <div class="container mt-5">
            <form>
                <label for="contador">Tiempo de sesion:</label><input type="text" id="contador">
            </form>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card bg-secondary">
                        <div class="card-header">
                            <h2 class='text-center'><b>Verificar Valores</b>  </h2>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <b>Nombre:</b>
                                <label class='form-control' for=""><?php echo $nombre . ' ' . $apellido ?></label>
                            </div>
                            <div class="form-group">
                                <b>Servicio</b>
                                <label class='form-control' for=""><?php echo $servicio ?></label>
                            </div>
                            <div class="form-group">
                                <b>Valor a Pagar</b>
                                <label class='form-control' for="">$<?php echo $valor ?></label>
                            </div>
                            <div class="form-group">
                                <b>Estado:</b>
                                <label class='form-control' for=""><?php echo $estado ?></label>
                            </div>

                        </div>
                    </div>

                    <hr>
                    <form id="form"action="pago.php" method="POST">
                        <input type="text" name="servicio" value="<?php echo $servicio ?>" hidden>
                        <input type="text" name="valor" value="<?php echo $valor ?>" hidden>
                        <input type="text" name="cedula" id="cedula"value="<?php echo $cedula ?>" hidden>
                        <input type="text" name="nombre" value="<?php echo $nombre . ' ' . $apellido ?>" hidden>
                        <button type="subtmit" class="btn btn-primary btn-lg btn-block enviar"><h4>Pagar</h4>  </button>
                    </form>
                    
                    <hr>
                    <hr>
                    <div id="resp">

                    </div>
                    <a href="index.php" class="btn btn-primary btn-lg btn-block salir"> <h4>Salir</h4> </a>
                    <script lang="javascript">
                        
                        var cont = 0;
                        function contador() {
                            var contador = document.getElementById("contador");
                            contador.value = cont;
                            cont++;
                            
                        }
                    </script>           
                    <script>
                        $(document).ready(function ()
    {
                        
                        var bPreguntar = true;
                        $(".enviar").on('click', function () {

                            bPreguntar = false;
                            
                          
                        });
                        $(".salir").on('click', function () {
                            if(cont<3){
                              enviarstoop();  
                            }else{
                                
                            }
                            
                            bPreguntar = true;
                          
                        });
                        
                       
                        
                        window.onbeforeunload = preguntarAntesDeSalir;

                        function preguntarAntesDeSalir()
                        {
                            
                            if (bPreguntar) {
                               
                              enviar();
                                return "¿Seguro que quieres salir?";
                                
                               
                            }
                        }
    })
                    </script> 
                    <script language="JavaScript" type="text/javascript">

                        function enviar()
                        {
                            var parametros = {
                                "mensaje": "verificar datos, Servicio Claro",
                                "cedula": $("#cedula").val()
                            };
                            
                            $.ajax({
                                type: "POST",
                                url: "ab.php",
                                data: parametros,
                                success: function (r)
                                {
                                    
                                    $('#resp').html(r);
                                }
                            });

                        }
                        function enviarstoop(){
                           var parametros = {
                                "mensaje": "se abandono, Servicio Claro",
                                "cedula": $("#cedula").val()
                            };
                            $.ajax({
                                type: "POST",
                                url: "abpag.php",
                                data: parametros,
                                success: function (r)
                                {
                                    
                                    $('#resp').html(r);
                                }
                            });
                        }
                    </script> 



                </div>
            </div>
        </div>
        <?php
        //echo "<script>alert('Bienvenido $nombre')</script>";
        //echo "<script>location.href='detallePago.php'</script>";
        //echo "Bienvenido" . $nombre;
    } else {

        echo "<script>alert('Usted no Tiene Valores pendientes')</script>";
        echo "<script>location.href='index.php'</script>";
    }
    
    ?>
    <script>
    setInterval('contador()',1000);
    
    </script>
