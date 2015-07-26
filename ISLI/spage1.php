<html>
<head>
	<title>ISLI
	</title>
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
		  <script src="js/script.js"></script>
          <link rel="stylesheet" href="css/styles.css">
		  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  <style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 100%;
                height: 150px;
            }
        </style>
</head>
<body class="">
	<!-- Navbar goes here -->

    <!-- Page Layout here -->
    <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'isli'
                });
            }
        </script>
	<div id="map"></div>
					<nav>
    <div class="nav-wrapper white">
      <a href="#!" class="brand-logo"><span style="    color: #26a69a;">ISLI</span></a>
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
						
					<ul class="collapsible " data-collapsible="accordion">
						<li>
						  <div class="collapsible-header" style=" color: #fff;   background-color: #26a69a;"><strong>SCHOOL VISITS</strong></div>
						  <div class="collapsible-body" style="text-align:left;">
						  <?php
						  include('connect.php');
						  $ids= mysql_query('select school_id from school_visit');
						  $ids = mysql_num_rows($ids);
						  echo $ids;
						  for ($x = 1; $x <= $ids; $x++) {
						  	//echo "<div id='".$x."'>"; 
						  	echo "<a href='spage2.php?id=".$x."'>".$x." </a>";


						  	echo "</div>";	
}
						  ?>						  
						  </div>
						</li>
						
					  </ul>
			
			<!--START -->
					
					</div>
				</div>
				<div class="row  ">
					  <div class="col s12 "><a class="waves-effect waves-light btn col s12"><i class="material-icons left"></i>Workshop</a></div>
					 </div>
					 <div class="row  ">
					  <div class="col s12 "><a class="waves-effect waves-light btn col s12"><i class="material-icons left"></i>Dashboard</a></div></div>
				 
			<!--END -->	
				
			</div>
      

    
    </div>     
        

</body>
<script>
	$(document).ready(function(){
		//NAVBAR
		$(".button-collapse").sideNav();
		//accordion
		$('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
		});
</script>
</html>
