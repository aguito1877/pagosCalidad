<?php
require'conexion.php';
$numero= $_POST['operadora'];
$consulta=mysqli_query($conexion, "SELECT * FROM telefonia WHERE numero = '$numero'");
$operadora;
$estado;
$valor;

if(mysqli_num_rows($consulta)>0){
        foreach($consulta as $dato){
            $operadora = $dato['operadora'];
            $estado = $dato['estado'];
            $valor = $dato['valor'];
        }

        if($operadora == (isset($_POST['movistar'])) ){
            if($operadora == 'movistar'){
                if($estado == 'pendiente'){
                    echo "Su valor a pagar es: " . $valor;
                }else{
                    echo "No Tiene valores pendientes";
                }
            }else{
                echo "El número no es Movistar";
                
            }

        }



        if($operadora == (isset($_POST['claro']))){
            if($operadora == 'claro'){
                if($estado == 'pendiente'){
                    echo "Su valor a pagar es: " . $valor;
                }else{
                    echo "No Tiene valores pendientes";
                }
            }else{
                echo "El número no es claro";
                
            }
        }


       if($operadora == (isset($_POST['cnt']))){
            if($operadora == 'cnt'){
                if($estado == 'pendiente'){
                    echo "Su valor a pagar es: " . $valor;
                }else{
                    echo "No Tiene valores pendientes";
                }
            }else{
                echo "El número no es CNT";
                
            }
        }


    }else{
        echo "No existe ese número ";
    }
   

?>