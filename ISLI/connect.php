<?php
/* Database config */
$db_host		= 'ec2-52-69-44-64.ap-northeast-1.compute.amazonaws.com';
$db_user		= 'root';
$db_pass		= 'code4good';
$db_database	= 'ISLI'; 
 
/* End config */
 
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Connect to server and select database.
mysql_connect("$db_host", "$db_user", "$db_pass")or die("cannot connect"); 
mysql_select_db("$db_database")or die("cannot select DB");

?>
