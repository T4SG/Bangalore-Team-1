<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ISLI Staff</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<!-- Latest compiled and minified Jquery -->
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<!-- Latest compiled and minified Jquery UI-->
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Dosis|Droid+Sans|Lobster' rel='stylesheet' type='text/css'>
		 <!-- Compiled and minified CSS -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		  <!-- Compiled and minified JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
          <link rel="stylesheet" href="css/styles.css">
		  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  <script src="Chart.js"></script>


</head>

<body>

<!-- Page Layout here -->
<div class="container center">
				
      
				<div class="row wrapper ">

					<div class="col s12 ">
						<div style="width: 80%">
							<canvas id="canvas" height="350" width="600"></canvas>
						</div>


				
					</div>
				</div>
				
				
      

    
    </div>     
	   
  <script type="text/javascript" >
  <?php
  include('connect.php');
      $ta=mysql_query("select score from 'school_visit'");
    
	  ?>


	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : ["Teacher Actions","Student Actions","Environment","Labs","Neatness"],
		datasets : [
			
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	};
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>     
       
</body>


<script >
	$(document).ready(function(){
		//NAVBAR
		$(".button-collapse").sideNav();
		 $('select').material_select();
		//accordion
		$('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
	 
 
	
	
	
		});
</script>
</html>
