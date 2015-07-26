/*Inserting the details into the ISLI staff admin table for the login credentials*/
<?php
include('connect.php');
// Get values from form 
$tbl_name="staff_register"; // Table name 
// Get values from form 
$staff_name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email_id=$_POST['email'];
// Insert data into mysql  and executing the query
$sql="INSERT INTO $tbl_name(staff_id,staff_name,username,password,email_id)VALUES('$staff_id','$staff_name','$username','$password','$email_id')";
$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='addstaff.php'>Back to main page</a>";
}

else {
echo "ERROR";
echo "<BR>";
echo "<a href='addstaff.php'>Back to main page</a>";
}
?> 

<?php 
// close connection 
mysql_close();
?>
