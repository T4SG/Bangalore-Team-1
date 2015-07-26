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

		  <!-- Compiled and minified JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
          <link rel="stylesheet" href="css/styles.css">
</head>
<body class="">
	<!-- Navbar goes here -->

    <!-- Page Layout here -->
    
	<div class="container center">
      
				<div class="row wrapper ">

					<div class="col s12 ">
						<div class="col s12 center">
							<img src="logo.gif" alt="Logo" height="100" width="100">
						</div>
				
			<!--START -->
			<form action="p-loginverify.php" method="post">		
					  <div class="row ">
						<div class="input-field col s12">
						  
						  <input id="username" type="text" class="validate" name="username">
						  <label for="username">Username</label>
						</div>
						<div class="input-field col s12">
						  
						  <input id="password" type="password" class="validate" name="password">
						  <label for="password">Password</label>
						</div>
					  </div>
			<!--END -->	
			<!--START -->
			
			<!--END -->
			<!--START -->
				<div class="row ">
						<div class=" col s6">	
							<button class="btn waves-effect waves-light" type="submit" name="submit">Login
								<i class="fa fa-paper-plane"></i>
							</button>
						</div>
						<div class=" col s6">
						<a href=""><button class="btn waves-effect waves-light"  name="action">Forgot
								<i class="fa fa-pencil-square-o"></i>
							</button></a>
						</div>
				</div>
				</form>
			<!--END -->	
				</div>
			</div>
      

    
    </div>     
        

</body>
</html>
