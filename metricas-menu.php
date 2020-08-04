
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/metricas-menu.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Metricas</title>
</head>
<body>

<div class="container text-center"><h3>Metricas del Sistema  </h3></div>
<div id="exTab1" class="container">	
<ul  class="nav nav-pills">
			<li class="active">
        <a href="#1a" data-toggle="tab" class="btn btn-secondary">Entendibilidad</a>
			</li>
			<li><a href="#2a" data-toggle="tab" class="btn btn-secondary">Efectividad</a>
			</li>
			<li><a href="#3a" data-toggle="tab" class="btn btn-secondary">Eficiencia</a>
			</li>
  		
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">

          <p>Metricas de Entendibilidad</p>
		  <?php include('metricas.php') ?>
				</div>

				<div class="tab-pane" id="2a">
          <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
				</div>

        <div class="tab-pane" id="3a">
          <p class='text-center'>Metricas de eficiencia</p>
		  <?php include('metricas_br.php') ?>
				</div>

          
			</div>
  </div>


<hr></hr>

  </div>


<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
