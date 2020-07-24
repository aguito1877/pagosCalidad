<?php
   require("../Modelo/conexion.php"); 
  session_start();
  

  //echo $usuario;  

$query = mysqli_query($conexion, "SELECT * FROM `preguntas` WHERE `usuario`='".$_SESSION['usu']."' and `estado`='1'");
$nf = mysqli_num_rows($query);
//echo "SELECT * FROM `preguntas` WHERE `usuario`='".$_SESSION['usu']."' and `estado`='1'";
if ($nf == 1) {
    header('Location: ./Autentificacion.php');
}elseif ($nf == 0) {
    
    $delay = 3; // Where 0 is an example of a time delay. You can use 5 for 5 seconds, for example!
header("Refresh: $delay;");


}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Loader</title>
	<meta name="description" content="Learn how to recreate the preloader from Cantina Negrar. Tutorial for a passionate front-end web developers by Petr Tichy.">
	<link href="../Css/estil.css" rel="stylesheet" type="text/css"/>
	
	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
	.back-link a {
		/* color: #27AE60 ;
		text-decoration: none; 
		border-bottom: 1px #fff solid;
		font-size:20px; */
		text-decoration:none;
font-weight: 600;
font-size: 20px;
color:#fff;
padding-top:15px;
padding-bottom:15px;
padding-left:40px;
padding-right:40px;
background-color: transparent;
border-width: 3px;
border-style: solid;
border-color: #fff;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #fff; 
		text-decoration: none;
		border-bottom: 1px #fff solid;
		font-size:30px;
	}
	h1 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
		color: #fff;
		text-align: right;
		padding-left: 100px;
	}
	h2{
		color:#fff;
		padding-left: 370px;
	}
	
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	</style>
</head>
<body class="demo">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

	<!-- Demo content -->			
	<div id="demo-content">

		<header class="entry-header">

			<nav class="back-link">
							<span class="nav-previous"><a href="../index.php" rel="prev" class="button"><span class="meta-nav">&larr;</span>Regresar</a></span>
							<br><br><br>
			</nav><!-- .nav-single -->

			<h1 class="entry-title">Esperando que ingrese el usuario desde la aplicación</h1>
			<h2 class="entry-title">Por favor abra su aplicacion Mega Market</h2>
		</header>

		<div id="loader-wrapper">
			<div id="loader"></div>
		</div>

	</div>
	<!-- /Demo content -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>

</body>
</html>


