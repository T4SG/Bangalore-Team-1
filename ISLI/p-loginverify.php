html>
<body>
<?php
session_start(); // Starting Session
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo "$error";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
include("connect.php");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("cbit", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from principal where pricipal_id='$username' AND password='$password'", $connection);
$rows = mysql_num_rows($query);
echo "$rows";
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: petition.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";	
echo "$error";
}
mysql_close($connection); // Closing Connection
}
}
?>
</body>
</html>