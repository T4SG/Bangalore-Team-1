<html>
<head>
	<title> STAFF REGISTER </title>
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
<body>
<form id='register' action='staffregisterverify.php' method='post'
    accept-charset='UTF-8'>
<center><h1>Register</h1></center>
<div class="container center">
      
				<div class="row wrapper ">

					<div class="col s12 ">
						<div class="col s12 center">
							<img src="logo.gif" alt="Logo" height="100" width="100">
						</div>
				
			<!--START -->		
					  <div class="row ">
						<div class="input-field col s12">
	


<input type='hidden' name='submitted' id='submitted' value='1'/>
</div>
<br>
<br>
				<div class="input-field col s12">
	
<label for='name' >Your Full Name*: </label>
<input type='text' name='name' id='name' maxlength="50" />
</div>
<br>
<br>
				<div class="input-field col s12">
	
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50" />
 </div>
<br>
<br>
				<div class="input-field col s12">
	
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
 </div>
<br>
<br>
				<div class="input-field col s12">
	
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
</div>
<br>
<br>
</div>
</div>	
<button class="btn waves-effect waves-light" type='submit' name='Submit' value='Submit' >Submit
 <i class="material-icons"></i>
 </button>
</form>
</body>
</html>