<html>
    <head>
        <meta charset="utf-8">
        <title>ANT</title>
        <!--<script type="text/javascript" src="Libreriajquery/jquery-3.5.1.min.js"></script>-->
        <link href="stilo.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-3.5.1.min.js" type="text/javascript"></script>
    </heade>

<!--<style>
    #Cedula div{
        display:block;
    }
    #Placa div{
        display: none;
    }
    #ninguno div{
        display: null;
    }
/*#prin div{
    display: blo;
}*/
</style>-->
<body>
    <!--<img src="img/call.jpg" alt="" width="1050" height="150"/><hr>-->
    <select id="servi" name="servi" onchange="mostrar(this.value);" class="form-control">
        <option value="Cedula">Cédula de identidad</opcion>
        <option value="Placa">Placa</opcion>
    </select>
    <br>
    <hr>
   
            <br>
    <div id="Cedula" style="display: none;">
        <form action="" method="post">
            <!--        <div class="form-group">-->
            <input type="text" name="cedula1" placeholder="Cédula" minlength="10" maxlength="10" required class="form-control">
            
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            
   <!--        <input type="submit" name="Send" value="Enviar"/>-->
            <!--</div>-->
            
        </form>
    </div>

    <div id="Placa" style="display: none;">
        <form action="" method="post">
            <input type="text" name="placa1" placeholder="Placa" minlength="10" maxlength="10" required class="form-control">
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
           <!--<input type="submit" name="Send" value="Enviar"/>-->
        </form>
    </div>

    <div id="ninguno" style="display: NULL;">
        <form action="" method="post">
            <input type="text" name="cedula3" placeholder="Cédula" minlength="10" maxlength="10" required class="form-control">
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
           <!--<input type="submit" name="Send" value="Enviar"/>-->
        </form>
    </div>
 <center>
     <img src="img/ant.jpg" alt="" width="200" height="200"/>
                 </center>
    <script type="text/javascript">
        function mostrar(id) {
            if (id == "Cedula") {
                $("#Cedula").show();
                $("#Placa").hide();
                $("#ninguno").hide();
            }
            if (id == "Placa") {
                $("#Placa").show();
                $("#Cedula").hide();
                $("#ninguno").hide();
            } else if (id == "ninguno") {
                $("#Placa").hide();
                $("#Cedula").hide();
                $("#ninguno").show();
            }
        }

    </script>
</body>
<!--<script>
function muestra(){
    document.getElementById('Cedula').style.display='block';
}
</script>-->
<!--<script type="text/javascript">
$(document).ready(function(){
    $('#servi').on('change',function(){
        var selectValor = '#'+$(this).val();
        $('#prin').children('div').hide();
        $('#prin').children(selectValor).show();
    });
});

</script>-->
</body>
</html>