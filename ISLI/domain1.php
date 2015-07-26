/*This particular code demonstrates about the domain network*/

<?php
include('connect.php');
// Get values from form 
$tbl_name="priority"; // Table name 
// Get values from form 
$sql="SELECT * FROM $tbl_name WHERE domain = '1' ";
$result=mysql_query($sql);
if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " priorityname: " . $row["priority_name"]. " status" . $row["status"]." rank: " . $row["rank"]. " domain: " . $row["domain"]. " score". $row["score"]."<br>";
    }
} else {
    echo "0 results";
}

?>
<?php 
// close connection 
mysql_close();
?>
