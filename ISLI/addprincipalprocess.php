<?php
include('connect.php');  
// Get values from form 
$tbl_name="principal_register"; // Table name 
// Get values from form 
$principal_name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email_id=$_POST['email'];
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(principal_id,principal_name,username,password,email_id)VALUES('$principal_id','$principal_name','$username','$password','$email_id')";
$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='addprincipal.php'>Back to main page</a>";
}

else {
echo "ERROR";
echo "<BR>";
echo "<a href='addprincipal.php'>Back to main page</a>";
}
?> 

<?php 
// close connection 
mysql_close();
?>