<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './template.php';


// tiempo total transcurrido para el conteo de una pagina a otra
require "conexion.php";
$cantidad = 0;
$dato_produ = "SELECT * FROM tmp_entre_paginas";
$r2 = $conexion->query($dato_produ);

foreach ($r2 as $r1) {
    $cantidad++;
}

$total_tiempo = "SELECT * FROM tmp_entre_paginas WHERE `tmp_entre_paginas`.`id_temp` = " . $cantidad . ";";
$r3 = $conexion->query($total_tiempo);
$row2 = $r3->fetch_assoc();
echo $fecha = date("H:i:s");
$porciones = explode(":", $fecha);


      $porciones[1]; 
      $seg1=$porciones[1] + $porciones[2]/60; 
      $seg2=$seg1*60;

if($row2["estado"]!="Tiempo_total"){
   $seg =($seg2-$row2["tiempo"]);

$q = "UPDATE  `tmp_entre_paginas` SET `tiempo`='" . $seg . "'" . ", `estado` = 'Tiempo_total' WHERE `tmp_entre_paginas`.`id_temp` = " . $cantidad . ";";
//print_r($q);
$resource = $conexion->query($q); 
}
//fin de conteo


//transacciones exitosa
$cedula = $_POST['cedula'];
$cantidad = 0;
$dato_produ = "SELECT * FROM transacciones_exitosas";
$r2 = $conexion->query($dato_produ);

foreach ($r2 as $r1) {
    $cantidad++;
}

echo $fecha1 = date("H:i:s");
$porciones = explode(":", $fecha1);


$porciones[1];
$seg1 = $porciones[1] + $porciones[2] / 60;
$seg2 = $seg1 * 60;

//echo "<br>" . $seg;
$q = "INSERT INTO `transacciones_exitosas` (`id_temp`, `cliente`,`tiempo`, `estado`) VALUES ('" . ($cantidad + 1) . "','" . $cedula . "','" . $seg2 . "','contando_tiempo')";
//print_r($q);
$resource = $conexion->query($q);
//fin transacciones exitosas

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="stilo.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylestarj.css">
    <link rel="stylesheet" type="text/css" href="css/demotarj.css">
    <title class="lang" key="cod_len1">Pagos Agiles</title>
    <!--<link rel="stylesheet" href="../style.css">-->
    <script src="js/cronometro.js" type="text/javascript"></script>
</head>
<style>
h1{
    
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    background: #A1FFCE;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #FAFFD1, #A1FFCE);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #FAFFD1, #A1FFCE); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    padding:5px;
}
ul.horizontal{
margin:0;
padding:0;
}
ul.horizontal li{
    margin:0;
    padding:0;
display:block;
float:left;
padding:0 10px;
}
a{
    margin:0;
padding:0;  

}
/* */
</style>

<body onload="carga()">
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="lang" key="cod_len2">Pago Agil</h3>
            </div>


            <ul class="list-unstyled components">

                <li>
                    <a class="lang" id="btn1" key="cod_len3">Pagos</a>

                </li>
                <li>
                    <a class="lang" id="btn2" key="cod_len3_1" href='ayuda.php'>Ayuda</a>
                </li>


            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span class="lang" key="cod_len4">Menu</span>

                    </button>
                    <!--<button type="button" id="btn5" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span class="lang" key="cod_len5">Administrar</span>

                    </button>-->

                    <a href="Inicio.html" class="lang"  key="cod_len6_1" style="border-radius: 6px; padding:8px; border: 0px solid;  background: #E0EAFC; " >Inicio</a>

                    <ul class="horizontal">
                        <li>
                            <button class="traslate" id="en" style="border-radius: 6px; border:0 solid; background-color: transparent; "><img src="img/ingles.jpg" id="visa" width="30" height="20"></button>  /
                        </li>

                        <li>
                            <button class="traslate" id="fra" style="border-radius: 6px; border:0; background-color: transparent; "><img src="img/frances.gif" id="visa" width="30" height="20"></button>  /
                        </li>

                        <li>
                            <button class="traslate" id="ale" style="border-radius: 6px; border:0; background-color: transparent; "><img src="img/aleman.jpg" id="visa" width="30" height="20"></button>
                        </li>
                        <li><span id="minuto">0</span>:<span id="segundo">0</span></li>
                    </ul>

                </div>


            </nav>

            <?php
            //session_destroy();
            //session_start();
            $valor = $_POST['valor'];
            $servicio = $_POST['servicio'];
            $cedula = $_POST['cedula'];
            $_SESSION['cedula'] = $cedula;
            $nombre = $_POST['nombre'];



            ?>
            <section>

                <div class="creditCardForm">
                    <center>
                        <div class="form-group owner">
                            <form method="POST" action="detallePago.php">
                                <label class="lang" for="owner" key="cod_servicio">Servicio</label>
                                <input type="text" class="form-control" id="servicio" value="<?php echo $servicio ?>" readonly>
                        </div>
                        <div class="form-group owner">
<<<<<<< HEAD
                            <label class="lang" for="owner" key="cod_valor">Valor</label>
=======
                            <label class="lang" for="owner" key="cod_len10">Valor a Pagar</label>
>>>>>>> a52f7aacfa3d706f4021d1891b30130916589314
                            <input type="text" class="form-control" id="valorPago" value="<?php echo $valor ?>" readonly>
                        </div>
                        <input type="text" value="pagado" hidden name="estado">
                        <input type="text" value="<?php echo $cedula ?>" hidden name="cedula">

                    </center>

                    <div class="heading">
                        <h1 class="lang" key="cod_len9">Confirmar Pago</h1>
                    </div>
                    <div class="payment">

                        <table>
                            <tr>
                                <td>
                                    <div class="form-group owner">
                                        <label class="lang" for="owner" key="cod_len10">Propietario</label>
                                        <input type="text" class="form-control" id="owner" required value="<?php echo $nombre ?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group" id="card-number-field">
                                        <label class="lang" for="cardNumber" key="cod_len11">Numero de tarjeta</label>
                                        <input type="text" class="form-control" id="cardNumber" required>
                                    </div>
                                    <div class="form-group" id="credit_cards">
                                        <img src="img//visa.jpg" id="visa" width="25" height="25">
                                        <img src="img/mastercard.jpg" id="mastercard" width="25" height="25">
                                        <img src="img/amex.jpg" id="amex" width="25" height="25">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group CVV ">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="form-control" id="cvv" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group" id="expiration-date">
                                        <label class="lang" for="expiracion" key="cod_len12">Fecha de Expiracion</label>
                                        <select class="form-control" required>
                                            <option class="lang" value="01" key="cod_len13">Enero</option>
                                            <option class="lang" value="02" key="cod_len14">Febrero</option>
                                            <option class="lang" value="03" key="cod_len15">Marzo</option>
                                            <option class="lang" value="04" key="cod_len16">Abril</option>
                                            <option class="lang" value="05" key="cod_len17">Mayo</option>
                                            <option class="lang" value="06" key="cod_len18">Junio</option>
                                            <option class="lang" value="07" key="cod_len19">Julio</option>
                                            <option class="lang" value="08" key="cod_len20">Agosto</option>
                                            <option class="lang" value="09" key="cod_len21">Septiembre</option>
                                            <option class="lang" value="10" key="cod_len22">Octubre</option>
                                            <option class="lang" value="11" key="cod_len23">Noviembre</option>
                                            <option class="lang" value="12" key="cod_len24">Diciembre</option>
                                        </select>
                                        <select class="form-control" required>
                                            <option value="16"> 2021</option>
                                            <option value="17"> 2022</option>
                                            <option value="18"> 2023</option>
                                            <option value="19"> 2024</option>
                                            <option value="20"> 2025</option>
                                            <option value="21"> 2026</option>
                                        </select>
                                </td>
                                <td>
                                    <div class="form-group" id="card-number-field">
                                        <label class="lang" for="cardNumber" key="cod_len25">Tipo de pago</label>
                                        <select class="form-control">
                                            <option class="lang" value="corriente" key="cod_len26">Corriente</option>
                                            <option class="lang" value="credito" key="cod_len27">Credito</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <center>
                            <div class="form-group" id="pay-now">
                                <button type="submit" class="lang" key="cod_len28" id="confirm-purchase" style=" font-size: 20px;  border-radius: 6px; padding:10px 20px;  border: 0px solid;  background: #A1FFCE;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 "><b>Confirmar</b>  </button>
                            </div>
                        </center>
                        </form>
                    </div>
                </div>
            </section>

        </div>



    </div>






    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://account.snatchbot.me/script.js"></script>
    <script>
        $(document).ready(function() {

            let contador = 0;
            $('body').on('click', '#sntch_button', function() {
                //alert("dio click")

                contador++
                console.log(contador)
                <?php
                include('conexion.php');
                date_default_timezone_set('America/Guayaquil');

                $date = date('l jS \of F Y h:i:s A');;
                $user = $cedula;

                $insertar = " INSERT INTO veces_chat (fecha, usuario) values ( '$date', '$user' )  ";
                mysqli_query($conexion, $insertar);
                ?>


            })
        })
        window.sntchChat.Init(119909)
    </script>






    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.payform.min.js" charset="utf-8"></script>


    <!-- vaidacion de tarjeta -->

    <script>
        $(function() {

            var owner = $('#owner');
            var cardNumber = $('#cardNumber');
            var cardNumberField = $('#card-number-field');
            var CVV = $("#cvv");
            var mastercard = $("#mastercard");
            var confirmButton = $('#confirm-purchase');
            var visa = $("#visa");
            var amex = $("#amex");
            let contador = 0;
            let msg_error = '';
            var hoy = new Date()
            var fecha = hoy.getDate() + '-' + (hoy.getMonth() + 1) + '-' + hoy.getFullYear()
            var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds()
            var fechaCompleta = fecha + ' ' + hora
            // Use the payform library to format and validate
            // the payment fields.

            cardNumber.payform('formatCardNumber');
            CVV.payform('formatCardCVC');


            cardNumber.keyup(function() {

                amex.removeClass('transparent');
                visa.removeClass('transparent');
                mastercard.removeClass('transparent');

                if ($.payform.validateCardNumber(cardNumber.val()) == false) {
                    cardNumberField.addClass('has-error');
                } else {
                    cardNumberField.removeClass('has-error');
                    cardNumberField.addClass('has-success');
                }

                if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
                    mastercard.addClass('transparent');
                    amex.addClass('transparent');
                } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
                    mastercard.addClass('transparent');
                    visa.addClass('transparent');
                } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
                    amex.addClass('transparent');
                    visa.addClass('transparent');
                }
            });

            confirmButton.click(function(e) {

                //e.preventDefault();

                var isCardValid = $.payform.validateCardNumber(cardNumber.val());
                var isCvvValid = $.payform.validateCardCVC(CVV.val());

                if (owner.val().length < 5) {
                    alert("Wrong owner name " + fechaCompleta);

                    <?php
                    include('conexion.php');
                    date_default_timezone_set('America/Guayaquil');
                    $msg = 'Nombre de Usuario incorrecto ';
                    $date = date('l jS \of F Y h:i:s A');;
                    $user = $cedula;

                    $insertar = " INSERT INTO msg_error1 (msg, fecha, usuario) values ('$msg', '$date', '$user')  ";
                    mysqli_query($conexion, $insertar);
                    ?>

                } else if (!isCardValid) {
                    alert("Wrong card number " + fechaCompleta);
                    <?php
                    include('conexion.php');

                    $msg = 'Numero de tarjeta incorrecto';
                    $date = date('l jS \of F Y h:i:s A');;
                    $user = $cedula;

                    $insertar = " INSERT INTO msg_error1 (msg, fecha, usuario) values ('$msg', '$date', '$user')  ";
                    mysqli_query($conexion, $insertar);
                    ?>
                } else if (!isCvvValid) {
                    alert("Wrong CVV " + fechaCompleta);
                    <?php
                    include('conexion.php');

                    $msg = '"CVV incorrecto';
                    $date = date('l jS \of F Y h:i:s A');;
                    $user = $cedula;

                    $insertar = " INSERT INTO msg_error1 (msg, fecha, usuario) values ('$msg', '$date', '$user')  ";
                    mysqli_query($conexion, $insertar);
                    ?>
                } else {
                    // Everything is correct. Add your form submission code here.
                    alert("Everything is correct " + fechaCompleta);

                }
            });
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#btn1').on('click', function() {
                $.ajax({
                    type: "POST",
                    url: "Agua.php",
                    success: function(response) {
                        $('#div-results').html(response);
                    }
                });
            });
        });
        $('#btn2').on('click', function() {
            $.ajax({
                type: "POST",
                url: "Ant.php",
                success: function(response) {
                    $('#div-results').html(response);
                }
            });
        });
        $('#btn3').on('click', function() {
            $.ajax({
                type: "POST",
                url: "Movistar.php",
                success: function(response) {
                    $('#div-results').html(response);
                }
            });
        });
        $('#btn4').on('click', function() {
            $.ajax({
                type: "POST",
                url: "SRI.php",
                success: function(response) {
                    $('#div-results').html(response);
                }
            });
        });
        //            $('#btn5').on('click', function () {
        //                $.ajax({
        //                    type: "POST",
        //                    url: "Agua.php",
        //                    success: function (response) {
        //                        $('#div-results').html(response);
        //                    }
        //                });
        //            });
        //        });
        //         $('#btn6').on('click', function () {
        //                $.ajax({
        //                   
        //                    url: "Inicio.html",
        //                    success: function (response) {
        //                        $('#div-results').html(response);
        //                    }
        //                });
        //            });
        //        });
    </script>



    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://rawgit.com/jeresig/jquery.hotkeys/master/jquery.hotkeys.js"></script>
    <script type="text/javascript">
        $(document).bind('keydown', 'ctrl+a', function() {
            //alert("Has pulsado ctrl+a");
            var win = window.open("ayuda.php", '_blank');
            win.focus();
        });

        $(document).bind('keydown', 'ctrl+l', function() {
            alert("Has pulsado ctrl+l");
        });
    </script>




    <script src="js/script_l.js" charset="utf-8"></script>
</body>

</html>