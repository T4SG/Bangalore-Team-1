<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

<style>
iframe{
    overflow:hidden;
}
</style>
</head>

<body>
<!-- Page Layout here -->
 
	
					<nav>
    <div class="nav-wrapper white">
      <a href="#!" class="brand-logo"><span style="    color: #26a69a;">School Name</span></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><span style="    color: #26a69a;"><i class="material-icons">menu</i></span></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><span style="    color: #26a69a;">Page 1</span></a></li>
        <li><a href="badges.html"><span style="    color: #26a69a;">Page 1</span></a></li>
        <li><a href="collapsible.html"><span style="    color: #26a69a;">Page 1</span></a></li>
        <li><a href="mobile.html"><span style="    color: #26a69a;">Logout</span></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html"><span style="    color: #26a69a;">Page 1</span></a></li>
        <li><a href="badges.html"><span style="    color: #26a69a;">Page 1</span></a></li>
        <li><a href="collapsible.html"><span style="    color: #26a69a;">Page 1</span></a></li>
        <li><a href="mobile.html"><span style="    color: #26a69a;">Logout</span></a></li>
      </ul>
    </div>
  </nav>
  
<div class="container center">
				
      
				<div class="row wrapper ">

					<div class="col s12 ">
						<iframe height="250" width="100%"  frameBorder="0" src="bar-chart.php">
							  
						</iframe>

						<iframe height="400" width="100%"  frameBorder="0" src="doughnut.html">
							  
						</iframe>
                            <iframe height="300" width="100%"  frameBorder="0" src="line-chart.html">
							  
						</iframe>

				
					</div>
				</div>
				
				
      

    
    </div>     
     
        
</body>


<script>
	$(document).ready(function(){
		//NAVBAR
		$(".button-collapse").sideNav();
		 $('select').material_select();
		//accordion
		$('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
	 
  );
	
	
	
		});
</script>
</html>
