<!DOCTYPE html>
<html>
<head>
<title>Easy Pay</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<!-- favicons -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/styleayuda.css">
<link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="mobile-logo">
    <a href=""><img src="images/ds-logo.png"></a>
  </div>
  <a class="menu-toggle rounded" href="#"><b>Menu</b> 
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="smooth-scroll" href="#Header"></a>
      </li>
      <li class="sidebar-nav-item">
        <a class="smooth-scroll" href="#OurWork">Servicios </a>
      </li>
      
    </ul>
  </nav>
  </header>
<section id="Banner">
  <div class="logo">
    <img src="images/logoEasy.PNG">
  </div>
  <div class="blacksection">
    <h1>Pagos<br>Rapidos<br>y Seguros</h1>
  </div>
</section>
<a href="#OurWork" class="mscroll"><img src="images/mouse-icon.png" alt="mouse icon"></a>

<section id="OurWork">
  <div class="container">
    <h2>Servicios </h2>
    <div class="row">
      
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <div class="each-work space" data-toggle="modal" data-target="#agua">
          
          <img src="images/servicios/logo agua.gif" alt="Bearbrand" width="200px">
          
        </div>
         <div class="each-work" data-toggle="modal" data-target="#luz">
          <img src="images/servicios/logo empresa electrica.png" alt="Designer" width="200px">
        </div>
        <div class="each-work space" data-toggle="modal" data-target="#claro">
          <img src="images/servicios/logo claro.png" alt="Mountain" width="100px">
        </div>
        
        
      </div>
    </div>
  </div>

  <?php include('modal/agua.php')?>
  <?php include('modal/luz.php')?>
  <?php include('modal/claro.php')?>

</section> 

 <div class="copyright"><p>Copyrights 2020 Pago Agil</p>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/plugin-active.js"></script>
</html>