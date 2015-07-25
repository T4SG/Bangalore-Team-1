<?php
include('connect.php');
// Get values from form 
$tbl_name="principal"; // Table name 
// Get values from form 
$principal_id=$_POST['lg_id'];
$username=$_POST['header'];
$password=$_POST['category'];
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(principal_id,username,password)VALUES('$principal_id','$username','$password')";
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