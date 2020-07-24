<html>
<head>
<meta charset="utf-8">
    <title>Telefonia</title>
    <!--<script type="text/javascript" src="Libreriajquery/jquery-3.5.1.min.js"></script>-->
    <script src="jquery-3.5.1.min.js" type="text/javascript"></script>
    <link href="stilo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <!--<div class="container">-->
      
            <select id="servi2" name="servi2" onchange="mostrar(this.value);" class="form-control">
    <option value="Movistar">Movistar</option>
    <option value="Claro">Claro</option>
    <option value="CNT">CNT</option>
</select>
    <br>
    <hr>
<div id="Movistar" style="display: none;">
    <form action="Consultas/Telefonia_Model.php" method="POST">
          <input type="hidden" name="movistar" value="movistar">
              <input type="text" name="operadora" class="form-control" minlength="10" maxlength="10" placeholder="Número de celular" required>
         <br>
         
             <button type="submit" class="btn btn-primary">Enviar</button>
<!--             <input type="submit" name="send" value="Enviar" class="btn btn-primary">-->
   
    </form>
</div>

<div id="Claro" style="display: none;">
    <form action="Consultas/Telefonia_Model.php" method="POST">
         <input type="hidden" name="claro">
        <input type="text" name="operadora" placeholder="Número de celular" minlength="10" maxlength="10" required class="form-control">
         <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
<!--        <input type="submit" name="send" value="Enviar">-->
         
    </form>
</div>

<div id="CNT" style="display: none;">
    <form action="Consultas/Telefonia_Model.php" method="POST">
        <input type="hidden" name="cnt">
        <input type="text" name="operadora" placeholder="Número de celular" minlength="10" maxlength="10" required class="form-control">
         <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
<!--        <input type="submit" name="send" value="Enviar">-->
    </form>
</div>

<div id="ninguno" style="display: NULL;">
    <form action="Consultas/Telefonia_Model.php" method="POST">
        <input type="hidden" name="movistar" >
        <input type="text" name="operadora" placeholder="Número de celular" minlength="10" maxlength="10" required class="form-control">
         <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
<!--        <input type="submit" name="send" value="Enviar">-->
    </form>
</div>

<!--</div>
    </div>-->
<script type="text/javascript">
    function mostrar(id){
        if(id=="Movistar"){
            $("#Movistar").show();
            $("#Claro").hide();
            $("#CNT").hide();
            $("#ninguno").hide();
        }
        if(id=="Claro"){
            $("#Movistar").hide();
            $("#Claro").show();
            $("#CNT").hide();
            $("#ninguno").hide();
        }
        if(id=="CNT"){
            $("#Movistar").hide();
            $("#Claro").hide();
            $("#CNT").show();
            $("#ninguno").hide();
        }
        else{
                if(id=="Ninguno"){
                $("#Movistar").show();
                $("#Claro").hide();
                $("#CNT").hide();
                $("#ninguno").hide();
                }
            }          
    }

</script>

</body>
</html>