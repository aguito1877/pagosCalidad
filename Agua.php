<html>
<head>
<title>Agua</title>
<link href="stilo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
        

<script src="jquery-3.5.1.min.js" type="text/javascript"></script>
</head>
<body>
  
    <form action="Consultas/Agua_model.php" method="POST">
     <div class="container">
<!--         <img src="img/call.jpg" alt="" width="1050" height="150"/><hr>-->
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                        <label>Numero de cuenta *</label><br>
                        <hr>
                    </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="numero_cuenta_agua" required=""><br>
                    </div>
                         <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">Proceder al Pago</button>
                        <!--<input type="submit" class="btn btn-primary" name="send" value="Proceder con el pago">-->
                    </div>
                        
                </div>
                    
         </div>
         <center>
         <img src="img/agua.jpg" alt="" width="300" height="150"/>
         </center>
     </div>

</form>
   
</body>
</html>