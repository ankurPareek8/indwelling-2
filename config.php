<?php
//Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//MySQL database setting
$dbhost = "localhost"; //hostname
$dbuser = "id7450367_root"; //username
$dbpass = "root123"; //password
$dbname = "id7450367_indwelling"; //database name

//make the mysql connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Test if the connection succeeded
if (mysqli_connect_errno()){
  die("Database connection failed : " .
   mysql_connect_error() . 
   " with the number" . mysql_connect_errno()
  );
}

?>
